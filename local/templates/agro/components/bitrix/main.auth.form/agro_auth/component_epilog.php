<?php
if ($_POST['AUTH_ACTION'] == 'Войти') {
    ob_end_clean();
    $error = !empty($arResult['ERRORS']) ? true : false;
    echo json_encode(['error' => $error]);
    die();
}
