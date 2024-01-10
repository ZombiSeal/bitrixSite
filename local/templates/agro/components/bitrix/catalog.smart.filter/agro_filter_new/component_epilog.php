<?php

if ($_REQUEST['ajaxCount'] == 'y') {
    $FILTER_NAME = (string)$arParams["FILTER_NAME"];
    ob_end_clean();
    $arFilter = $this->makeFilter($FILTER_NAME);
    $arResult["ELEMENT_COUNT"] = CIBlockElement::GetList(array(), $arFilter, array(), false);
    echo json_encode($arResult["ELEMENT_COUNT"]);
    die();
}
