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

    [
        "PARENT" => "SEF_MODE",
        "NAME" => "Программы лояльности",
        "TYPE" => "STRING"
    ]
];
