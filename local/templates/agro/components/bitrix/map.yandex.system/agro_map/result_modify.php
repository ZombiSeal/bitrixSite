<?php
$arSelect = array("ID", "PROPERTY_CORD");
$res = CIBlockElement::GetList(array(), array(["IBLOCK_ID" => $arParams["IBLOCK_ID"], "SECTION_ID" => $arParams["SECTION_ID"]]), false, array(), $arSelect);

while ($arElement = $res->Fetch()) {
    $arCord[] = ["ID" => $arElement['ID'], "CORD_VALUE" => $arElement["PROPERTY_CORD_VALUE"]];
}

$arResult['JS_PARAMS'] = [];
foreach ($arCord as $arItem) {
    $arCoords = explode(',', $arItem['CORD_VALUE']);
    $arResult['JS_PARAMS'][] = [
        'coordPoint' => $arCoords
    ];
};


