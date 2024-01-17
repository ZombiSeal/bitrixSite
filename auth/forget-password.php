<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent(
    "bitrix:system.auth.changepasswd",
    "",
    array(
        "SHOW_ERRORS" => 'Y'
    ),
    false
);
?>
<!---->
<!--<div class="popup-form">-->
<!--    <div class="popup-form__zag">Будьте как дома!</div>-->
<!--    <div class="popup-form__error">Поля обозначеные знаком-->
<!--        <svg class="sprite-svg">-->
<!--            <use xlink:href="./images/sprite/sprite.svg#error-form"></use>-->
<!--        </svg>заполнены неверно!-->
<!--    </div>-->
<!--    <form class="tabs">-->
<!--        <div class="tabs-content active">-->
<!--            <div class="input-text-label">-->
<!--                <label>Введите электронный адрес</label>-->
<!--                <input class="required--input required--email" type="text"/>-->
<!--                <div class="error-block">-->
<!--                    <div class="error-block__ico">-->
<!--                        <svg class="sprite-svg">-->
<!--                            <use xlink:href="./images/sprite/sprite.svg#error-form"></use>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                    <div class="error-block__message"> Введенный email не существует.</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="input-checkbox">-->
<!--                <label>-->
<!--                    <input class="styler required--check" type="checkbox"/>Я-->
<!--                    &#032<span> cогласен (-на)</span>&#032-->
<!--                    на обработку моих-->
<!--                    &#032<span> персональных</span><br/>данных-->
<!--                </label>-->
<!--            </div>-->
<!--            <div class="input-bottom">-->
<!--                <input class="required--sbmt" type="submit" value="Вышлите мне пароль"/>-->
<!--            </div>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->