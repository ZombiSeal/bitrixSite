<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="brands__img">
    <?php
    if (!empty($arResult['ITEMS'])):
        foreach ($arResult['ITEMS'] as $brand):?>
            <?php
            $this->AddEditAction($brand['ID'], $brand['EDIT_LINK'], CIBlock::GetArrayByID($brand["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($brand['ID'], $brand['DELETE_LINK'], CIBlock::GetArrayByID($brand["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <a id="<?= $this->GetEditAreaId($brand['ID']); ?>" class="img wow fadeInUp" href="<?=$brand[' DETAIL_PAGE_URL']?>" data-wow-delay=".5s">
                <?php $img = CFile::GetFileArray($brand['PROPERTIES']['LOGO']['VALUE']); ?>
                <img
                        src="<?=$img['SRC']?>" class="lazy"
                        data-src="<?=$img['SRC']?>"/>
            </a>
        <?php
        endforeach;
    endif; ?>
</div>