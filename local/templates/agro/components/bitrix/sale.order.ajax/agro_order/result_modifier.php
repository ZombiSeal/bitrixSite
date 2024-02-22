<?php



if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var array $arParams
 * @var array $arResult
 * @var SaleOrderAjax $component
 */

$arParams['SERVICES_IMAGES_SCALING'] = (string)($arParams['SERVICES_IMAGES_SCALING'] ?? 'adaptive');

$component = $this->__component;
$component::scaleImages($arResult['JS_DATA'], $arParams['SERVICES_IMAGES_SCALING']);

if (!empty($arResult["ORDER"])) {
    $order = Bitrix\Sale\Order::load($arResult['ORDER']['ID']);
    if ($order) {
        $basket = $order->getBasket();
        $iblockClass = \Bitrix\Iblock\Iblock::wakeUp(CATALOG_IBLOCK_ID)->getEntityDataClass();

        foreach ($basket as $basketItem) {
            $elementId = $basketItem->getField('PRODUCT_XML_ID');
            $res = $iblockClass::getList([
                'select' => ['POPULAR'],
                'filter' => ['ID' => $elementId]
            ])->fetchObject();

            $quantity = $res->getPopular()->getValue();
            $res->setPopular($quantity + $basketItem->getQuantity());
            $res->save();
        }


    }
}
