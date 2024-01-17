<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>

<div class="popup-form">
    <div class="popup-form__zag">Регистрация</div>
    <div class="popup-form__error">Поля обозначенные знаком
        <svg class="sprite-svg">
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#error-form"></use>
        </svg>заполнены неверно!
    </div>
    <div class="tabs">
        <ul class="tabs-nav">
            <li class="active">Физическое лицо</li>
            <li>Юридическое лицо</li>
        </ul>
        <div class="tabs-content active" type-id="4">
            <? $APPLICATION->IncludeComponent(
            "bitrix:main.register",
            "register_private",
            array(
            "AUTH" => "Y",
            "SET_TITLE" => "N",
            "SHOW_FIELDS" => array("NAME", "SECOND_NAME", "LAST_NAME", "PERSONAL_PHONE"),
            "REQUIRED_FIELDS" => Array("NAME", "SECOND_NAME", "LAST_NAME", "PERSONAL_PHONE"),
            "SUCCESS_PAGE" => "",
            "USER_PROPERTY" => array(),
            "USER_PROPERTY_NAME" => "",
            "USE_BACKURL" => "N",
            "FORM_NAME" => 'register_private'
            ),
            false
            );?>
        </div>

        <div class="tabs-content" type-id="5">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.register",
                "register_private",
                array(
                    "AUTH" => "Y",
                    "SET_TITLE" => "N",
                    "SHOW_FIELDS" => array("WORK_COMPANY", "WORK_WWW", "WORK_PHONE"),
                    "REQUIRED_FIELDS" => Array("WORK_COMPANY","WORK_PHONE"),
                    "SUCCESS_PAGE" => "",
                    "USER_PROPERTY" => array(),
                    "USER_PROPERTY_NAME" => "",
                    "USE_BACKURL" => "N",
                    "FORM_NAME" => 'register_legal'
                ),
                false
            );?>
        </div>
    </div>
</div>