<?php
$arFilter = ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y'];
$arSelect = ['ID', 'NAME'];
$db_list = CIBlockSection::GetList([], $arFilter, true, $arSelect);

while ($ar_result = $db_list->GetNext()) {
    if (!empty($ar_result['ELEMENT_CNT'])) {
        $sections[] = ['SECTION_ID' => $ar_result['ID'],
            'SECTION_NAME' => $ar_result['NAME']];
    }
}

$arSelectEl = ['ID', 'NAME', 'DETAIL_TEXT'];
$arFilterEl = ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y', 'SECTION_ID' => ""];

foreach ($arResult['ITEMS'] as $arItem)
{
    $arLinks[$arItem['ID']] = ['EDIT' => $arItem['EDIT_LINK'], 'DEL' => $arItem['DELETE_LINK']];
}

foreach ($sections as $key => $val) {
    $arFilterEl['SECTION_ID'] = $val['SECTION_ID'];
    $res = CIBlockElement::GetList([], $arFilterEl, false, [], $arSelectEl);
    $arElements[$key] = $val;

    while ($el = $res->GetNext()) {
        $arElements[$key]['ELEMENTS'][] = ['ID' => $el['ID'], 'NAME' => $el['NAME'], 'DETAIL_TEXT' => $el['DETAIL_TEXT'],
                                            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                                            'EDIT_LINK' => $arLinks[$el['ID']]['EDIT'],
                                            'DELETE_LINK' => $arLinks[$el['ID']]['DEL']
        ];

    }
}

$arResult['ITEMS'] = $arElements;
