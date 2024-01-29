<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) { die();}

/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @var PersonalOrderSection $component */
/** @var array $arParams */
/** @var array $arResult */

$APPLICATION->AddChainItem(GetMessage("SPS_CHAIN_PRIVATE"));
require "template.php"; ?>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"profile",
	Array(
		"SET_TITLE" =>$arParams["SET_TITLE"],
		"AJAX_MODE" => $arParams['AJAX_MODE_PRIVATE'],
		"SEND_INFO" => $arParams["SEND_INFO_PRIVATE"],
		"CHECK_RIGHTS" => $arParams['CHECK_RIGHTS_PRIVATE'],
		"EDITABLE_EXTERNAL_AUTH_ID" => $arParams['EDITABLE_EXTERNAL_AUTH_ID'],
	),
	$component
);
