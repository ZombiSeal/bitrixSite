<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

?>

<form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform">
    <div class="input-text-label">
        <label>Ваше имя</label>
        <input class="required--input" type="text"/>
        <div class="error-block">
            <div class="error-block__ico">
                <svg class="sprite-svg">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#error-form"></use>
                </svg>
            </div>
            <div class="error-block__message"> Введенное имя неверено.</div>
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
            <div class="error-block__message"> Введенный email не существует.</div>
        </div>
    </div>
    <div class="input-text-label">
        <label>Придумайте пароль</label>
        <input class="required--password" type="text" data-password="main"/>
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
        <label>Повторите ваш пароль</label>
        <input class="required--password" type="password" data-password="repeat"/>
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
    <div class="input-bottom">
        <input class="required--sbmt" type="submit" value="Зарегистрироваться"/>
        <div class="help w50"><a class="ajax-form" href="/auth/">Я уже зарегистрирован</a></div>
    </div>
</form>
