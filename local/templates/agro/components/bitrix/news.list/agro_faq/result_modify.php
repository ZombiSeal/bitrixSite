<?php
if (!empty($arResult['ITEMS']) && !empty($arParams['IBLOCK_ID'])){
    $sectionId = [];
    foreach ($arResult['ITEMS'] as $arItem) {
        if (!empty($arItem['IBLOCK_SECTION_ID'])) $sectionId[] = $arItem['IBLOCK_SECTION_ID'];
    }

    if (!empty($sectionId)) {
        $arFilter = ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y', 'ID' => $sectionId];
        $arSelect = ['ID', 'NAME'];
        $db_list = CIBlockSection::GetList([], $arFilter, true, $arSelect);

        while ($sect = $db_list->GetNext()) {
            if (!empty($sect['ELEMENT_CNT'])) {
                $sections[$sect['ID']] = [
                    "NAME" => $sect['NAME']
                ];
            }
        }
    }

    foreach ($arResult['ITEMS'] as $arItem) {
        if (!empty($sections[$arItem['IBLOCK_SECTION_ID']])) {
            $sections[$arItem['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
        }
    }

    $arResult['ITEMS'] = $sections;
}
