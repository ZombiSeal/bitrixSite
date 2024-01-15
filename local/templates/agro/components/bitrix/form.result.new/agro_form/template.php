<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->addExternalJs(SITE_TEMPLATE_PATH.'/js/input-mask.js');
?>

<div class="form-opt">
    <div class="form-opt__container">
        <div class="form-opt__zag">Напишите нам, если<strong> хотите стать оптовым клиентом</strong></div>
        <p class="form-opt__p" style="color:green; font-weight: bold; margin-bottom: 10px; font-size: 18px"><?=$arResult["FORM_NOTE"]?></p>
        <p class="form-opt__p"><?= $arResult["FORM_DESCRIPTION"] ?></p>

        <div class="form-opt__form">
            <?php if ($arResult["isFormErrors"] == "Y"): ?><?= $arResult["FORM_ERRORS_TEXT"]; ?><?php endif; ?>
            <?=$arResult["FORM_HEADER"]?>

                <?php if (!empty($arResult["QUESTIONS"])): ?>
                    <?php foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion): ?>

                        <div class="input-text-label w2">
                            <label><?= $arQuestion["CAPTION"] ?></label>
                            <?=$arQuestion["HTML_CODE"]?>
                        </div>
                    <?php endforeach; ?>
                    <input class="required--sbmt" type="submit" name="web_form_submit"
                           value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>"/>
                <?php endif;?>
        </div>
    </div>
</div>




