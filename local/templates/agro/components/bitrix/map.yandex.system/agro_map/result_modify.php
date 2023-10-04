<?php
$arSelect = array("ID", "PROPERTY_CORD");
$res = CIBlockElement::GetList(array(), array(["IBLOCK_ID" => 9, "SECTION_ID" => 20]), false, array(), $arSelect);

while ($arElement = $res->Fetch()) {
    $arCord[] = ["ID" => $arElement['ID'],"CORD_VALUE" => $arElement["PROPERTY_CORD_VALUE"]];
}

$arResult['JS_PARAMS'] = [];
foreach ($arCord as $arItem)
{
    $arCoords = explode(',', $arItem['CORD_VALUE']);
    $arResult['JS_PARAMS'][] = [
        'coordPoint' => $arCoords
    ];
};
