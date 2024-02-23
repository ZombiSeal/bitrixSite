<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
if (!empty($arResult['ITEMS'])):?>
    <div class="brands-list">
        <?php foreach ($arResult['ITEMS'] as $brand):?>
            <?php

            $this->AddEditAction($brand['ID'], $brand['EDIT_LINK'], CIBlock::GetArrayByID($brand["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($brand['ID'], $brand['DELETE_LINK'], CIBlock::GetArrayByID($brand["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="brands-list__item" id="<?=$this->GetEditAreaId($brand['ID']);?>">

                <div class="brands-list__item-logo">
                    <?php $img = CFile::GetFileArray($brand['PROPERTIES']['LOGO']['VALUE']);?>
                    <img src="<?=$img['SRC'];?>">
                    <p><?=$brand['NAME']?></p>
                </div>
                <div class="brands-list__item-hover">
                    <p><?=$brand['PREVIEW_TEXT']?></p>
                    <a class="article-item__link" href="<?=$brand['DETAIL_PAGE_URL']?>">
                        Читать полностью
                        <div class="arrow">
                            <svg class="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#a-r-gray"></use>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
    <?php if ($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'):?>
        <div class="pagination-container" data-pagination-num="<?= $navParams['NavNum'] ?>">
            <?= $arResult['NAV_STRING'] ?>
        </div>
    <?php endif;?>
<?php endif;?>
