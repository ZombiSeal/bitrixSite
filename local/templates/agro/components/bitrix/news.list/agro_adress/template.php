<?php use Bitrix\Main\Page\Asset;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <ul class="location-block__ul">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="ico-placeholder">
                <a href="#">Магазин на<span><?= $arItem['NAME'] ?></span></a>
                <div class="arrow">
                    <svg class="sprite-svg icon icon-ar-down ">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#ar-down"></use>
                    </svg>
                </div>
                <ul class="drop">
                    <?php if (!empty($arItem['PROPERTIES']['PHONES'])): ?>
                        <?php foreach ($arItem['PROPERTIES']['PHONES']['~VALUE'] as $phone):
                            $strPhone = preg_replace('/[^0-9]/', '', $phone['TEXT']);
                        ?>
                            <li><a href="<?=$strPhone?>"><?=$phone['TEXT']?></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if (!empty($arItem['PROPERTIES']['WORK_TIME'])): ?>
                    <li class="time"><strong>Время работы:</strong>
                        <?php foreach ($arItem['PROPERTIES']['WORK_TIME']['VALUE'] as $time):?>
                            <p><?=$time?></p>
                        <?php endforeach; ?>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty($arItem['PROPERTIES']['EMAIL'])): ?>
                        <li><a class="mail" href="mailto:<?=$arItem['PROPERTIES']['EMAIL']['VALUE'];?>"><?=$arItem['PROPERTIES']['EMAIL']['VALUE'];?></a></li>
                    <?php endif; ?>

                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
