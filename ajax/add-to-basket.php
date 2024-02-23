<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Sale\Basket;
Bitrix\Main\Loader::includeModule("sale");

if($_POST['ajax_basket'] == 'Y') {
    ob_end_clean();
    $res = Add2BasketByProductID($_POST['id'], $_POST['quantity']);
    echo  json_encode(($res) ? ['status' => 'OK'] : ['status' => 'ERROR']);
    die();
}