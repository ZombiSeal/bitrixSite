<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!empty($arResult['ITEMS'])) {
    foreach ($arResult['ITEMS'] as &$item) {

        if ($item['CODE'] === 'PRODUCER') {
            $sections = [];
            foreach ($item['VALUES'] as $key => $val) {
                $filter = ['ID' => $key];
                $select = ['IBLOCK_SECTION_ID'];
                $list = CIBlockElement::GetList([], $filter, false, false, $select);
                $el = $list->GetNext();
                $sectId = $el['IBLOCK_SECTION_ID'];

                if (array_key_exists($sectId, $sections)) {
                    $sections[$sectId]['BRANDS'][] = $val;
                } else {
                    $filterSect = ['ID' => $sectId, 'IBLOCK_ID' => BRANDS_IBLOCK_ID];
                    $selectSect = ['ID', 'NAME', 'CODE', 'UF_ICON'];
                    $listSect = CIBlockSection::GetList([], $filterSect, false, $selectSect);
                    $sect = $listSect->GetNext();

                    $sections[$sect['ID']] = ['NAME' => $sect['NAME'], 'CODE' => $sect['CODE'], 'IMG' => CFile::GetFileArray($sect['UF_ICON'])['SRC']];
                    $sections[$sect['ID']]['BRANDS'][] = $val;
                }

            }
            $item['VALUES'] = $sections;
            $arResult['NEW_ITEMS']['FIRST_BLOCK'][] = $item;
        } else {
            $arResult['NEW_ITEMS']['SECOND_BLOCK'][] = $item;
        }
    }
}



