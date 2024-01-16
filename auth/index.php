<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent(
    "bitrix:main.auth.form",
    "agro_auth",
    array(
        "AUTH_FORGOT_PASSWORD_URL" => "",
        "AUTH_REGISTER_URL" => "",
        "AUTH_SUCCESS_URL" => "",
    ),
    false
);
?>

