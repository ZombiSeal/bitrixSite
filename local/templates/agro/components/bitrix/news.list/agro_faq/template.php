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
/**/
vr($arResult);
$arFilter = ['ID'=> $arParams['ID'],'IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE'=>'Y'];
?>
<?php if (!empty($arResult['ITEMS'])): ?>
    <ul class="text-accordion__list">
        <? foreach ($arResult["ITEMS"] as $arItem):?>
            <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="zag"><?=$arItem['NAME']?></div>
                <div class="text"><?=$arItem['DETAIL_TEXT']?></div>
            </li>
        <? endforeach; ?>
    </ul>
<?php endif; ?>

