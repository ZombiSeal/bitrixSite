<?
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->addExternalJs(SITE_TEMPLATE_PATH.'/js/input-mask.js');

?>
<?php if(!empty($arResult['arUserNew'])):?>
<div class="lc-content">
    <?php if(!empty($arResult["strProfileError"])):?>
    <div class="error-auth error-auth--block">
        <?=$arResult["strProfileError"];?>
    </div>
    <?php endif;?>
    <?php if ($arResult['DATA_SAVED'] == 'Y'): ?>
    <div class="error-auth error-auth--block">
        <?=GetMessage('PROFILE_DATA_SAVED')?>
    </div>
    <?php endif;?>
    <form class="lc-input-container" method="post" name="form1" action="<?=$arResult["FORM_TARGET"]?>" enctype="multipart/form-data">
        <?=$arResult["BX_SESSION_CHECK"]?>
        <input type="hidden" name="lang" value="<?=LANG?>" />
        <input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
        <input type="hidden" name="LOGIN" value=<?=$arResult['arUserNew']['EMAIL']?> />
        <input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />

           <?php foreach ($arResult['arUserNew'] as $key => $input):?>
                <div class="input-text-label <?=(!empty($input) ? 'focus' : '');?>" >
                    <label><?=GetMessage($key)?></label>
                    <input type="text"
                           name="<?=$key?>"
                           placeholder=""
                           value="<?=$input?>"
                           <?php if($key === 'PERSONAL_BIRTHDAY'):?>
                               class="dataPicker"
                               data-src="<?=SITE_TEMPLATE_PATH?>/images/svg/small-calendar.svg"
                               data-template="dd.mm.yy"
                           <?php endif;?>
                    />
                </div>
           <?php endforeach;?>

           <?php if($arResult['CAN_EDIT_PASSWORD']):?>
                <div class="input-text-label" >
                    <label><?=GetMessage('NEW_PASSWORD')?></label>
                    <input type="password" name="NEW_PASSWORD" placeholder="" value="" />
                </div>
                <div class="input-text-label" >
                    <label><?=GetMessage('NEW_PASSWORD_CONFIRM')?></label>
                    <input type="password" name="NEW_PASSWORD_CONFIRM" placeholder="" value="" />
                </div>
            <?endif;?>
        <input class="sbmt--pen" type="submit" name="save" value="<?=GetMessage("MAIN_SAVE")?>">
    </form>
</div>
<?php endif;?>
