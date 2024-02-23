<?php
if ($_REQUEST['ajaxCount'] == 'y') {
    $FILTER_NAME = (string)$arParams["FILTER_NAME"];
    ob_end_clean();
    $arFilter = $this->makeFilter($FILTER_NAME);
    if($_GET['arrFilter_available']) $arFilter['CATALOG_AVAILABLE'] = 'Y';
    $arResult["ELEMENT_COUNT"] = CIBlockElement::GetList(array(), $arFilter, array(), false);
    echo json_encode($arResult["ELEMENT_COUNT"]);
    die();
}
