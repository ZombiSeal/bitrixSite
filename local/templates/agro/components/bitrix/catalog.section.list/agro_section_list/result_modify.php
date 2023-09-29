<?php
$arPrepItems = [];
if (!empty($arResult['SECTIONS'])) {
    foreach ($arResult['SECTIONS'] as $key => $item) {
        if ($item['DEPTH_LEVEL'] == 1) {
            $arPrepItems[] = $item;
        } else {
            $keyArr = array_keys($arPrepItems);
            $lastItem = $keyArr[count($keyArr) - 1];
            $arPrepItems[$lastItem]['SUB_SECTIONS'][] = $item;
        }
    }
}
$arResult['SECTIONS'] = $arPrepItems;
