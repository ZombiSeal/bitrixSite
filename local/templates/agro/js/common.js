var comparePage;

$(window).ready(function () {
	var width, height;
	width = $(window).width();
	height = $(window).height();

	console.log('Width: ' + width + 'px');
	console.log('Height: ' + height + 'px');

	//Инит лази
	var lazyLoadInstance = new LazyLoad({
		elements_selector: ".lazy"
	});

	// Инит анимации
	new WOW().init();

	// Свг спрайты для ИЕ
	svg4everybody();

	//Инит стайлеров
	if ($('.styler').length) {
		$('.styler').styler();
	}


	$('body').on('click', '.list-shop__name', function () {
		$('.list-shop__ul').toggleClass('open');
	});

	$(document).mouseup(function (e) { // событие клика по веб-документу
		var div = $(".list-shop"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
			&& div.has(e.target).length === 0) { // и не по его дочерним элементам
			div.find('.list-shop__ul').removeClass('open');
		}
	});


	if (width <= 990) {
		$('#nav-icon3').click(function () {
			$(this).toggleClass('open');
			$('.header-top__ul').toggleClass('open');
		});

		$('.header-bottom__phone-link').click(function () {
			$('.header-bottom__phone-hover').toggleClass('open');
			return false;
		});

		$('.header-catalog-popup__li').each(function () {
			let hasChild = $(this).find('.drop').length;
			if (hasChild == 1) {
				$(this).addClass('hasChild');
			}
		});

		// $('.header-catalog-popup__li > a').click(function () {
		// 	$(this).closest('li').toggleClass('open');
		// 	$(this).siblings('.drop').slideToggle(300);
		// })
		$('.header-catalog-popup__li.hasChild').click(function () {
			$(this).toggleClass('open');
			$(this).find('.drop').slideToggle(300);
		})

		$('.catalog-filter__maker-block ul').mCustomScrollbar({
			axis: 'x'
		})

		$('.filter__variant__block-name').click(function () {
			$(this).toggleClass('open');
			$(this).siblings('ul').toggleClass('open');
		});

		$(document).mouseup(function (e) { // событие клика по веб-документу
			var div = $(".filter__variant__block"); // тут указываем ID элемента
			if (!div.is(e.target) // если клик был не по нашему блоку
				&& div.has(e.target).length === 0) { // и не по его дочерним элементам
				div.find('.filter__variant__block-name').removeClass('open');
				div.find('ul').removeClass('open');
			}
		});




		$('.card-tabs__list ul').slick({
			slidesToShow: 2,
			responsive: [
				{
					breakpoint: 601,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});

		$('.card-tabs__list ul').on('afterChange', function (event, slick, currentSlide, nextSlide) {

			$('.card-tabs__list li.slick-current.slick-active').trigger('click');
		});

		if ($('.checkout_price').length) {
			$('.checkout_price').addClass('fix');
		}

	}

	if (width <= 600) {
		$('.advantage-catalog').slick({
			adaptiveHeight: true,
			dots: false
		})
		$('.card-tabs__block-text_description').mCustomScrollbar({
			axis: "x"
		})

		$('.catalog-tabs').slick({
			dots: false,
			infinite: false,
			arrows: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			swipe: true
		});

		$('.catalog-tabs').on('afterChange', function (event, slick, currentSlide, nextSlide) {
			$('.slick-current.slick-active').siblings().find('.catalog-tabs__li').removeClass('active');
			$('.slick-current.slick-active').find('.catalog-tabs__li').trigger('click');
		});
	}


	let card_vertical_lenght = $('.slide-vertical').length;
	if (card_vertical_lenght > 2) {
		$('.card-tabs__block-text-slider').slick({
			vertical: true,
			slidesToScroll: 1,
			slidesToShow: 2,
			arrows: false
		})
	}
	if (card_vertical_lenght == 2) {
		$('.card-tabs__block-text-slider__container').addClass('no-arrows');
	}
	if (card_vertical_lenght == 1) {
		$('.card-tabs__block-text-slider__container').addClass('child-1');
	}


	$('.btn-mob-slider').click(function () {
		$(this).toggleClass('open').siblings('.card-tabs__block-text-slider__container').toggleClass('open');
		if (card_vertical_lenght > 2) {
			$('.card-tabs__block-text-slider').slick('refresh');
		}
	});




	$('body').on('click', '.card-tabs__block-text-slider-arrow .slick-next', function () {
		$(this).addClass('clicked');
		$('.card-tabs__block-text-slider').slick('slickNext');
	});
	$('body').on('click', '.card-tabs__block-text-slider-arrow .slick-prev', function () {
		$(this).addClass('clicked');
		$('.card-tabs__block-text-slider').slick('slickPrev');
	});



	//Табы на главной
	// $('body').on('click', '.catalog-tabs__li', function () {
	// 	if ($(this).hasClass('active')) {
	// 		return false;
	// 	} else {
	// 		let dataTab = $(this).attr('data-tab');
	// 		$(this).siblings().removeClass('active');
	// 		$(this).addClass('active');
	//
	// 		$('.catalog-container').each(function () {
	// 			$(this).removeClass('active');
	//
	// 			if ($(this).attr('data-tab') == dataTab) {
	// 				$(this).addClass('active');
	// 			}
	// 		});
	// 	}
	// });
	//
	// $('body').on('click', '.btn-for--catalog', function () {
	// 	$('body').toggleClass('menu--open');
	// 	$(this).closest('.header-bottom__catalog').toggleClass('open');
	// 	$(this).siblings('.header-catalog-popup').toggleClass('open');
	// 	return false;
	// });

	$('body').on('click', '.tabs__li', function () {
		if ($(this).hasClass('active')) {
			return false;
		} else {
			let dataTab = $(this).attr('data-tab');
			$(this).siblings().removeClass('active');
			$(this).addClass('active');

			$('.tabs-content').each(function () {
				$(this).removeClass('active');

				if ($(this).attr('data-tab') == dataTab) {
					$(this).addClass('active');
				}
			});
		}
	});

	$('body').on('click', '.btn-for--catalog', function () {
		$('body').toggleClass('menu--open');
		$(this).closest('.header-bottom__catalog').toggleClass('open');
		$(this).siblings('.header-catalog-popup').toggleClass('open');
		return false;
	});

	$(document).mouseup(function (e) { // событие клика по веб-документу
		var div = $(".header-bottom__catalog"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
			&& div.has(e.target).length === 0) { // и не по его дочерним элементам
			$('body').removeClass('menu--open')
			$('.header-bottom__catalog').removeClass('open');
			$('.header-catalog-popup').removeClass('open');
		}
	});

	$('body').on('click', '.search-block input[type="submit"] ', function () {
		let searchBlock = $(this).closest('.search-block');
		searchBlock.addClass('open');

		if (width <= 900) {
			$(".search-block.open input[type='text']").css('width', width - 40 + 'px');
		}
		return false;
	});
	$('body').on('click', '.search-block.open .close ', function () {
		if (width <= 900) {
			$(".search-block.open input[type='text']").css('width', 0 + 'px');
		}

		$(this).closest('.search-block ').removeClass('open');
		return false;
	});
	$(".search-block input[type='text']").keypress(function (event) {
		var keycode = event.keyCode || event.which;
		if (keycode == '13') {
			$(this).closest('form').submit();
		}
	});
	$(document).mouseup(function (e) { // событие клика по веб-документу
		var div = $(".search-block"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
			&& div.has(e.target).length === 0) { // и не по его дочерним элементам
			div.removeClass('open');
		}
	});

	$('body').on('click', '.catalog-filter__top-btn', function () {
		let data_filter = $(this).attr('data-filter');

		$('html').animate({
			'scrollTop': $(this).offset().top - 20
		}, 500);

		if (!$(this).hasClass('open')) {
			$(this).addClass('open');
			$(this).siblings('.catalog-filter__top-btn').removeClass('open');

			if ($('.catalog-filter__bottom-param.open').length) {
				$('.catalog-filter__bottom-param.open').each(function () {
					$(this).removeClass('open');
					$(this).slideUp(300)
				});
				setTimeout(function () {
					$('.catalog-filter__bottom-param').each(function () {
						if ($(this).attr('data-filter') == data_filter) {
							$(this).slideDown(300).addClass('open');
						}
					})
				}, 300)
			}
			else {
				$('.catalog-filter__bottom-param').each(function () {
					if ($(this).attr('data-filter') == data_filter) {
						$(this).slideDown(300).addClass('open');
					}
				});
			}
		}

		else if ($(this).hasClass('open')) {
			$(this).removeClass('open');
			$('.catalog-filter__bottom-param').each(function () {
				if ($(this).attr('data-filter') == data_filter) {
					$(this).slideUp(400).removeClass('open');
				}
			})
		}

	});

	let filter_makerLenght = $('.catalog-filter__maker-block ul li').length;
	if (filter_makerLenght <= 18) {
		$('.catalog-filter__maker-block ul').css('width', 75 + '%')
	}
	else if (filter_makerLenght > 20) {
		$('.catalog-filter__maker-block ul').css('width', 100 + '%').addClass('maxWidth')
	}

	$('.card-tabs__list').attr('data-child', $('.card-tabs__list ul li').length);


	// $('body').on('hover', '', function () {
	// 	$(this).css('z-index', '999');
	// }, function () {
	// 	$(this).css('z-index', '0');
	// });
	// $('.filter__variant__block').css('z-index', '5000')

	// alert('fds');

	$('.filter__variant__block').mouseenter(function () {
		$(this).css('z-index', '999')
	}
	).mouseleave(function () {
		$(this).css('z-index', '0')
	}
	);


	$('body').on('click', '.card-tabs__list li', function () {
		let dataTab = $(this).attr('data-tabs');
		let dataW = $(this).attr('data-w');
		$(this).addClass('active').siblings().removeClass('active')

		$('.card-tabs__list .border').attr('class', 'border').addClass(dataW);

		$('.card-tabs__block').each(function () {
			$(this).removeClass('active');
			if ($(this).attr('data-tabs') == dataTab) {
				$(this).addClass('active')
			}
		});

	});

	$('.card-tabs__slider-main').slick({
		arrows: false,
		fade: true,
		asNavFor: '.card-tabs__slider-nav'
	});
	$('.card-tabs__slider-nav').slick({
		slidesToShow: 3,
		arrows: true,
		focusOnSelect: true,
		vertical: true,
		asNavFor: '.card-tabs__slider-main',
		responsive: [
			{
				breakpoint: 601,
				settings: {
					slidesToShow: 3,
					vertical: false,
				}
			}
		]
	});




	// Функции фокуса на инпуты
	$('.input-text-label input').each(function () {
		console.log($(this).val().length)
		if ($(this).val().length > 0) {
			$(this).closest('div').addClass('focus');
		}
	})
	$('body').on('focus', '.input-text-label input', function () {
		$(this).closest('.input-text-label').addClass('focus');
	});
	$('body').on('blur', '.input-text-label input', function () {
		if ($(this).val() == '') {
			$(this).closest('.input-text-label').removeClass('focus');
		}
	});
	/*$('.input-text-label input').focus(function () {
		$(this).closest('.input-text-label').addClass('focus');
	});
	$('.input-text-label input').blur(function () {
		if ($(this).val() == '') {
			$(this).closest('.input-text-label').removeClass('focus');
		}
	});*/





	$('.location-block__ul li.ico-placeholder').hover(function () {
		$(this).addClass('hover');
		$(this).siblings().addClass('noHover')
	}, function () {
		$(this).removeClass('hover');
		$(this).siblings().removeClass('noHover')
	});

	//Паралакс

	if ($('.plants').length) {
		var scene = $('.plants').get(0);
		var parallaxInstance = new Parallax(scene, {
			calibrate: false
		});
	}
	if ($('.ground').length) {
		var scene = $('.ground').get(0);
		var parallaxInstance = new Parallax(scene, {
			calibrate: false
		});
	}


	//Стрелка вверх для скролла вверз
	$('.scrollup').click(function () {
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});

	$('body').on("click", '.ajax-form', function (e) {
		e.preventDefault();
		let file_link = $(this).attr('href');
		$.magnificPopup.open({
			items: {
				src: file_link,
			},
			type: 'ajax',
			mainClass: 'popup-form--main',
			callbacks: {
				ajaxContentAdded: function () {
					$('.input-text-label input').focus(function () {
						$(this).closest('.input-text-label').addClass('focus');
					});

					$('.input-text-label input').blur(function () {
						if ($(this).val() == '') {
							$(this).closest('.input-text-label').removeClass('focus');
						}
					});
					tabs();
					if ($('.styler').length) {
						$('.styler').styler();
					}

					keyup_form();
					click_submit();

				}
			}

		});
	});

	$('.checkout__info-step__delPay .block').click(function () {
		let checkStatus = $(this).find('input[type="checkbox"]').prop('checked');

		if (checkStatus == 1) {
			$(this).addClass('active');
			$(this).siblings().removeClass('active').find('input[type="checkbox"]').prop('checked', false);


			if ($(this).attr('data-pay')) {
				let dataPay = $(this).attr('data-pay');

				$(this).closest('.checkout__info-step').addClass('open-bot-block').find('.checkout__info-step__delPay-bot').each(function () {
					$(this).removeClass('open');
					let dataPay2 = $(this).attr('data-pay');
					if (dataPay == dataPay2) {
						$(this).addClass('open');
					}
				});

			}
			if (!$(this).attr('data-pay') && $(this).siblings().attr('data-pay')) {

				$(this).closest('.checkout__info-step').removeClass('open-bot-block').find('.checkout__info-step__delPay-bot').each(function () {
					$(this).removeClass('open');
				});
			}

		}
		else {
			$(this).removeClass('active');
			let dataPay = $(this).attr('data-pay');
			$(this).closest('.checkout__info-step').find('.checkout__info-step__delPay-bot').each(function () {

				let dataPay2 = $(this).attr('data-pay');
				if (dataPay == dataPay2) {
					$(this).closest('.checkout__info-step').removeClass('open-bot-block');
					$(this).removeClass('open');

				}
			});
			if (!$(this).attr('data-pay') && $(this).siblings().attr('data-pay')) {
				console.log('4')

				$(this).closest('.checkout__info-step').removeClass('open-bot-block').find('.checkout__info-step__delPay-bot').each(function () {
					$(this).removeClass('open');
				});
			}
		}


	});

	$('.checkout__info-step__delPay-bot .block').click(function () {
		let checkStatus = $(this).find('input[type="checkbox"]').prop('checked');

		if (checkStatus == 1) {
			$(this).addClass('active');
			$(this).siblings().removeClass('active').find('input[type="checkbox"]').prop('checked', false);

		}
		else {
			$(this).removeClass('active');
		}


	});




	//Магнифик попап
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
	$('.card-tabs__slider-main').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			tCounter: '%curr% из %total%',
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		}
	});
	$('.zoom-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function (item) {
				// return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true,
			arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
			tCounter: '<span class="mfp-counter">%curr% из %total%</span>' // markup of counter
		},

		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function (element) {
				return element.find('img');
			}
		}

	});
	$('.zoom-gallery2').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function (item) {
				// return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true,
			arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
			tCounter: '<span class="mfp-counter">%curr% из %total%</span>' // markup of counter
		},

		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function (element) {
				return element.find('img');
			}
		}

	});



	var tabs = function () {
		//Скрипт табов
		$('.tabs-nav').on('click', 'li:not(.active)', function () {
			if ($(this).closest('.tabs-nav').hasClass('no-change')) {
				$(this)
					.addClass('active').siblings().removeClass('active');
			} else {
				$(this)
					.addClass('active').siblings().removeClass('active')
					.closest('.tabs').find('div.tabs-content').removeClass('active').eq($(this).index()).addClass('active');
			}

		});
	}




	$('.selection-block__items').slick({
		arrows: false,
		fade: true,
		swipe: false,
		infinite: false
	});
	let itemsLenght = $('.selection-block__item').length;
	$('.selection-block__items').on('afterChange', function (event, slick, currentSlide, nextSlide) {
		let curSlide = currentSlide + 1;

		if (itemsLenght == curSlide) {
			$('.selection-block__btn .after').addClass('last-slide')
		}
		else {
			$('.selection-block__btn .after').removeClass('last-slide')
		}

	});
	$('.selection-block__btn .after').click(function () {
		$('.selection-block__items').slick('slickNext');
	});
	$('.selection-block__btn .before').click(function () {
		$('.selection-block__items').slick('slickPrev');
	});



	$(".dataPicker").each(function () {
		let img = $(this).attr('data-src');
		let template = $(this).attr('data-template');
		$(this).datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: '01.01.1930',
			showOn: "button",
			dateFormat: template,
			buttonImage: img,
			buttonImageOnly: true,
			buttonText: "Select date",
			dayNames: ['Воскресения', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
			dayNamesShort: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
			monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
			dayNamesMin: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
			monthNamesShort: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сент', 'Октяб', 'Нояб', 'Дек'],
		}).click(function () { $(this).datepicker('show'); });
	})

	$('.dataPicker').change(function () {
		if ($(this).val() != '') {
			$(this).closest('.input-text-label').addClass('focus');
		}
	})

	$('.certificate-gallery__container').slick({
		slidesToShow: 5,
		centerMode: true,
		variableWidth: true,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 601,
				settings: {
					slidesToShow: 1,
					// adaptiveHeight: true,
					variableWidth: false,
				}
			}
		]

	});
	$('.extra-block__container').slick({
		dots: false,
		infinite: true,
		arrows: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		swipe: true,
		autoplay: true,
		autoplaySpeed: 4000,
		speed: 700,
		responsive: [
			{
				breakpoint: 801,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 601,
				settings: {
					slidesToShow: 1,
				}
			}
		]

	});



	$('.text-accordion__list li').click(function () {
		$(this).toggleClass('open');
		$(this).find('.text').slideToggle(300)
	});

	$('.grafic-list__top ul li').click(function () {
		$(this).toggleClass('inverse')
	});
	$('body').on('click', '.contact .arrow', function () {
		if ($(this).closest('li').hasClass('open')) {
			$(this).closest('li').removeClass('open').find('.drop').slideUp(300);
		}
		else {
			$(this).closest('li').siblings().removeClass('open').find('.drop').slideUp(300);
			$(this).closest('li').addClass('open').find('.drop').slideDown(300);
		}
	});
	compare(width);
	compareLiHeight()
	$('.compare-item .delete').click(function () {
		$(this).closest('.compare-item ').remove()
		compare(width);

		compareLiHeight()
	});

	$('.main-top__slider').slick({
		dots: true,
		infinite: true,
		speed: 1000,
		// autoplay: true,
		autoplaySpeed: 5000,
		centerMode: true,
		prevArrow: '<button type="button" class="slick-next slick-arrow"></button>',
		nextArrow: '<button type="button" class="slick-prev slick-arrow"></button>',
	})

	click_submit();
	keyup_form();
	num__inset();
	textSimle(width)

});

$(window).scroll(function () {
	var scrollPointer = $(this).scrollTop();
	var width, height;
	width = $(window).width();
	height = $(window).height();


	if (comparePage) {
		if (width > 990) {

			const w = $('.compare-items__container').position().top
			if (scrollPointer > w + 285) {
				$('#mCSB_1_scrollbar_horizontal').addClass('nofixed')
			}
			else {
				$('#mCSB_1_scrollbar_horizontal').removeClass('nofixed')
			}
		}
		else {

			const scrollFooter = $('.footer').position().top;
			scrollPointer += 717;
			if (scrollPointer > scrollFooter) {
				$('#mCSB_1_scrollbar_horizontal').addClass('nofixed')
			}
			else {
				$('#mCSB_1_scrollbar_horizontal').removeClass('nofixed')
			}
		}

	}

	//Показываем стрелкку вверх
	if (scrollPointer > 160) {
		$('.scrollup').css('display', 'flex')

	} else {
		$('.scrollup').css('display', 'none')

	}
	if ($('.checkout_price').length) {

		let checkoutFIX = $('.checkout_price').position().top - $('.checkout_price').outerHeight(true) + 10;

		if (scrollPointer > checkoutFIX) {
			$('.checkout_price').removeClass('fix');
		}
		else {
			$('.checkout_price').addClass('fix');
		}
	}

	$('.click-counter .plus').click(function () {
		let num = $(this).siblings('input').val();
		console.log(num)
	});

	$('.click-counter .minus').click(function () {
		let num = $(this).siblings('input').val();
		console.log(num)

	});



});


$(window).resize(function () {
	var width, height;
	width = $(window).width();
	height = $(window).height();

	textSimle(width)

	if (comparePage) {
		if (width > 1200) {
			compareScrollPosition(42, 2)
		}
		if (width > 990 && width <= 1200) {
			compareScrollPosition(30, 2)
		}
		if (width <= 990) {
			compareScrollPosition(42, 2)
		}
	}
});


// Текстовый блок на всю ширину экрана/ независомо от контейнера
function textSimle(width) {
	// if(width > 990){
	let marginLeft = (width - ($('.container').width() - 40)) / 2;
	$('.text-simple').each(function () {
		$(this).css('width', width + 'px').css('margin-left', '-' + marginLeft + 'px');
	})
	// }


}

// Функции для страницы сравнения
function compareScrollPosition(offsetRight, offsetWidth) {
	let right = ($(window).width() - $('.container').width() + offsetRight) / 2;
	$('#mCSB_1_scrollbar_horizontal').css('width', $('.compare-items__container').width() - offsetWidth + 'px');
	$('#mCSB_1_scrollbar_horizontal').css('right', right + 'px')
}
function compare(width) {

	let compare_item = $('.compare-item').length;
	let itWidth = $('.compare-item').width();

	$('.compare-items__container').removeClass('child-3').removeClass('scroll');

	$('.mCSB_container').css('width', itWidth * compare_item - 10 + 'px');

	if (compare_item == 3 && width > 1200) {
		$(".compare-items__container").mCustomScrollbar('destroy');
		$(".compare-items__container .scroll--active").css('min-width', '100%');

		$('.compare-items__container').addClass('child-3');

		if (width <= 1200 && width > 990) {
			comparePage = true;
			let itWidth = 300;

			$('.compare-items__container').addClass('scroll')

			compareScrollPosition(42, 2)

		}
	}

	if (compare_item > 3 && width > 1200) {
		comparePage = true;

		let itWidth = $('.compare-item').width();

		if (width > 1460) {
			itWidth = 357;
		}
		if (width > 1200 && width <= 1460) {
			itWidth = 273;
		}

		$('.compare-items__container').addClass('scroll')
		$('.scroll--active').css('width', itWidth * compare_item + 'px')

		compareScroll(2);

		compareScrollPosition(42, 2)

	}

	if (width <= 1200) {
		comparePage = true;

		let itWidth = $('.compare-item').width() + 2;

		if (compare_item > 2) {
			// $('.compare-items__container').addClass('scroll')
		}

		$('.scroll--active').css('min-width', itWidth * compare_item + 'px');

		console.log(itWidth)
		console.log(compare_item)

		compareScroll(0)

		if (width > 990) {
			compareScrollPosition(30, 2)
		}
		else {
			compareScrollPosition(42, 2)
		}
	}

	$(window).on('load', function () {
		compareLiHeight()
	});

	$(".compare-items__container").mCustomScrollbar('update')

}
function compareScroll(padding) {
	$(".compare-items__container").mCustomScrollbar({
		axis: "x",
		theme: "inset-2-dark",
		mouseWheel: false,
		scrollInertia: 100,
		advanced: {
			updateOnContentResize: true
		},
		callbacks: {
			whileScrolling: function () {
				if (this.mcs.leftPct == 0 || this.mcs.leftPct == 100) {
					$('.compare-item__info ul .superior').css('z-index', '30');
				}
				else if (this.mcs.leftPct > 98) {
					$('.compare-items__container .scroll--active').css('padding-left', padding + 'px')
				}

				else {
					$('.compare-item__info ul .superior').css('z-index', '10');
					$('.compare-items__container .scroll--active').css('padding-left', '0px')

				}
			}
		}
	});
}
function compareLiHeight() {
	let dataIndex = 1;
	let compareHeight = 0;

	$('.compare-info ul li').each(function () {

		$('.compare li[data-index="' + dataIndex + '"]').each(function () {
			if (compareHeight < $(this).outerHeight()) {
				compareHeight = $(this).outerHeight();
			}
		});
		$('.compare li[data-index="' + dataIndex + '"]').each(function () {
			$(this).css('height', compareHeight + 'px')
		});

		dataIndex++;
		compareHeight = 0;
	});
}

//Валидация
function popupForm__error(count) {
	if (count >= 1) {
		$('.popup-form__error').addClass('error');
		return false;
	}
	else {
		$('.popup-form__error').removeClass('error');
	}
}
function required_email() {
	$('.required--email').keyup(function () {
		let email = $(this).val();

		if (email.length > 0 && (email.match(/.+?\@.+[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}/g) || []).length !== 1) {
			$(this).addClass('error-online').closest('.input-text-label').addClass('error-online');
		}
		else if (email == '') {
			$(this).removeClass('error-online').closest('.input-text-label').removeClass('error-online');
			$(this).removeClass('error').closest('.input-text-label').removeClass('error');
		}
		else {
			$(this).removeClass('error-online').closest('.input-text-label').removeClass('error-online');
			$(this).removeClass('error').closest('.input-text-label').removeClass('error');
		}
	});
}
function required_input() {

	$('.required--input').keyup(function () {
		if ($(this).hasClass('required--email')) {
			return false;
		}
		else {
			let input = $(this).val();
			if ($(this).attr('data-length')) {
				var inputLenght = $(this).attr('data-length') - 1;
			}
			else {
				var inputLenght = 2;
			}

			if (input.length > inputLenght) {
				$(this).removeClass('error-online').closest('.input-text-label').removeClass('error-online');
				$(this).removeClass('error').closest('.input-text-label').removeClass('error');
				$(this).prev('label').css('color','black');
			} else {
				$(this).addClass('error-online').closest('.input-text-label').addClass('error-online');
			}
		}

	});
}
function num__inset() {
	$('.num--inset').bind("change keyup input click", function () {
		if (this.value.match(/[^0-9^+]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
	});
}
function required_password() {

	$('.required--password').keyup(function () {

		if ($(this).attr('data-password') === 'main') {
			if ($(this).val().length == '' || $(this).val().length < 6) {
				$(this).closest('.input-text-label').addClass('error-online');
				$(this).attr('password', 'false')
			}
			else {
				$(this).closest('.input-text-label').removeClass('error-online').removeClass('error')
				$(this).attr('password', 'true')
			}
		}


		if ($(this).attr('data-password') === 'repeat') {
			let mainPass = $(this).closest('form').find('.required--password[data-password="main"]');


			if (mainPass.attr('password') == 'false' || mainPass.closest('.input-text-label').hasClass('error') || mainPass.val() != $(this).val()) {
				$(this).closest('.input-text-label').addClass('error-online')
			}

			if (mainPass.val() == $(this).val() && mainPass.attr('password') == 'true') {
				$(this).closest('.input-text-label').removeClass('error-online')
			}

		}


	});
}
function click_submit() {


	$('body').on('click', '.required--sbmt', function () {
		let $this = $(this);
		let count = 0;

		//Проверка пароля

		if ($this.closest('form').find('.required--password').length) {
			var mainPass, repeatPass, passwordReq;
			passwordReq = $this.closest('form').find('.required--password');
			passwordReq.each(function () {
				if ($(this).attr('data-password') === 'main') {
					mainPass = $(this);
				}

				if ($(this).attr('data-password') === 'repeat') {
					repeatPass = $(this);
				}
			});

			if (mainPass.val().length == '' || mainPass.val().length < 6) {
				mainPass.closest('.input-text-label').addClass('error').addClass('error-online')
				count++;
			}
			else {
				mainPass.closest('.input-text-label').removeClass('error').removeClass('error-online')
			}

			if (repeatPass.val() != mainPass.val()) {
				repeatPass.closest('.input-text-label').addClass('error').addClass('error-online')
				count++;
			}
			else {
				repeatPass.closest('.input-text-label').removeClass('error').removeClass('error-online')
			}
		}


		//Проверка инпутов на пустоту
		let inputRequired = $this.closest('form').find('.required--input');
		if (inputRequired.length) {
			inputRequired.each(function () {
				let inputValue = $(this).val();
				let $this = $(this);

				if (inputValue == '' || $this.hasClass('error-online')) {
					$this.addClass('error');
					$this.closest('.input-text-label').addClass('error');
					count++;
				} else if (!inputValue == '' && $this.hasClass('error') && !$this.hasClass('error-online')) {
					$this.closest('.input-text-label').removeClass('error');
				}
			});
		}



		//Проверка чекбоксов
		let checkRequired = $this.closest('form').find('input.required--check');
		if (checkRequired.length) {
			checkRequired.each(function () {
				let check = $(this).prop('checked');
				let $this = $(this);


				if (check == 0) {
					$this.addClass('error');
					$this.trigger('refresh');
					count++;
				}
				else if (!check == 0 && $this.hasClass('error')) {
					$this.removeClass('error');
					$this.trigger('refresh');
				}
			});
		}

		//Вывод ошибки вверху
		popupForm__error(count);

		//	Отпралять или нет
		if (count >= 1) {
			return false;
		}
		else {
			// $this.closest('form').submit();
		}

	});
}
function keyup_form() {
	required_email();
	required_input();
	num__inset();
	required_password();
}