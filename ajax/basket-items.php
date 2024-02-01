<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Sale\Basket;
Bitrix\Main\Loader::includeModule("sale");

if($_POST['ajax_basket'] == 'Y') {
    ob_end_clean();
    $basket = \Bitrix\Sale\Basket::loadItemsForFUser(\Bitrix\Sale\Fuser::getId(), \Bitrix\Main\Context::getCurrent()->getSite());
    foreach ($basket as $basketItem) {
        $basketIds[] = $basketItem->getProductId();
    }
    echo json_encode($basketIds ?? []);
    die();
}

?>
