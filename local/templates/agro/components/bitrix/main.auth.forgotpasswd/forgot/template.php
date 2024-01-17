<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arResult['AUTHORIZED']) {
    echo GetMessage('MAIN_AUTH_PWD_SUCCESS');
    return;
}
?>

<div class="form-wrapper">
    <div class="popup-form popup-form--flat">

        <div class="popup-form__zag popup-form__zag--w">
            <div><?= GetMessage('MAIN_AUTH_PWD_HEADER'); ?></div>
        </div>

        <p class="simple-text"><?= GetMessage('MAIN_AUTH_PWD_NOTE'); ?></p>

        <form name="bform" method="post" target="_top" action="<?= POST_FORM_ACTION_URI; ?>">

            <div class="input-text-label">
                <label><?= GetMessage('MAIN_AUTH_PWD_FIELD_LOGIN'); ?></label>
                <input class="required--input" type="text" name="<?= $arResult['FIELDS']['login']; ?>" maxlength="255">
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message"> Что-то не так</div>
                </div>
            </div>

            <? if ($arResult['ERRORS']): ?>
                <div class="error-auth error-auth--show">
                    <?php foreach ($arResult['ERRORS'] as $error) echo $error; ?>
                </div>
            <? elseif ($arResult['SUCCESS']): ?>
                <div class="error-auth error-auth--show">
                    <?= $arResult['SUCCESS']; ?>
                </div>
            <? endif; ?>
            <div class="input-bottom">
                <input type="submit" class="required--sbmt" name="<?= $arResult['FIELDS']['action']; ?>"
                       value="<?= GetMessage('MAIN_AUTH_PWD_FIELD_SUBMIT'); ?>"/>
            </div>


        </form>
    </div>
</div>

