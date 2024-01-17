<?php
if ($_POST['AUTH_ACTION'] == GetMessage("AUTH_BUTTON")) {
    ob_end_clean();
    $error = !empty($arResult['ERRORS']) ? true : false;
    echo json_encode(['error' => $error]);
    die();
}
