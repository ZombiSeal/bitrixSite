<?php
$dbRes = \Bitrix\Sale\Order::getList([
    'count_total' => 1,
    'filter' => [
        "USER_ID" => \Bitrix\Main\Engine\CurrentUser::get()->getId(),
        "STATUS_ID" => "F",
    ],
    'order' => ['ID' => 'DESC']
]);
$countPrev = $dbRes->getCount();
$arResult['COUNT_PREV'] = $countPrev;

$dbRes = \Bitrix\Sale\Order::getList([
    'count_total' => 1,
    'filter' => [
        "USER_ID" => \Bitrix\Main\Engine\CurrentUser::get()->getId(),
        "!=STATUS_ID" => "F",
    ],
    'order' => ['ID' => 'DESC']
]);
$countNow = $dbRes->getCount();
$arResult['COUNT_NOW'] = $countNow;