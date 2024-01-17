<?php
if ($_POST['form_name'] == $arParams['FORM_NAME']) {
    ob_end_clean();
    $error = !empty($arResult['ERRORS']) ? true : false;
    echo json_encode(['error' => $error, 'proba' => $arResult]);
    die();
}