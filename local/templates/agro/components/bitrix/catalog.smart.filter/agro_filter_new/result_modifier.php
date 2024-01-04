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


if (!empty($arResult['ITEMS'])) {
    foreach ($arResult['ITEMS'] as $filter) {
        foreach ($filter['VALUES'] as $val) {
            if (array_key_exists('BRANDS', $val)) {
                foreach ($val['BRANDS'] as $brand) {
                    $arResult['FILTERS'][$brand['CONTROL_ID']] = checkParams($brand);
                }
            } else {
                $arResult['FILTERS'][$val['CONTROL_ID']] = checkParams($val);
            }
        }
    }

    $arResult['FILTERS'] = array_filter($arResult['FILTERS'], function ($value) {
        return $value;
    });
}

$result = [];
foreach ($arResult['FILTERS'] as $key => $value) {
    $prefix = substr($key, 0, strrpos($key, "_")); // Получаем префикс ключа
    $postfix = substr($key, strrpos($key, "_") + 1); // Получаем постфикс ключа

    if ($postfix === "MIN" || $postfix === "MAX") {
        $arResult['FILTERS'][$prefix][]= $value;
        unset($arResult['FILTERS'][$key]);
    }
}

vr($arResult['FILTERS']);
function checkParams ($elem) {
    if(array_key_exists($elem['CONTROL_ID'], $_GET) || $elem['CHECKED']) {
        return ($elem['HTML_VALUE'] === "Y") ? $elem['VALUE'] : $elem['HTML_VALUE'];
    }
}

