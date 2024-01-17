<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if ($arResult['AUTHORIZED']) {
    echo Loc::getMessage('MAIN_AUTH_CHD_SUCCESS');
    return;
}

$fields = $arResult['FIELDS'];
?>

<div class="form-wrapper">
    <div class="popup-form popup-form--flat">
        <div class="popup-form__zag popup-form__zag--w">
            <div><?= GetMessage('MAIN_AUTH_CHD_HEADER'); ?></div>
        </div>

        <form name="bform" method="post" target="_top" action="<?= POST_FORM_ACTION_URI; ?>">
            <input type="hidden" name="<?= $fields['checkword']; ?>" maxlength="255"
                   value="<?= \htmlspecialcharsbx($arResult[$fields['checkword']]); ?>"/>

            <div class="input-text-label">
                <label><?= GetMessage('MAIN_AUTH_CHD_FIELD_LOGIN'); ?></label>
                <input type="text" name="<?= $fields['login']; ?>" maxlength="255"
                       value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']); ?>"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message"> Что-то не так</div>
                </div>
            </div>

            <div class="input-text-label">
                <label><?= GetMessage('MAIN_AUTH_CHD_FIELD_PASS'); ?></label>
                <input class="required--input required--password" data-password="main" type="password" name="<?= $fields['password']; ?>"
                       maxlength="255" autocomplete="off"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message"> Что-то не так</div>
                </div>
            </div>

            <div class="input-text-label">
                <label><?= GetMessage('MAIN_AUTH_CHD_FIELD_PASS2'); ?></label>
                <input class="required--input required--password" type="password" data-password="repeat"
                       name="<?= $fields['confirm_password']; ?>" maxlength="255" autocomplete="off"/>
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
                <input type="submit" class="required--sbmt" name="<?= $fields['action']; ?>"
                       value="<?=GetMessage('MAIN_AUTH_CHD_FIELD_SUBMIT'); ?>"/>
            </div>
        </form>
    </div>
</div>
