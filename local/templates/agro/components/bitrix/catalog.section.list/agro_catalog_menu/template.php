<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
//
//vr($arResult);
?>
<?php if(!empty($arResult['SECTIONS'])):?>
    <div class="container">
        <div class="menu">
            <ul>
                <?php foreach ($arResult['SECTIONS'] as $item): ?>
                    <li><a href="<?= $item['SECTION_PAGE_URL'] ?>"><?= $item['NAME'] ?><span>(<?=$item['ELEMENT_CNT']?>)</span></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif;?>