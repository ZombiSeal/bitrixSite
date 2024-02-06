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

$isAjax = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isAjax = (
        (isset($_POST['ajax_action']) && $_POST['ajax_action'] == 'Y')
        || (isset($_POST['compare_result_reload']) && $_POST['compare_result_reload'] == 'Y')
    );
}

?>
<?php if (!empty($arResult['SHOW_PROPERTIES']) ?? !empty($arResult['ITEMS'])): ?>
<section>
    <div class="container">
        <div class="compare">
            <div class="compare__container">
                <div class="compare-info">
                    <div class="compare-info__fixed">
                        <a class="text-accordion__info"
                           href="tel:80293334455"
                           style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/question.png)">
                            Если подходящей запчасти нету,<strong>позвоните нам по телефону 8 (029) 333-44-55</strong>и
                            мы
                            что-нибудь придумаем.
                        </a>
                    </div>
                        <ul>
                            <?php foreach ($arResult['SHOW_PROPERTIES'] as $property): ?>
                                <li data-index="<?= $property['ID'] ?>">
                                    <?= $property['NAME'] ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                </div>
                <div class="compare-items">
                    <div class="compare-items__links">
                        <a class="btn--gray" href="<? echo $arResult['COMPARE_URL_TEMPLATE'] . 'DIFFERENT=Y'; ?>">
                            <?= GetMessage("CATALOG_ONLY_DIFFERENT") ?>
                            <svg class="sprite-svg icon icon-eye ">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#eye"></use>
                            </svg>
                        </a>
                        <a class="sbmt--red del-compare" href="#"><?=GetMessage('DEL_ALL')?>
                            <svg class="sprite-svg icon icon-delete ">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#delete"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="compare-items__container">
                        <div class="scroll--active clearfix">
                            <?php foreach ($arResult["ITEMS"] as $item): ?>
                                <div class="compare-item">
                                    <a class="delete"
                                       onclick="CatalogCompareObj.delete('<?= CUtil::JSEscape($item['~DELETE_URL']) ?>');"
                                       href="javascript:void(0)"></a>
                                    <a class="compare-item__img" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                                        <div class="bg"
                                             style="background-image: url(<?= $item['PREVIEW_PICTURE']['SRC'] ?>)">
                                        </div>
                                    </a>
                                    <a class="compare-item__text" href="<?= $item['DETAIL_PAGE_URL'] ?>">
                                        <div class="compare-item__type"><?=$item['SECTION_NAME']?></div>
                                        <div class="compare-item__name"><?= $item['NAME'] ?></div>
                                        <div class="compare-item__price"><?=$item['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']?></div>
                                    </a>
                                    <div class="compare-item__info">
                                        <ul>
                                            <?php
                                            foreach ($arResult['SHOW_PROPERTIES'] as $code => $value):
                                                if (isset($item["DISPLAY_PROPERTIES"][$code])):?>
                                                    <li class="<?=array_key_exists('DIF', $item["DISPLAY_PROPERTIES"][$code]) ? 'superior' : ''?>">
                                                        <?=(!empty($item["DISPLAY_PROPERTIES"][$code]['DISPLAY_VALUE'])) ? $item['DISPLAY_PROPERTIES'][$code]['DISPLAY_VALUE'] : GetMessage('NOT_PROPERTY')?>
                                                    </li>
                                                <?php else : ?>
                                                    <li><?=GetMessage('NOT_PROPERTY')?></li>
                                                <?php endif;
                                            endforeach;
                                            ?>
                                        </ul>
                                        <div class="compare-item__info-link">
                                            <a class="sbmt--red-border add-basket" data-id="<?=$item['ID']?>"
                                               href="<?= $item["ADD_URL"] ?>"
                                               rel="nofollow">
                                                <?= GetMessage("CATALOG_COMPARE_BUY"); ?>
                                            <svg class="sprite-svg icon icon-shopping-bag ">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#shopping-bag"></use>
                                            </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php endif; ?>

<script type="text/javascript">
    var CatalogCompareObj = new BX.Iblock.Catalog.CompareClass("bx_catalog_compare_block", '<?=CUtil::JSEscape($arResult['~COMPARE_URL_TEMPLATE']); ?>');
</script>