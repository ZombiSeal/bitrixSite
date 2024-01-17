<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="popup-form">
    <div class="popup-form__zag">Авторизация</div>
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
                <label><?=GetMessage('AUTH_EMAIL')?></label>
                <input class="required--input" type="text" name="<?= $arResult['FIELDS']['login']; ?>" maxlength="255"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="input-text-label">
                <label><?=GetMessage('AUTH_PASSWORD')?></label>
                <input class="required--input"  data-mask="000 000 000" type="password" name="<?= $arResult['FIELDS']['password']; ?>"
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
                <input name="<?= $arResult['FIELDS']['action']; ?>" class="required--sbmt ajax-auth" type="submit"
                       value="<?= GetMessage('AUTH_BUTTON') ?>"/><span>или</span>
                <a class="ajax-form btn" href="/auth/register.php"><?= GetMessage('REGISTER_BUTTON') ?></a>
                <div class="help"><a href="/auth/forget.php"><?= GetMessage('FORGET_BUTTON') ?></a></div>
            </div>
        </form>
    </div>

</div>



