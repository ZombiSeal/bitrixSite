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

use Bitrix\Main\Loader;

if (Loader::includeModule("iblock")) {
    $arSelect = ["NAME"];
    $res = CIBlockSection::GetList([], ["ID" => $item['IBLOCK_SECTION_ID']], false, [], $arSelect);

    while ($el = $res->GetNext()) {
        $item['SECTION_NAME'] = $el['NAME'];
    }

}
//
//vr($arParams);
?>


<div class="catalog-item__flags">
    <?php if ($item['PROPERTIES']['NEW']['VALUE_XML_ID'] === 'Y'): ?>
        <div class="flags novinki">
            <svg class="sprite-svg">
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki"></use>
            </svg>
            <div class="tooltip-ico"><span>Новинки</span></div>
        </div>
    <?php endif; ?>
    <?php if ($item['PROPERTIES']['GUARANTEE']['VALUE_XML_ID'] === 'Y'): ?>
        <div class="flags tehniche">
            <svg class="sprite-svg">
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche"></use>
            </svg>
            <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
        </div>
    <?php endif; ?>
    <?php if ($item['PROPERTIES']['SUPPLIER']['VALUE_XML_ID'] === 'Y'): ?>
        <div class="flags one">
            <svg class="sprite-svg">
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost"></use>
            </svg>
            <div class="tooltip-ico"><span>1-й поставщик</span></div>
        </div>
    <?php endif; ?>
</div>
<a class="catalog-item__img lazy" href="<?= $item['DETAIL_PAGE_URL'] ?>"
   style="background-image: url(<?= $item['PREVIEW_PICTURE']['SRC'] ?>)"></a>
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
            <a class="" href="#" id="<?= $itemIds['COMPARE_LINK'] ?>">
                <svg class="sprite-svg">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#compare"></use>
                </svg>
                <div class="tooltip-ico">
                    <span>Добавить в сравнение</span>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($actualItem['CAN_BUY']): ?>
            <div id="<?= $itemIds['BASKET_ACTIONS'] ?>">
                <a href="javascript:void(0)" id="<?= $itemIds['BUY_LINK'] ?>">
                    <svg class="sprite-svg">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#shopping-bag"></use>
                    </svg>
                    <div class="tooltip-ico"><span>В корзину</span></div>
                </a>
            </div>
        <?php else: ?>
            <div>
                <a id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)" rel="nofollow">
                    <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>


<?
if (!empty($arParams['PRODUCT_BLOCKS_ORDER'])) {
    foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName) {
        switch ($blockName) {
            case 'price': ?>
                <!--                <div class="product-item-info-container product-item-price-container" data-entity="price-block">-->
                <!--                    --><?//
//                    if ($arParams['SHOW_OLD_PRICE'] === 'Y') {
//                        ?>
                <!--                        <span class="product-item-price-old" id="--><?php //= $itemIds['PRICE_OLD'] ?><!--"-->
                <!--								--><?php //= ($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '') ?>
                <!--								--><?php //= $price['PRINT_RATIO_BASE_PRICE'] ?>
                <!--                        </span>&nbsp;-->
                <!--                        --><?//
//                    }
//                    ?>
                <!--                    <span class="product-item-price-current" id="--><?php //= $itemIds['PRICE'] ?><!--">-->
                <!--							--><?//
//                            if (!empty($price)) {
//                                if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers) {
//                                    echo Loc::getMessage(
//                                        'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
//                                        array(
//                                            '#PRICE#' => $price['PRINT_RATIO_PRICE'],
//                                            '#VALUE#' => $measureRatio,
//                                            '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
//                                        )
//                                    );
//                                } else {
//                                    echo $price['PRINT_RATIO_PRICE'];
//                                }
//                            }
//                            ?>
                <!--						</span>-->
                <!--                </div>-->
                <?
                break;

            case 'quantityLimit':
                if ($arParams['SHOW_MAX_QUANTITY'] !== 'N') {
                    if ($haveOffers) {
                        if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                            ?>
                            <div class="product-item-info-container product-item-hidden"
                                 id="<?= $itemIds['QUANTITY_LIMIT'] ?>"
                                 style="display: none;" data-entity="quantity-limit-block">
                                <div class="product-item-info-container-title">
                                    <?= $arParams['MESS_SHOW_MAX_QUANTITY'] ?>:
                                    <span class="product-item-quantity" data-entity="quantity-limit-value"></span>
                                </div>
                            </div>
                            <?
                        }
                    } else {
                        if (
                            $measureRatio
                            && (float)$actualItem['CATALOG_QUANTITY'] > 0
                            && $actualItem['CATALOG_QUANTITY_TRACE'] === 'Y'
                            && $actualItem['CATALOG_CAN_BUY_ZERO'] === 'N'
                        ) {
                            ?>
                            <div class="product-item-info-container product-item-hidden"
                                 id="<?= $itemIds['QUANTITY_LIMIT'] ?>">
                                <div class="product-item-info-container-title">
                                    <?= $arParams['MESS_SHOW_MAX_QUANTITY'] ?>:
                                    <span class="product-item-quantity">
											<?
                                            if ($arParams['SHOW_MAX_QUANTITY'] === 'M') {
                                                if ((float)$actualItem['CATALOG_QUANTITY'] / $measureRatio >= $arParams['RELATIVE_QUANTITY_FACTOR']) {
                                                    echo $arParams['MESS_RELATIVE_QUANTITY_MANY'];
                                                } else {
                                                    echo $arParams['MESS_RELATIVE_QUANTITY_FEW'];
                                                }
                                            } else {
                                                echo $actualItem['CATALOG_QUANTITY'] . ' ' . $actualItem['ITEM_MEASURE']['TITLE'];
                                            }
                                            ?>
										</span>
                                </div>
                            </div>
                            <?
                        }
                    }
                }

                break;

            case 'quantity':

                if (!$haveOffers) {
                    ;
                    if ($actualItem['CAN_BUY'] && $arParams['USE_PRODUCT_QUANTITY']) {
                        ;
                        ?>
                        <div class="product-item-info-container product-item-hidden" data-entity="quantity-block">
                            <div class="product-item-amount">
                                <div class="product-item-amount-field-container">
                                    <span class="product-item-amount-field-btn-minus no-select"
                                          id="<?= $itemIds['QUANTITY_DOWN'] ?>"></span>
                                    <input class="product-item-amount-field" id="<?= $itemIds['QUANTITY'] ?>"
                                           type="number"
                                           name="<?= $arParams['PRODUCT_QUANTITY_VARIABLE'] ?>"
                                           value="<?= $measureRatio ?>">
                                    <span class="product-item-amount-field-btn-plus no-select"
                                          id="<?= $itemIds['QUANTITY_UP'] ?>"></span>
                                    <span class="product-item-amount-description-container">
											<span id="<?= $itemIds['QUANTITY_MEASURE'] ?>">
												<?= $actualItem['ITEM_MEASURE']['TITLE'] ?>
											</span>
											<span id="<?= $itemIds['PRICE_TOTAL'] ?>"></span>
										</span>
                                </div>
                            </div>
                        </div>
                        <?
                    }
                } elseif ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                    if ($arParams['USE_PRODUCT_QUANTITY']) {
                        ?>
                        <div class="product-item-info-container product-item-hidden" data-entity="quantity-block">
                            <div class="product-item-amount">
                                <div class="product-item-amount-field-container">
                                    <span class="product-item-amount-field-btn-minus no-select"
                                          id="<?= $itemIds['QUANTITY_DOWN'] ?>"></span>
                                    <input class="product-item-amount-field" id="<?= $itemIds['QUANTITY'] ?>"
                                           type="number"
                                           name="<?= $arParams['PRODUCT_QUANTITY_VARIABLE'] ?>"
                                           value="<?= $measureRatio ?>">
                                    <span class="product-item-amount-field-btn-plus no-select"
                                          id="<?= $itemIds['QUANTITY_UP'] ?>"></span>
                                    <span class="product-item-amount-description-container">
											<span id="<?= $itemIds['QUANTITY_MEASURE'] ?>"><?= $actualItem['ITEM_MEASURE']['TITLE'] ?></span>
											<span id="<?= $itemIds['PRICE_TOTAL'] ?>"></span>
										</span>
                                </div>
                            </div>
                        </div>
                        <?
                    }
                }

                break;

            case 'buttons':
                ?>
                <div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
                    <?
                    if (!$haveOffers) {
//                        if ($actualItem['CAN_BUY']) {
//                            ?>
                        <!--                            <div class="product-item-button-container" id="--><?php //= $itemIds['BASKET_ACTIONS'] ?><!--">-->
                        <!--                                <a class="btn btn-default --><?php //= $buttonSizeClass ?><!--" id="--><?php //= $itemIds['BUY_LINK'] ?><!--"-->
                        <!--                                   href="javascript:void(0)" rel="nofollow">-->
                        <!--                                    --><?php //= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                        <!--                                </a>-->
                        <!--                            </div>-->
                        <!--                            --><? //
//                        } else {
//                            ?>
                        <!--                            <div class="product-item-button-container">-->
                        <!--                                --><? //
//                                if ($showSubscribe) {
//                                    $APPLICATION->IncludeComponent(
//                                        'bitrix:catalog.product.subscribe',
//                                        '',
//                                        array(
//                                            'PRODUCT_ID' => $actualItem['ID'],
//                                            'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
//                                            'BUTTON_CLASS' => 'btn btn-default ' . $buttonSizeClass,
//                                            'DEFAULT_DISPLAY' => true,
//                                            'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
//                                        ),
//                                        $component,
//                                        array('HIDE_ICONS' => 'Y')
//                                    );
//                                }
//                                ?>
                        <!--                                <a class="btn btn-link --><?php //= $buttonSizeClass ?><!--"-->
                        <!--                                   id="--><?php //= $itemIds['NOT_AVAILABLE_MESS'] ?><!--" href="javascript:void(0)" rel="nofollow">-->
                        <!--                                    --><?php //= $arParams['MESS_NOT_AVAILABLE'] ?>
                        <!--                                </a>-->
                        <!--                            </div>-->
                        <!--                            --><? //
//                        }
                    } else {
                        if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                            ?>
                            <div class="product-item-button-container">
                                <?
                                if ($showSubscribe) {
                                    $APPLICATION->IncludeComponent(
                                        'bitrix:catalog.product.subscribe',
                                        '',
                                        array(
                                            'PRODUCT_ID' => $item['ID'],
                                            'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                                            'BUTTON_CLASS' => 'btn btn-default ' . $buttonSizeClass,
                                            'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
                                            'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                                        ),
                                        $component,
                                        array('HIDE_ICONS' => 'Y')
                                    );
                                }
                                ?>

                                <a class="btn btn-link <?= $buttonSizeClass ?>"
                                   id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)" rel="nofollow"
                                    <?= ($actualItem['CAN_BUY'] ? 'style="display: none;"' : '') ?>>
                                    <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                                </a>
                                <div id="<?= $itemIds['BASKET_ACTIONS'] ?>" <?= ($actualItem['CAN_BUY'] ? '' : 'style="display: none;"') ?>>
                                    <a class="btn btn-default <?= $buttonSizeClass ?>" id="<?= $itemIds['BUY_LINK'] ?>"
                                       href="javascript:void(0)" rel="nofollow">
                                        <?= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                                    </a>
                                </div>
                            </div>
                            <?
                        } else {
                            ?>
                            <div class="product-item-button-container">
                                <a class="btn btn-default <?= $buttonSizeClass ?>"
                                   href="<?= $item['DETAIL_PAGE_URL'] ?>">
                                    <?= $arParams['MESS_BTN_DETAIL'] ?>
                                </a>
                            </div>
                            <?
                        }
                    }
                    ?>
                </div>
                <?
                break;

            case 'props':
                if (!$haveOffers) {
//                    if (!empty($item['DISPLAY_PROPERTIES'])) {
//                        ?>
                    <!--                        <div class="catalog-item__param" data-entity="props-block">-->
                    <!--                            <div>-->
                    <!--                                --><? //
//                                foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty) {
//                                    ?>
                    <!--                                        <div class="block">-->
                    <!--                                            <span>--><?php //=$displayProperty['NAME']?><!--:</span>-->
                    <!--                                            <span>--><?php //=$displayProperty['VALUE']?><!--</span>-->
                    <!--                                        </div>-->
                    <!--                                    --><? //
//                                }
//                                ?>
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        --><? //
//                    }

                    if ($arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y' && !empty($item['PRODUCT_PROPERTIES'])) {
                        ?>
                        <div id="<?= $itemIds['BASKET_PROP_DIV'] ?>" style="display: none;">
                            <?
                            if (!empty($item['PRODUCT_PROPERTIES_FILL'])) {
                                foreach ($item['PRODUCT_PROPERTIES_FILL'] as $propID => $propInfo) {
                                    ?>
                                    <input type="hidden"
                                           name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propID ?>]"
                                           value="<?= htmlspecialcharsbx($propInfo['ID']) ?>">
                                    <?
                                    unset($item['PRODUCT_PROPERTIES'][$propID]);
                                }
                            }

                            if (!empty($item['PRODUCT_PROPERTIES'])) {
                                ?>
                                <table>
                                    <?
                                    foreach ($item['PRODUCT_PROPERTIES'] as $propID => $propInfo) {
                                        ?>
                                        <tr>
                                            <td><?= $item['PROPERTIES'][$propID]['NAME'] ?></td>
                                            <td>
                                                <?
                                                if (
                                                    $item['PROPERTIES'][$propID]['PROPERTY_TYPE'] === 'L'
                                                    && $item['PROPERTIES'][$propID]['LIST_TYPE'] === 'C'
                                                ) {
                                                    foreach ($propInfo['VALUES'] as $valueID => $value) {
                                                        ?>
                                                        <label>
                                                            <? $checked = $valueID === $propInfo['SELECTED'] ? 'checked' : ''; ?>
                                                            <input type="radio"
                                                                   name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propID ?>]"
                                                                   value="<?= $valueID ?>" <?= $checked ?>>
                                                            <?= $value ?>
                                                        </label>
                                                        <br/>
                                                        <?
                                                    }
                                                } else {
                                                    ?>
                                                    <select name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propID ?>]">
                                                        <?
                                                        foreach ($propInfo['VALUES'] as $valueID => $value) {
                                                            $selected = $valueID === $propInfo['SELECTED'] ? 'selected' : '';
                                                            ?>
                                                            <option value="<?= $valueID ?>" <?= $selected ?>>
                                                                <?= $value ?>
                                                            </option>
                                                            <?
                                                        }
                                                        ?>
                                                    </select>
                                                    <?
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?
                                    }
                                    ?>
                                </table>
                                <?
                            }
                            ?>
                        </div>
                        <?
                    }
                } else {
                    $showProductProps = !empty($item['DISPLAY_PROPERTIES']);
                    $showOfferProps = $arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && $item['OFFERS_PROPS_DISPLAY'];

                    if ($showProductProps || $showOfferProps) {
                        ?>
                        <div class="product-item-info-container product-item-hidden" data-entity="props-block">
                            <dl class="product-item-properties">
                                <?
                                if ($showProductProps) {
                                    foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty) {
                                        ?>
                                        <dt<?= (!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '') ?>>
                                            <?= $displayProperty['NAME'] ?>
                                        </dt>
                                        <dd<?= (!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '') ?>>
                                            <?= (is_array($displayProperty['DISPLAY_VALUE'])
                                                ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                                                : $displayProperty['DISPLAY_VALUE']) ?>
                                        </dd>
                                        <?
                                    }
                                }

                                if ($showOfferProps) {
                                    ?>
                                    <span id="<?= $itemIds['DISPLAY_PROP_DIV'] ?>" style="display: none;"></span>
                                    <?
                                }
                                ?>
                            </dl>
                        </div>
                        <?
                    }
                }

                break;

            case 'sku':
                if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && $haveOffers && !empty($item['OFFERS_PROP'])) {
                    ?>
                    <div id="<?= $itemIds['PROP_DIV'] ?>">
                        <?
                        foreach ($arParams['SKU_PROPS'] as $skuProperty) {
                            $propertyId = $skuProperty['ID'];
                            $skuProperty['NAME'] = htmlspecialcharsbx($skuProperty['NAME']);
                            if (!isset($item['SKU_TREE_VALUES'][$propertyId]))
                                continue;
                            ?>
                            <div class="product-item-info-container product-item-hidden" data-entity="sku-block">
                                <div class="product-item-scu-container" data-entity="sku-line-block">
                                    <?= $skuProperty['NAME'] ?>
                                    <div class="product-item-scu-block">
                                        <div class="product-item-scu-list">
                                            <ul class="product-item-scu-item-list">
                                                <?
                                                foreach ($skuProperty['VALUES'] as $value) {
                                                    if (!isset($item['SKU_TREE_VALUES'][$propertyId][$value['ID']]))
                                                        continue;

                                                    $value['NAME'] = htmlspecialcharsbx($value['NAME']);

                                                    if ($skuProperty['SHOW_MODE'] === 'PICT') {
                                                        ?>
                                                        <li class="product-item-scu-item-color-container"
                                                            title="<?= $value['NAME'] ?>"
                                                            data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>"
                                                            data-onevalue="<?= $value['ID'] ?>">
                                                            <div class="product-item-scu-item-color-block">
                                                                <div class="product-item-scu-item-color"
                                                                     title="<?= $value['NAME'] ?>"
                                                                     style="background-image: url('<?= $value['PICT']['SRC'] ?>');">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?
                                                    } else {
                                                        ?>
                                                        <li class="product-item-scu-item-text-container"
                                                            title="<?= $value['NAME'] ?>"
                                                            data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>"
                                                            data-onevalue="<?= $value['ID'] ?>">
                                                            <div class="product-item-scu-item-text-block">
                                                                <div class="product-item-scu-item-text"><?= $value['NAME'] ?></div>
                                                            </div>
                                                        </li>
                                                        <?
                                                    }
                                                }
                                                ?>
                                            </ul>
                                            <div style="clear: both;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?
                        }
                        ?>
                    </div>
                    <?
                    foreach ($arParams['SKU_PROPS'] as $skuProperty) {
                        if (!isset($item['OFFERS_PROP'][$skuProperty['CODE']]))
                            continue;

                        $skuProps[] = array(
                            'ID' => $skuProperty['ID'],
                            'SHOW_MODE' => $skuProperty['SHOW_MODE'],
                            'VALUES' => $skuProperty['VALUES'],
                            'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
                        );
                    }

                    unset($skuProperty, $value);

                    if ($item['OFFERS_PROPS_DISPLAY']) {
                        foreach ($item['JS_OFFERS'] as $keyOffer => $jsOffer) {
                            $strProps = '';

                            if (!empty($jsOffer['DISPLAY_PROPERTIES'])) {
                                foreach ($jsOffer['DISPLAY_PROPERTIES'] as $displayProperty) {
                                    $strProps .= '<dt>' . $displayProperty['NAME'] . '</dt><dd>'
                                        . (is_array($displayProperty['VALUE'])
                                            ? implode(' / ', $displayProperty['VALUE'])
                                            : $displayProperty['VALUE'])
                                        . '</dd>';
                                }
                            }

                            $item['JS_OFFERS'][$keyOffer]['DISPLAY_PROPERTIES'] = $strProps;
                        }
                        unset($jsOffer, $strProps);
                    }
                }

                break;
        }
    }
}

//if (
//    $arParams['DISPLAY_COMPARE']
//    && (!$haveOffers || $arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
//) {
//    ?>
<!--    <div class="product-item-compare-container">-->
<!--        <div class="product-item-compare">-->
<!--            <div class="checkbox">-->
<!--                <label id="--><?php //= $itemIds['COMPARE_LINK'] ?><!--">-->
<!--                    <input type="checkbox" data-entity="compare-checkbox">-->
<!--                    <span data-entity="compare-title">--><?php //= $arParams['MESS_BTN_COMPARE'] ?><!--</span>-->
<!--                </label>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    --><? //
//}
//?>
