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
require("result_modify.php");
$this->setFrameMode(true);
?>
<?php if (!empty($arResult['SECTIONS'])): ?>
    <ul class="header-catalog-popup__ul clearfix">
        <?php foreach ($arResult['SECTIONS'] as $item):?>

            <?php if (!empty($item['SUB_SECTIONS'])): ?>
                <li class="header-catalog-popup__li hasChild">
            <?php else: ?>
                <li class="header-catalog-popup__li">
            <?php endif; ?>
                    <a href="<?=$item['SECTION_PAGE_URL'];?>"><?=$item['NAME']?> <span>(<?=$item['ELEMENT_CNT']?>)</span></a>
            <?php if (!empty($item['SUB_SECTIONS'])): ?>
                <ul class="drop"">
                    <?php foreach ($item['SUB_SECTIONS'] as $subitem): ?>
                        <li>
                            <a href="<?=$subitem['SECTION_PAGE_URL'];?>"><?= $subitem['NAME'] ?? '';?>
                                <span>(<?=$item['ELEMENT_CNT']?>)</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
