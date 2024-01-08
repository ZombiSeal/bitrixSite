<?php

if ($_REQUEST['ajax_filter_count'] === 'y') {
    $FILTER_NAME = (string)$arParams["FILTER_NAME"];
    ob_end_clean();
    $arFilter = $this->makeFilter($FILTER_NAME);
    if (!empty($preFilter))
        $arFilter = array_merge($preFilter, $arFilter);
    if (Loader::includeModule('catalog'))
    {
        $arFilter = CProductQueryBuilder::convertOldFilter($arFilter);
    }
    $arResult["ELEMENT_COUNT"] = CIBlockElement::GetList(array(), $arFilter, array(), false);
    die();
}
