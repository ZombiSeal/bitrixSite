<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */

$usePriceInAdditionalColumn = in_array('PRICE', $arParams['COLUMNS_LIST']) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';
$useSumColumn = in_array('SUM', $arParams['COLUMNS_LIST']);
$useActionColumn = in_array('DELETE', $arParams['COLUMNS_LIST']);

$restoreColSpan = 2 + $usePriceInAdditionalColumn + $useSumColumn + $useActionColumn;

$positionClassMap = array(
	'left' => 'basket-item-label-left',
	'center' => 'basket-item-label-center',
	'right' => 'basket-item-label-right',
	'bottom' => 'basket-item-label-bottom',
	'middle' => 'basket-item-label-middle',
	'top' => 'basket-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

?>
<script id="basket-item-template" type="text/html">
    <div id="basket-item-{{ID}}" class="basket-item basket-item-page" data-entity="basket-item" data-id="{{ID}}">
        <div class="basket-item__img">
            <div class="bg" style="background-image: url('{{IMAGE_URL}}')"></div>
        </div>
        <div class="basket-item__name"><span>{{NAME}}</span></div>
        <div class="basket-item__discount"><span class="for--mob">Скидка</span><span
                    class="red">{{DISCOUNT_PRICE_PERCENT_FORMATED}}</span>
        </div>
        <div class="basket-item__price">
            <span class="for--mob">Цена</span>
            <span class="new">{{PRICE_FORMATED}}</span>

            {{#SHOW_DISCOUNT_PRICE}}
            <span class="old">{{FULL_PRICE_FORMATED}}</span>
            {{/SHOW_DISCOUNT_PRICE}}
        </div>

        <div class="basket-item__weight"><span class="for--mob">Вес</span><span>{{WEIGHT_FORMATED}}</span></div>

        <div class="basket-item__count"><span class="for--mob">Количество</span>
            <div class="click-counter" data-entity="basket-item-quantity-block">
                <button class="plus basket-item-amount-btn-plus" data-entity="basket-item-quantity-plus">+</button>
                <input class="num--inset basket-item-amount-filed"
                       type="text"
                       value="{{QUANTITY}}"
                       data-entity="basket-item-quantity-field"
                       data-value="{{QUANTITY}}"
                       id="basket-item-quantity-{{ID}}"
                >
                <button class="minus" data-entity="basket-item-quantity-minus">-</button>
            </div>
        </div>
        <div class="basket-item__total">
            <span class="for--mob">Сумма</span>
            <span class="new">{{SUM_PRICE_FORMATED}}</span>

            {{#SHOW_DISCOUNT_PRICE}}
            <span class="old">{{SUM_FULL_PRICE_FORMATED}}</span>
            {{/SHOW_DISCOUNT_PRICE}}

        </div>
        <div class="basket-item__delet">
            <button class="delete" data-entity="basket-item-delete">
                <svg class="sprite-svg">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#delete"></use>
                </svg>
            </button>
        </div>
    </div>
</script>