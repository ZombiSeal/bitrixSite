<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<div class="main-article">
    <div class="container">
        <?php if (!empty($arResult['ITEMS'])):
            foreach ($arResult['ITEMS'] as $key=>$item):?>
                <?php

                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                $classPrefix = $item['PROPERTIES']['TYPE']['VALUE_XML_ID'];
                $isPreview = $item['PROPERTIES']['PREVIEW'];
                $type = (array_key_exists('IS_PREVIEW', $item)) ? 'Анонс': $item['PROPERTIES']['TYPE']['VALUE'];
                ?>

                <div id="<?=$this->GetEditAreaId($item['ID']);?>" class="article-item article-item--<?= $classPrefix ?> <?=(array_key_exists('IS_PREVIEW', $item)) ? 'article-item--main' : ''?>">
                    <div class="article-item__top">
                        <a class="article-item__type" href="<?=$item["DETAIL_PAGE_URL"]?>">
                            <?=$type;?>
                        </a>
                            <div class="article-item__date"><?= $item['DISPLAY_ACTIVE_FROM'] ?></div>
                    </div>
                    <div class="article-item__name">
                        <?=$item['NAME']?>
                    </div>
                    <div class="article-item__desc">
                        <?=htmlspecialchars_decode($item['PREVIEW_TEXT']);?>
                    </div>
                    <a href="<?=$item["DETAIL_PAGE_URL"]?>" class="article-item__link">
                        Читать полностью
                        <div class="arrow">
                            <svg class="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#a-r-gray"></use>
                            </svg>
                        </div>
                    </a>
                </div>
            <?php
            endforeach;
        endif; ?>

        <?php if ($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'):?>
            <div class="pagination-container" data-pagination-num="<?= $navParams['NavNum'] ?>">
                <?= $arResult['NAV_STRING'] ?>
            </div>
        <?php endif;?>
    </div>
</div>

