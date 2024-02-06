BX.namespace("BX.Iblock.Catalog");

BX.Iblock.Catalog.CompareClass = (function()
{
	var CompareClass = function(wrapObjId, reloadUrl)
	{
		this.wrapObjId = wrapObjId;
		this.reloadUrl = reloadUrl;
		BX.addCustomEvent(window, 'onCatalogDeleteCompare', BX.proxy(this.reload, this));
	};

	CompareClass.prototype.MakeAjaxAction = function(url)
	{
		BX.showWait(BX(this.wrapObjId));
		BX.ajax.post(
			url,
			{
				ajax_action: 'Y'
			},
			BX.proxy(this.reloadResult, this)
		);
	};

	CompareClass.prototype.reload = function()
	{
		BX.showWait(BX(this.wrapObjId));
		BX.ajax.post(
			this.reloadUrl,
			{
				compare_result_reload: 'Y'
			},
			BX.proxy(this.reloadResult, this)
		);
	};

	CompareClass.prototype.reloadResult = function(result)
	{
		BX.closeWait();
		BX(this.wrapObjId).innerHTML = result;
	};

	CompareClass.prototype.delete = function(url)
	{
		BX.showWait(BX(this.wrapObjId));
		BX.ajax.post(
			url,
			{
				ajax_action: 'Y'
			},
			BX.proxy(this.deleteResult, this)
		);
	};

	CompareClass.prototype.deleteResult = function(result)
	{
		BX.closeWait();
		BX.onCustomEvent('OnCompareChange');
		BX(this.wrapObjId).innerHTML = result;
	};

	return CompareClass;
})();

document.addEventListener('DOMContentLoaded', e=> {
	document.querySelector('.fixed-compare').style.display = 'none';
	getBasketItems();
	document.querySelector('.del-compare').addEventListener('click', e=> {
		e.preventDefault();
		delAll();
	})

	let showProperty = document.querySelector('.compare-items__links .btn--gray');
	if(window.location.href.includes('DIFFERENT=Y')) {
		showProperty.firstChild.nodeValue = 'Показать все характеристики';
		showProperty.setAttribute('href', '?DIFFERENT=N');
	}

})

function getBasketItems() {
	fetch('/ajax/basket-items.php', {
			method: 'POST',
			body: new URLSearchParams({
				ajax_basket: 'Y',
			}),
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			}
		}
	).then(res => {
		return res.json();
	}).then(data => {
		if(data.length !== 0) {
			let items = document.querySelectorAll('.add-basket');
			items.forEach(item => {
				if(data.includes(+item.getAttribute('data-id'))) {
					changeLinkStatus(item);
				}
			})
		}
	}).catch((error) => console.log(error));
}

function delAll() {
	fetch('/ajax/compare-items.php', {
			method: 'POST',
			body: new URLSearchParams({
				ajax_del_all: "Y",
			}),
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			}
		}
	).then(res => {
		return res.json();
	}).then(data => {
		if(data['status'] === 'ok') {
			location.reload();
		}
	}).catch((error) => console.log(error));
}

function changeLinkStatus(item) {
	item.classList.add('active-basket');
	item.firstChild.nodeValue = 'В КОРЗИНЕ';
	item.style.pointerEvents = 'none';
	item.querySelector('svg').classList.add('active');
}