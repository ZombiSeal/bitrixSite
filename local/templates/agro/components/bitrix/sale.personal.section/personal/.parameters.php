<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

/** @var array $arCurrentValues */
$arTemplateParameters = [
    "SHOW_LOYALTY_PAGE" => [
        "PARENT" => "BASE",
        "NAME" => "Показывать страницу программы лояльности",
        "TYPE" => "CHECKBOX"
    ],

];

$arTemplateParameters['SEF_MODE'] = [
    'loyalty' => [
        "NAME" => "Программы лояльности",
        "DEFAULT" => "loyalty/"
    ],
    "orders" => [
        "NAME" => "Заказы",
        "DEFAULT" =>  "orders/"
    ],
    "private" => [
        "NAME" => "Личные данные",
        "DEFAULT" =>  "private/"
    ],
    "order_detail" => [
        "NAME" => "Заказ детально",
        "DEFAULT" =>  "orders/#ID#"
    ]

];
