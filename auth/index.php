<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->IncludeComponent(
    "bitrix:main.auth.form",
    "change_passwd",
    array(
        "AUTH_FORGOT_PASSWORD_URL" => "",
        "AUTH_REGISTER_URL" => "",
        "AUTH_SUCCESS_URL" => "",
    ),
    false
);
$APPLICATION->IncludeComponent(
    "bitrix:main.auth.changepasswd",
    "change",
    array(
        "SHOW_ERRORS" => 'Y'
    ),
    false
);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");

?>

