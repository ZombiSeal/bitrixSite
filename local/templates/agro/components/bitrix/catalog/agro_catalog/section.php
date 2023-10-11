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

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

if (!isset($arParams['FILTER_VIEW_MODE']) || (string)$arParams['FILTER_VIEW_MODE'] == '')
    $arParams['FILTER_VIEW_MODE'] = 'VERTICAL';
$arParams['USE_FILTER'] = (isset($arParams['USE_FILTER']) && $arParams['USE_FILTER'] == 'Y' ? 'Y' : 'N');

$isVerticalFilter = ('Y' == $arParams['USE_FILTER'] && $arParams["FILTER_VIEW_MODE"] == "VERTICAL");
$isSidebar = ($arParams["SIDEBAR_SECTION_SHOW"] == "Y" && isset($arParams["SIDEBAR_PATH"]) && !empty($arParams["SIDEBAR_PATH"]));
$isFilter = ($arParams['USE_FILTER'] == 'Y');

if ($isFilter) {
    $arFilter = array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ACTIVE" => "Y",
        "GLOBAL_ACTIVE" => "Y",
    );
    if (0 < intval($arResult["VARIABLES"]["SECTION_ID"]))
        $arFilter["ID"] = $arResult["VARIABLES"]["SECTION_ID"];
    elseif ('' != $arResult["VARIABLES"]["SECTION_CODE"])
        $arFilter["=CODE"] = $arResult["VARIABLES"]["SECTION_CODE"];

    $obCache = new CPHPCache();
    if ($obCache->InitCache(36000, serialize($arFilter), "/iblock/catalog")) {
        $arCurSection = $obCache->GetVars();
    } elseif ($obCache->StartDataCache()) {
        $arCurSection = array();
        if (Loader::includeModule("iblock")) {
            $dbRes = CIBlockSection::GetList(array(), $arFilter, false, array("ID"));

            if (defined("BX_COMP_MANAGED_CACHE")) {
                global $CACHE_MANAGER;
                $CACHE_MANAGER->StartTagCache("/iblock/catalog");

                if ($arCurSection = $dbRes->Fetch())
                    $CACHE_MANAGER->RegisterTag("iblock_id_" . $arParams["IBLOCK_ID"]);

                $CACHE_MANAGER->EndTagCache();
            } else {
                if (!$arCurSection = $dbRes->Fetch())
                    $arCurSection = array();
            }
        }
        $obCache->EndDataCache($arCurSection);
    }
    if (!isset($arCurSection))
        $arCurSection = array();
}
?>
<div class="catalog-filter">
    <div class="catalog-filter__top">
        <div class="container">
            <div class="param">
                <div class="catalog-filter__top-text"><span class="dekstop">ПОДБОР МОТОБЛОКА ПО</span><span
                            class="mob">ПОДБОР ПО</span></div>
                <div class="catalog-filter__top-btn" data-filter="parametr"><span>ПАРАМЕТРАМ</span>
                    <svg class="sprite-svg ar">
                        <use xlink:href="./images/sprite/sprite.svg#a-r-black"></use>
                    </svg>
                    <svg class="sprite-svg close">
                        <use xlink:href="./images/sprite/sprite.svg#close"></use>
                    </svg>
                </div>
                <div class="catalog-filter__top-text"><span class="dekstop">или по</span><span class="mob">или</span>
                </div>
                <div class="catalog-filter__top-btn" data-filter="rasrochka"><span>РАССРОЧКЕ</span>
                    <svg class="sprite-svg ar">
                        <use xlink:href="./images/sprite/sprite.svg#a-r-black"></use>
                    </svg>
                    <svg class="sprite-svg close">
                        <use xlink:href="./images/sprite/sprite.svg#close"></use>
                    </svg>
                </div>
            </div>
            <div class="sort"><span>Сортировка:</span>
                <select class="styler">
                    <option>Популярное</option>
                    <option>Новые</option>
                    <option>На акции</option>
                </select>
            </div>
        </div>
    </div>
    <div class="catalog-filter__bottom">
        <div class="container">
            <div class="catalog-filter__bottom-param" data-filter="parametr">
                <div class="catalog-filter__maker">
                    <div class="catalog-filter__maker-zag">Производитель</div>
                    <div class="catalog-filter__maker-block">
                        <ul>
                            <li class="country"><img src="./images/svg/flag-russia.svg"><span>Россия</span>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Авангард (3)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Нева (10)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Агат (1)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Ока (2)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                </label>
                            </li>
                            <li class="country"><img src="./images/svg/flag-russia.svg"><span>Россия</span>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Авангард (3)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Нева (10)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Агат (1)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Ока (2)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                </label>
                            </li>
                            <li class="country">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#flag-bel"></use>
                                </svg>
                                <span>Россия</span>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Авангард (3)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Нева (10)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Агат (1)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Ока (2)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                </label>
                            </li>
                            <li class="country">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#flag-china"></use>
                                </svg>
                                <span>Китай</span>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Авангард (3)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Нева (10)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Агат (1)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Ока (2)</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                </label>
                            </li>
                            <!--li.country-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#flag-china")-->
                            <!--    span Китай-->
                            <!--li-->
                            <!--    label-->
                            <!--        input(class='styler' type='checkbox')-->
                            <!--        span Авангард (3)-->
                            <!--li-->
                            <!--    label-->
                            <!--        input(class='styler' type='checkbox')-->
                            <!--        span Нева (10)-->
                            <!--li-->
                            <!--    label-->
                            <!--        input(class='styler' type='checkbox')-->
                            <!--        span Агат (1)-->
                            <!--li-->
                            <!--    label-->
                            <!--        input(class='styler' type='checkbox')-->
                            <!--        span Ока (2)-->
                            <!--li-->
                            <!--    label-->
                            <!--        input(class='styler' type='checkbox')-->
                            <!--        span Тарпан (1)-->
                        </ul>
                    </div>
                </div>
                <div class="catalog-filter__container">
                    <div class="catalog-filter__input catalog-filter__block"><span>Цена:</span>
                        <div>
                            <input type="text" placeholder="От 2000р">
                            <input type="text" placeholder="До 200.000р">
                        </div>
                    </div>
                    <div class="catalog-filter__select catalog-filter__block"><span
                                class="tooltip-span">Мощность(лс):<span
                                    class="quest">?</span>
                      <div class="tooltip-ico"><span>Разница в силе тяги и мощности</span></div></span>
                        <div>
                            <select class="styler">
                                <option>750 л.с.</option>
                                <option>7500 л.с.</option>
                                <option>75000 л.с.</option>
                                <option>750000 л.с.</option>
                                <option>7500000 л.с.</option>
                            </select>
                        </div>
                    </div>
                    <div class="catalog-filter__check catalog-filter__block"><span>Тип двигателя:</span>
                        <div>
                            <label>
                                <input class="styler" type="checkbox"><span>Бензиновый</span>
                            </label>
                            <label>
                                <input class="styler" type="checkbox"><span>Дизельный</span>
                            </label>
                        </div>
                    </div>
                    <div class="catalog-filter__input catalog-filter__block"><span>Вес (кг):</span>
                        <div>
                            <input type="text" placeholder="От 75 кг">
                            <input type="text" placeholder="До 100 кг">
                        </div>
                    </div>
                    <div class="catalog-filter__variant catalog-filter__block"><span
                                class="tooltip-span">Дифференциал:<span
                                    class="quest">?
                        <div class="tooltip-ico"><span>Разница в силе тяги и мощности</span></div></span></span>
                        <div class="filter__variant__block">
                            <div class="filter__variant__block-name"><span>5 варинатов</span></div>
                            <ul class="filter__variant__block-ul">
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Ока (2)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Мотор Сиг (1)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Ока (2)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="catalog-filter__check catalog-filter__block"><span>Тип корпуса:</span>
                        <div>
                            <label>
                                <input class="styler" type="checkbox"><span>Мотоблок</span>
                            </label>
                            <label>
                                <input class="styler" type="checkbox"><span>Культиватор</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="catalog-filter__btns">
                    <label class="presence--btn">
                        <input class="styler" type="checkbox"><span>В наличии на складе</span>
                    </label>
                    <button class="reset for--deks">
                        <svg class="sprite-svg">
                            <use xlink:href="./images/sprite/sprite.svg#close"></use>
                        </svg>
                        Сбросить параметры фильтра
                    </button>
                    <button class="reset for--mob">
                        <svg class="sprite-svg">
                            <use xlink:href="./images/sprite/sprite.svg#close"></use>
                        </svg>
                        Сбросить фильтры
                    </button>
                    <button class="catalog-filter--sbmt">Показать все результаты мотоблоки (25)</button>
                </div>
            </div>
            <div class="catalog-filter__bottom-param catalog-filter__bottom-rasroch"
                 data-filter="rasrochka">
                <div class="catalog-filter__rasr">
                    <div class="catalog-filter__rasr-zag">Калькулятор беспроцентной рассрочки на мотоблок
                    </div>
                    <div class="catalog-filter__input catalog-filter__block single">
                        <span>Я готов платить</span>
                        <div>
                            <input class="num--inset" type="text" placeholder="До  200.000 рублей">
                        </div>
                        <span>в месяц</span>
                    </div>
                    <div class="catalog-filter__input catalog-filter__block single">
                        <span>На протяжении</span>
                        <div>
                            <input class="num--inset" type="text" placeholder="От 2 месяцев"><span
                                    class="absolute">Макс. 18 месяцев</span>
                        </div>
                        <span>месяцев</span>
                    </div>
                    <button class="reset">
                        <svg class="sprite-svg">
                            <use xlink:href="./images/sprite/sprite.svg#close"></use>
                        </svg>
                        Сбросить параметры рассрочки
                    </button>
                </div>
                <div class="catalog-filter__btns">
                    <button class="catalog-filter--sbmt">ПОДОБРАТЬ С УЧЕТОМ РАССРОЧКИ</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="filter-param__active">
        <div>Бензиновые
            <svg class="sprite-svg">
                <use xlink:href="./images/sprite/sprite.svg#close"></use>
            </svg>
        </div>
        <div>Дизельные
            <svg class="sprite-svg">
                <use xlink:href="./images/sprite/sprite.svg#close"></use>
            </svg>
        </div>
        <div>Тяжелые
            <svg class="sprite-svg">
                <use xlink:href="./images/sprite/sprite.svg#close"></use>
            </svg>
        </div>
        <div>Вал отбора мощности
            <svg class="sprite-svg">
                <use xlink:href="./images/sprite/sprite.svg#close"></use>
            </svg>
        </div>
    </div>

    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:catalog.section",
        "agro_section",
        array(
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
            "ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
            "ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_FIELD2"],
            "ELEMENT_SORT_ORDER2" => $arParams["ELEMENT_SORT_ORDER2"],
            "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
            "PROPERTY_CODE_MOBILE" => $arParams["LIST_PROPERTY_CODE_MOBILE"],
            "META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
            "META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
            "BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
            "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
            "INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
            "BASKET_URL" => $arParams["BASKET_URL"],
            "ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
            "PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
            "SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
            "PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
            "PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
            "FILTER_NAME" => $arParams["FILTER_NAME"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_FILTER" => $arParams["CACHE_FILTER"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "SET_TITLE" => $arParams["SET_TITLE"],
            "MESSAGE_404" => $arParams["~MESSAGE_404"],
            "SET_STATUS_404" => $arParams["SET_STATUS_404"],
            "SHOW_404" => $arParams["SHOW_404"],
            "FILE_404" => $arParams["FILE_404"],
            "DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
            "PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
            "LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
            "PRICE_CODE" => $arParams["~PRICE_CODE"],
            "USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
            "SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

            "PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
            "USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
            "ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
            "PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
            "PRODUCT_PROPERTIES" => (isset($arParams["PRODUCT_PROPERTIES"]) ? $arParams["PRODUCT_PROPERTIES"] : []),

            "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
            "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
            "PAGER_TITLE" => $arParams["PAGER_TITLE"],
            "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
            "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
            "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
            "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
            "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
            "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
            "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
            "LAZY_LOAD" => $arParams["LAZY_LOAD"],
            "MESS_BTN_LAZY_LOAD" => $arParams["~MESS_BTN_LAZY_LOAD"],
            "LOAD_ON_SCROLL" => $arParams["LOAD_ON_SCROLL"],

            "OFFERS_CART_PROPERTIES" => (isset($arParams["OFFERS_CART_PROPERTIES"]) ? $arParams["OFFERS_CART_PROPERTIES"] : []),
            "OFFERS_FIELD_CODE" => $arParams["LIST_OFFERS_FIELD_CODE"],
            "OFFERS_PROPERTY_CODE" => (isset($arParams["LIST_OFFERS_PROPERTY_CODE"]) ? $arParams["LIST_OFFERS_PROPERTY_CODE"] : []),
            "OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
            "OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
            "OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
            "OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
            "OFFERS_LIMIT" => (isset($arParams["LIST_OFFERS_LIMIT"]) ? $arParams["LIST_OFFERS_LIMIT"] : 0),

            "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
            "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
            "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
            "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["element"],
            "USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
            'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
            'CURRENCY_ID' => $arParams['CURRENCY_ID'],
            'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
            'HIDE_NOT_AVAILABLE_OFFERS' => $arParams["HIDE_NOT_AVAILABLE_OFFERS"],

            'LABEL_PROP' => $arParams['LABEL_PROP'],
            'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
            'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
            'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
            'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
            'PRODUCT_BLOCKS_ORDER' => $arParams['LIST_PRODUCT_BLOCKS_ORDER'],
            'PRODUCT_ROW_VARIANTS' => $arParams['LIST_PRODUCT_ROW_VARIANTS'],
            'ENLARGE_PRODUCT' => $arParams['LIST_ENLARGE_PRODUCT'],
            'ENLARGE_PROP' => isset($arParams['LIST_ENLARGE_PROP']) ? $arParams['LIST_ENLARGE_PROP'] : '',
            'SHOW_SLIDER' => $arParams['LIST_SHOW_SLIDER'],
            'SLIDER_INTERVAL' => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
            'SLIDER_PROGRESS' => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',

            'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
            'OFFER_TREE_PROPS' => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
            'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
            'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
            'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
            'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
            'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
            'MESS_SHOW_MAX_QUANTITY' => (isset($arParams['~MESS_SHOW_MAX_QUANTITY']) ? $arParams['~MESS_SHOW_MAX_QUANTITY'] : ''),
            'RELATIVE_QUANTITY_FACTOR' => (isset($arParams['RELATIVE_QUANTITY_FACTOR']) ? $arParams['RELATIVE_QUANTITY_FACTOR'] : ''),
            'MESS_RELATIVE_QUANTITY_MANY' => (isset($arParams['~MESS_RELATIVE_QUANTITY_MANY']) ? $arParams['~MESS_RELATIVE_QUANTITY_MANY'] : ''),
            'MESS_RELATIVE_QUANTITY_FEW' => (isset($arParams['~MESS_RELATIVE_QUANTITY_FEW']) ? $arParams['~MESS_RELATIVE_QUANTITY_FEW'] : ''),
            'MESS_BTN_BUY' => (isset($arParams['~MESS_BTN_BUY']) ? $arParams['~MESS_BTN_BUY'] : ''),
            'MESS_BTN_ADD_TO_BASKET' => (isset($arParams['~MESS_BTN_ADD_TO_BASKET']) ? $arParams['~MESS_BTN_ADD_TO_BASKET'] : ''),
            'MESS_BTN_SUBSCRIBE' => (isset($arParams['~MESS_BTN_SUBSCRIBE']) ? $arParams['~MESS_BTN_SUBSCRIBE'] : ''),
            'MESS_BTN_DETAIL' => (isset($arParams['~MESS_BTN_DETAIL']) ? $arParams['~MESS_BTN_DETAIL'] : ''),
            'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE'] ?? '',
            'MESS_NOT_AVAILABLE_SERVICE' => $arParams['~MESS_NOT_AVAILABLE_SERVICE'] ?? '',
            'MESS_BTN_COMPARE' => (isset($arParams['~MESS_BTN_COMPARE']) ? $arParams['~MESS_BTN_COMPARE'] : ''),

            'USE_ENHANCED_ECOMMERCE' => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
            'DATA_LAYER_NAME' => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
            'BRAND_PROPERTY' => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),

            'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
            "ADD_SECTIONS_CHAIN" => "N",
            'ADD_TO_BASKET_ACTION' => $basketAction,
            'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
            'COMPARE_PATH' => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['compare'],
            'COMPARE_NAME' => $arParams['COMPARE_NAME'],
            'USE_COMPARE_LIST' => 'Y',
            'BACKGROUND_IMAGE' => (isset($arParams['SECTION_BACKGROUND_IMAGE']) ? $arParams['SECTION_BACKGROUND_IMAGE'] : ''),
            'COMPATIBLE_MODE' => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : ''),
            'DISABLE_INIT_JS_IN_COMPONENT' => (isset($arParams['DISABLE_INIT_JS_IN_COMPONENT']) ? $arParams['DISABLE_INIT_JS_IN_COMPONENT'] : '')
        ),
        $component
    );
    ?>


    <div class="pagination"><a class="pagination__prev" href="#"><img src="./images/svg/ar-l-pag.svg">
            <div class="action-button__circles">
                <svg class="action-button__circle action-button__circle--base" height="30" width="30">
                    <circle cx="15" cy="15" r="14"></circle>
                </svg>
                <svg class="action-button__circle action-button__circle--fill" height="30" width="30">
                    <circle cx="15" cy="15" r="14"></circle>
                </svg>
            </div>
        </a>
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a class="active" href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">8</a></li>
        </ul>
        <a class="pagination__next" href="#"><img src="./images/svg/ar-l-pag.svg">
            <div class="action-button__circles">
                <svg class="action-button__circle action-button__circle--base" height="30" width="30">
                    <circle cx="15" cy="15" r="14"></circle>
                </svg>
                <svg class="action-button__circle action-button__circle--fill" height="30" width="30">
                    <circle cx="   15" cy="15" r="14"></circle>
                </svg>
            </div>
        </a>
    </div>
</div>
