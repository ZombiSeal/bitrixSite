<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 * @global CUser $USER
 * @global CMain $APPLICATION
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
?>
<?php if ($arResult['SHOW_FIELDS']): ?>
    <form method="post" action="<?= POST_FORM_ACTION_URI ?>" name="regform" enctype="multipart/form-data">
        <?php foreach ($arResult["SHOW_FIELDS"] as $field): ?>
            <div class="input-text-label">
                <label><?= GetMessage('REGISTER_FIELD_' . $field) ?></label>
                <input name="REGISTER[<?= $field ?>]"
                       value="<?= $arResult["VALUES"][$field] ?>"
                       class="<?= ($arResult["REQUIRED_FIELDS_FLAGS"][$field] == "Y") ? 'required--input' : ''; ?>"
                       type="<?= ($field === 'PASSWORD' || $field === 'CONFIRM_PASSWORD') ? 'password' : 'text'; ?>"/>
                <div class="error-block">
                    <div class="error-block__ico">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#error-form"></use>
                        </svg>
                    </div>
                    <div class="error-block__message"> Введенные данные неверены.</div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="input-checkbox">
            <label>
                <input class="styler required--check" type="checkbox"/>Я
                &#032<span> cогласен (-на)</span>&#032
                на обработку моих
                &#032<span> персональных</span><br/>данных
            </label>
        </div>
        <div class="input-bottom">
            <input class="required--sbmt" type="submit" name="register_submit_button" value="Зарегистрироваться"/>
            <div class="help w50"><a class="ajax-form" href="/auth/">Я уже зарегистрирован</a></div>
        </div>
    </form>
<? endif; ?>
