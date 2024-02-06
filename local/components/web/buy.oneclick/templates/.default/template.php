<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<div class="popup-form">
    <div class="popup-form__zag">Купить в 1 клик</div>
    <div class="popup-form__error">Поля обозначеные знаком
        <svg class="sprite-svg">
            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#error-form"></use>
        </svg>
        заполнены неверно!
    </div>

    <div class="tabs-content active">
        <form class="auth-form" name="<?= $arResult['FORM_ID']; ?>" target="_top" method="post"
              action="<?= POST_FORM_ACTION_URI; ?>">
            <div class="input-text-label">
                <label>Ваше имя</label>
                <input class="required--input" type="text" name="<?= $arResult['FIELDS']['name']; ?>" maxlength="255"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="input-text-label">
                <label>Ваша фамилия</label>
                <input class="required--input" type="text" name="<?= $arResult['FIELDS']['last_name']; ?>"
                       maxlength="255" autocomplete="off"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message"> Введенный пароль неверен.</div>
                </div>
            </div>
            <div class="input-text-label">
                <label>Ваше отчество</label>
                <input class="required--input" type="text" name="<?= $arResult['FIELDS']['second_name']; ?>"
                       maxlength="255" autocomplete="off"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message"> Введенный пароль неверен.</div>
                </div>
            </div>
            <div class="input-text-label">
                <label>Ваш телефон</label>
                <input class="required--input required--phone" type="text" name="<?= $arResult['FIELDS']['phone']; ?>"
                       maxlength="255" autocomplete="off"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message"> Введенный пароль неверен.</div>
                </div>
            </div>
            <div class="input-text-label">
                <label>Ваш email</label>
                <input class="required--input required--email" type="text" name="<?= $arResult['FIELDS']['email']; ?>"
                       maxlength="255" autocomplete="off"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message">Введенный пароль неверен.</div>
                </div>
            </div>
            <div class="input-text-label">
                <label>Количество</label>
                <input class="required--input" type="text" name="<?= $arResult['FIELDS']['quantity']; ?>"
                       maxlength="255" autocomplete="off"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message"> Введенный пароль неверен.</div>
                </div>
            </div>
            <div class="error-auth"></div>
            <div class="input-bottom">
                <input name="<?= $arResult['FIELDS']['action']; ?>" class="required--sbmt" type="submit"
                       value="Купить"/>
            </div>
        </form>
    </div>

</div>
