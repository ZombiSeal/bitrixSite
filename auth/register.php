<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>

<div class="popup-form">
    <div class="popup-form__zag">Регистрация</div>
    <div class="popup-form__error">Поля обозначеные знаком
        <svg class="sprite-svg">
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#error-form"></use>
        </svg>заполнены неверно!
    </div>
    <div class="tabs">
        <ul class="tabs-nav">
            <li class="active">Физическое лицо</li>
            <li>Юридическое лицо</li>
        </ul>
        <div class="tabs-content active">
            <? $APPLICATION->IncludeComponent(
            "bitrix:main.register",
            "register_private",
            array(
            "AUTH" => "Y",
            "REQUIRED_FIELDS" => array(),
            "SET_TITLE" => "N",
            "SHOW_FIELDS" => array("NAME", "SECOND_NAME", "LAST_NAME", "PERSONAL_MOBILE"),
            "SUCCESS_PAGE" => "",
            "USER_PROPERTY" => array(),
            "USER_PROPERTY_NAME" => "",
            "USE_BACKURL" => "N",
            ),
            false
            );?>
        </div>

        <div class="tabs-content">
            <form>
                <div class="input-text-label">
                    <label>Название организации</label>
                    <input class="required--input" type="text"/>
                    <div class="error-block">
                        <div class="error-block__ico">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#error-form"></use>
                            </svg>
                        </div>
                        <div class="error-block__message"> Введенное название неверено.</div>
                    </div>
                </div>
                <div class="input-text-label">
                    <label>Ваш электронный адрес</label>
                    <input class="required--input required--email" type="text"/>
                    <div class="error-block">
                        <div class="error-block__ico">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#error-form"></use>
                            </svg>
                        </div>
                        <div class="error-block__message"> Введенный email неверен.</div>
                    </div>
                </div>
                <div class="input-text-label">
                    <label>Придумайте пароль</label>
                    <input class="required--input" type="text"/>
                    <div class="error-block">
                        <div class="error-block__ico">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#error-form"></use>
                            </svg>
                        </div>
                        <div class="error-block__message"> Введенный пароль неверен.</div>
                    </div>
                </div>
                <div class="input-text-label">
                    <label>Повторите ваш пароль</label>
                    <input class="required--input" type="password"/>
                    <div class="error-block">
                        <div class="error-block__ico">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#error-form"></use>
                            </svg>
                        </div>
                        <div class="error-block__message"> Введенный пароль неверен.</div>
                    </div>
                </div>
                <div class="input-checkbox">
                    <label>
                        <input class="styler required--check" type="checkbox"/>Я
                        &#032<span> cогласен (-на)</span>&#032
                        на обработку моих
                        &#032<span> персональных</span><br/>данных
                    </label>
                </div>
            </form>
            <div class="input-bottom">
                <input class="required--sbmt" type="submit" value="Зарегистрироваться"/>
                <div class="help w50"><a class="ajax-form" href="/auth/">Я уже зарегистрирован</a></div>
            </div>
        </div>
    </div>
</div>