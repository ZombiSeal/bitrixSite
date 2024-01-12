<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
$propertyEnums = CIBlockPropertyEnum::GetList(
    ["SORT" => "ASC"],
    ["IBLOCK_ID" => $arParams['IBLOCK_ID'], "CODE" => "TYPE"]
);

$typesAll['all'] = ['VALUE' => 'Все материалы',"CODE" => 'all', 'LINK' => '?type=all'];
while ($enumFields = $propertyEnums->GetNext()) {
    $arSelectElem = ['ID'];
    $arFilterElem = ["IBLOCK_ID" => $arParams['IBLOCK_ID'],'PROPERTY_TYPE' => $enumFields['ID'], 'ACTIVE' => 'Y'];
    $res = CIBlockElement::GetList([], $arFilterElem, false, ["nTopCount"=>1], $arSelectElem);
    if(!empty($res->GetNext())) $types[$enumFields['XML_ID']] = ['ID' => $enumFields['ID'], 'VALUE' => $enumFields['VALUE'], 'CODE' => $enumFields['XML_ID'], 'LINK' => '?type=' . $enumFields['XML_ID']];
}
if(!empty($types)) $types = array_merge($typesAll, $types);
$arResult['TABS'] = $types;