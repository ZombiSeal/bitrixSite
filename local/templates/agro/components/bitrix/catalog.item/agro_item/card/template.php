<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */

?>

<div class="catalog-item__flags">
    <?php foreach ($item['FLAGS'] as $flag): ?>
        <?php if ($flag[0]['VALUE_XML_ID'] === 'Y'): ?>
            <?= renderFlag($flag['SPRITE'], $flag['CLASS'], $flag[0]['NAME'] ); ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<a class="catalog-item__img lazy" href="<?=$item['DETAIL_PAGE_URL'] ?>"
   style="background-image: url(<?= CFile::GetPath($item['PROPERTIES']['IMAGES']['VALUE'][0])?>)"></a>
<div class="catalog-item__name">
    <div>
        <div class="pos"><?= $item['SECTION_NAME'] ?></div>
        <div class="name"><?= $item['NAME'] ?></div>
    </div>
</div>

<?php
if (!empty($item['DISPLAY_PROPERTIES'])) {
    ?>
    <div class="catalog-item__param">
        <div>
            <?
            foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty) {
                ?>
                <div class="block">
                    <span><?= $displayProperty['NAME'] ?>:</span>
                    <span><?= $displayProperty['VALUE'] ?></span>
                </div>
                <?
            }
            ?>
        </div>
    </div>
    <?
}
?>
<div class="catalog-item__bottom">
    <div class="catalog-item__price">
        <?php if ($arParams['SHOW_OLD_PRICE'] === 'Y' && $price['RATIO_PRICE'] < $price['RATIO_BASE_PRICE']): ?>
            <span class="new"><?= $price['PRINT_RATIO_PRICE']; ?></span>
            <span class="old"><?= $price['PRINT_RATIO_BASE_PRICE'] ?></span>
        <?php else: ?>
            <span class="current"><?= $price['PRINT_RATIO_PRICE']; ?></span>
        <?php endif; ?>
    </div>

    <div class="catalog-item__ico ">

        <?php if (!empty($item['PROPERTIES']['VIDEO']['VALUE'])): ?>
            <a class="catalog-item__ico-video" href="#">
                <svg class="sprite-svg">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                </svg>
                <div class="tooltip-ico">
                    <span>Видеобзор</span>
                </div>
            </a>
        <?php endif; ?>
        <?php if ($arParams['DISPLAY_COMPARE'] && (!$haveOffers || $arParams['PRODUCT_DISPLAY_MODE'] === 'Y')): ?>
            <a class="compare-pr" href="" id="<?=$itemIds['COMPARE_LINK']?>" data-id="<?=$item['ID']?>" action="<?=($item['IN_COMPARE']) ? 'DELETE_FROM_COMPARE_LIST' : 'ADD_TO_COMPARE_LIST'?>">
                <svg class="sprite-svg">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#compare"></use>
                </svg>
                <div class="tooltip-ico">
                    <span>Добавить в сравнение</span>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($actualItem['CAN_BUY']): ?>
            <a class="ajax-form" href="/basket/click-buy/?action=<?=$item['CLICK_ACTION']?>&product_id=<?=$item['ID']?>" data-id="<?= $item['ID']; ?>">
                <svg class="sprite-svg ajax-one-click">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#click-one"></use>
                </svg>
                <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
            </a>
            <a class="add-basket" href="<?= $item['ADD_URL'] ?>" id="<?= $itemIds['BUY_LINK'] ?>"
               data-id="<?= $item['ID']; ?>">
                <svg class="sprite-svg">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#shopping-bag"></use>
                </svg>
                <div class="tooltip-ico"><span>В корзину</span></div>
            </a>
        <?php else: ?>
            <div>нет в наличии</div>
        <?php endif; ?>
    </div>
</div>
