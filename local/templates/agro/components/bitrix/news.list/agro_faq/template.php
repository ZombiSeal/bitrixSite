<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
require 'result_modify.php';
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <?php foreach ($arResult['ITEMS'] as $arItem):?>
        <div class="h2"><?=$arItem['SECTION_NAME']?></div>
        <ul class="text-accordion__list">
            <?php foreach ($arItem["ELEMENTS"] as $el):?>
                <?php
                $this->AddEditAction($el['ID'], $el['EDIT_LINK'], CIBlock::GetArrayByID($el["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($el['ID'], $el['DELETE_LINK'], CIBlock::GetArrayByID($el["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li id="<?= $this->GetEditAreaId($el['ID']);?>">
                    <div class="zag"><?=$el['NAME']?></div>
                    <div class="text"><?= $el['DETAIL_TEXT'] ?></div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
<?php endif; ?>

