<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
$additionalProducts = getApplicationBasketItems();
?>
<article>
    <section>
        <div class="container">
            <div class="breadcrumbs">
                <div class="bx-breadcrumb">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "agro_breadcrumb",
                        array(
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0"
                        )
                    ); ?>
                </div>
            </div>
            <div class="zag_main">
                <h1><?= $APPLICATION->ShowTitle(); ?></h1>
            </div>
        </div>
    </section>
    <? $APPLICATION->IncludeComponent(
        "bitrix:sale.basket.basket",
        "agro_basket",
        array(
            "ACTION_VARIABLE" => "basketAction",
            "ADDITIONAL_PICT_PROP_10" => "-",
            "AUTO_CALCULATION" => "Y",
            "BASKET_IMAGES_SCALING" => "adaptive",
            "COLUMNS_LIST_EXT" => array(
                0 => "PREVIEW_PICTURE",
                1 => "DISCOUNT",
                2 => "WEIGHT",
                3 => "DELETE",
                4 => "SUM",
            ),
            "COLUMNS_LIST_MOBILE" => array(
                0 => "PREVIEW_PICTURE",
                1 => "DISCOUNT",
                2 => "DELETE",
                3 => "DELAY",
                4 => "TYPE",
                5 => "SUM",
            ),
            "COMPATIBLE_MODE" => "Y",
            "CORRECT_RATIO" => "Y",
            "DEFERRED_REFRESH" => "Y",
            "DISCOUNT_PERCENT_POSITION" => "bottom-right",
            "DISPLAY_MODE" => "extended",
            "EMPTY_BASKET_HINT_PATH" => "/",
            "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
            "GIFTS_CONVERT_CURRENCY" => "Y",
            "GIFTS_HIDE_BLOCK_TITLE" => "N",
            "GIFTS_HIDE_NOT_AVAILABLE" => "N",
            "GIFTS_MESS_BTN_BUY" => "Выбрать",
            "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
            "GIFTS_PAGE_ELEMENT_COUNT" => "4",
            "GIFTS_PLACE" => "BOTTOM",
            "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
            "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
            "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
            "GIFTS_SHOW_OLD_PRICE" => "Y",
            "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
            "HIDE_COUPON" => "N",
            "LABEL_PROP" => "",
            "PATH_TO_ORDER" => "/basket/order/",
            "PRICE_DISPLAY_MODE" => "Y",
            "PRICE_VAT_SHOW_VALUE" => "N",
            "PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
            "QUANTITY_FLOAT" => "Y",
            "SET_TITLE" => "Y",
            "SHOW_DISCOUNT_PERCENT" => "Y",
            "SHOW_FILTER" => "N",
            "SHOW_RESTORE" => "N",
            "TEMPLATE_THEME" => "blue",
            "TOTAL_BLOCK_DISPLAY" => array(
                0 => "top",
            ),
            "USE_DYNAMIC_SCROLL" => "Y",
            "USE_ENHANCED_ECOMMERCE" => "N",
            "USE_GIFTS" => "Y",
            "USE_PREPAYMENT" => "N",
            "USE_PRICE_ANIMATION" => "Y",
            "COMPONENT_TEMPLATE" => "agro_basket"
        ),
        false
    ); ?>
    <?php if (!empty($additionalProducts)): ?>
        <section>
            <div class="extra-block">
                <div class="container">
                    <?php
                    global $addFilter;
                    $addFilter = ['ID' => $additionalProducts];
                    $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section",
                        "agro_from_category",
                        array(
                            "TITLE" => "Этот товар <b>дополняют:</b>",
                            "ACTION_VARIABLE" => "action",
                            "ADD_PICT_PROP" => "-",
                            "ADD_PROPERTIES_TO_BASKET" => "Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "ADD_TO_BASKET_ACTION" => "ADD",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BACKGROUND_IMAGE" => "-",
                            "BASKET_URL" => "/personal/basket.php",
                            "BROWSER_TITLE" => "-",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPATIBLE_MODE" => "Y",
                            "CONVERT_CURRENCY" => "Y",
                            "CURRENCY_ID" => "BYN",
                            "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                            "DETAIL_URL" => "",
                            "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_COMPARE" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "ELEMENT_SORT_FIELD" => "sort",
                            "ELEMENT_SORT_FIELD2" => "id",
                            "ELEMENT_SORT_ORDER" => "asc",
                            "ELEMENT_SORT_ORDER2" => "desc",
                            "ENLARGE_PRODUCT" => "STRICT",
                            "FILTER_NAME" => "addFilter",
                            "HIDE_NOT_AVAILABLE" => "N",
                            "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                            "IBLOCK_ID" => CATALOG_IBLOCK_ID,
                            "IBLOCK_TYPE" => "catalog",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "LABEL_PROP" => "",
                            "LAZY_LOAD" => "N",
                            "LINE_ELEMENT_COUNT" => "3",
                            "LOAD_ON_SCROLL" => "N",
                            "MESSAGE_404" => "",
                            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                            "MESS_BTN_BUY" => "Купить",
                            "MESS_BTN_DETAIL" => "Подробнее",
                            "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                            "MESS_BTN_SUBSCRIBE" => "Подписаться",
                            "MESS_NOT_AVAILABLE" => "Нет в наличии",
                            "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "OFFERS_LIMIT" => "5",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "agro_pagenav",
                            "PAGER_TITLE" => "Товары",
                            "PAGE_ELEMENT_COUNT" => "6",
                            "PARTIAL_PRODUCT_PROPERTIES" => "N",
                            "PRICE_CODE" => array(
                                0 => "BASE",
                            ),
                            "PRICE_VAT_INCLUDE" => "Y",
                            "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                            "PRODUCT_ID_VARIABLE" => "id",
                            "PRODUCT_PROPS_VARIABLE" => "prop",
                            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                            "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                            "PRODUCT_SUBSCRIPTION" => "Y",
                            "PROPERTY_CODE_MOBILE" => "",
                            "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                            "RCM_TYPE" => "personal",
                            "SECTION_CODE" => "",
                            "SECTION_CODE_PATH" => "",
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_ID_VARIABLE" => "SECTION_ID",
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SEF_MODE" => "N",
                            "SEF_RULE" => "",
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SHOW_ALL_WO_SECTION" => "N",
                            "SHOW_CLOSE_POPUP" => "N",
                            "SHOW_DISCOUNT_PERCENT" => "N",
                            "SHOW_FROM_SECTION" => "N",
                            "SHOW_MAX_QUANTITY" => "N",
                            "SHOW_OLD_PRICE" => "N",
                            "SHOW_PRICE_COUNT" => "1",
                            "SHOW_SLIDER" => "Y",
                            "SLIDER_INTERVAL" => "3000",
                            "SLIDER_PROGRESS" => "N",
                            "TEMPLATE_THEME" => "blue",
                            "USE_ENHANCED_ECOMMERCE" => "N",
                            "USE_MAIN_ELEMENT_SECTION" => "N",
                            "USE_PRICE_COUNT" => "N",
                            "USE_PRODUCT_QUANTITY" => "N",
                            "COMPONENT_TEMPLATE" => "agro_section"
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</article>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
