<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_POST['ajax_compare'] == 'Y') {
    ob_end_clean();
    $compareItems = array_keys($_SESSION['CATALOG_COMPARE_LIST'][CATALOG_IBLOCK_ID]['ITEMS']) ?? [];
    echo json_encode($compareItems ?? []);
    die();
}

if($_POST['ajax_del_all'] == 'Y') {
    ob_end_clean();
    unset($_SESSION['CATALOG_COMPARE_LIST'][CATALOG_IBLOCK_ID]['ITEMS']);
    echo json_encode(['status' => 'ok']);
    die();
}