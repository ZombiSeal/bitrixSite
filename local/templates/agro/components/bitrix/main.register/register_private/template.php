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
    die(); ?>
<?php if ($arResult['SHOW_FIELDS']):?>
    <form class="register-private" method="post" action="<?= POST_FORM_ACTION_URI ?>" name="<?=$arParams['FORM_NAME']?>" enctype="multipart/form-data">
        <?php if(!empty ($arResult['USER_PROPERTIES']['DATA']['UF_TYPE'])):?>
            <input name="<?=$arResult['USER_PROPERTIES']['DATA']['UF_TYPE']['FIELD_NAME']?>"
                   value=""
                   type="hidden"/>
        <?php endif;?>
        <?php foreach ($arResult["SHOW_FIELDS"] as $field):?>

            <?php switch ($field) {
                case 'PASSWORD':
                    $class = 'required--password required--input';
                    $attrPassword = 'main';
                    $type = 'password';
                    break;
                case 'CONFIRM_PASSWORD':
                    $class= 'required--password required--input';
                    $attrPassword = 'repeat';
                    $type = 'password';
                    break;
                case 'EMAIL':
                    $class= 'required--email required--input';
                    $type = 'text';
                    break;
                case 'PERSONAL_PHONE':
                case 'WORK_PHONE':
                    $class = 'required--phone required--input';
                    $type = 'text';
                    break;
                default:
                    $class = 'required--input';
                    $type = 'text';
                    break;
            } ?>

            <?php if($field === 'LOGIN'):?>
                <input name="REGISTER[<?= $field ?>]"
                       value="<?=$arResult["VALUES"][$field]?>"
                       type="hidden"/>
            <?php else:?>
                <div class="input-text-label">
                    <label><?= GetMessage('REGISTER_FIELD_' . $field) ?></label>
                    <input name="REGISTER[<?= $field ?>]"
                           value="<?= $arResult["VALUES"][$field] ?>"
                           class="<?= ($arResult["REQUIRED_FIELDS_FLAGS"][$field] == "Y") ? $class : ''; ?>"
                           type="<?=$type?>"
                           <?=(isset($attrPassword)) ? 'data-password=' . $attrPassword : '';?>
                    />
                    <div class="error-block">
                        <div class="error-block__ico">
                            <svg class="sprite-svg">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#error-form"></use>
                            </svg>
                        </div>
                        <div class="error-block__message"> <?= GetMessage('REGISTER_ERROR_' . $field) ?></div>
                    </div>
                </div>
        <?php endif;?>

        <?php endforeach; ?>
        <div class="input-checkbox">
            <label>
                <input class="styler required--check" type="checkbox"/>Я
                &#032<span> cогласен (-на)</span>&#032
                на обработку моих
                &#032<span> персональных</span><br/>данных
            </label>
        </div>
        <div class="error-auth"></div>
        <div class="input-bottom">
            <input class="required--sbmt ajax-register" type="submit" name="register_submit_button" value="<?= GetMessage('REGISTER_BUTTON') ?>"/>
            <div class="help w50"><a class="ajax-form" href="/auth/auth.php">Я уже зарегистрирован</a></div>
        </div>
    </form>
<? endif; ?>
