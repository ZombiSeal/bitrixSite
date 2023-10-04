<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <article>
        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","agro_breadcrumb",Array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => "s1"
                        )
                    );?>
                </div>
                <div class="zag_main">
                    <h1> Контакты</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="contact tabs">
                <div class="container">
                    <ul class="tabs-nav">
                        <li class="tabs__li active" data-tab="shop">Магазины</li>
                        <li class="tabs__li" data-tab="service">Сервисный центр/Запчасти</li>
                        <li class="tabs__li" data-tab="office">Склад/Офис</li>
                    </ul>
                </div>
                <div class="tabs-content active" data-tab="shop">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:map.yandex.system",
                        "agro_map",
                        Array(
                            "CONTROLS" => array(),
                            "INIT_MAP_TYPE" => "MAP",
                            "INIT_MAP_LAT" => 53.902287,
                            "INIT_MAP_LON" => 27.561824,
                            "INIT_MAP_SCALE" => 12,
                            "MAP_HEIGHT" => "650",
                            "MAP_WIDTH" => "100%",
                            "OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING"),
                            "MAP_ID" => "map_shop",
                            "IBLOCK_ID" => CONTACT_IBLOCK_ID,
                            "SECTION_ID" => SHOP_SECTION_ID
                        )
                    );?>
                    <div class="container">
                        <div class="location-block">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "agro_adress",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "Y",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "3600",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => CONTACT_IBLOCK_ID,
                                    "IBLOCK_TYPE" => "FAQ",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "N",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "20",
                                    "PAGER_BASE_LINK" => "",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_PARAMS_NAME" => "arrPager",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => "",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => SHOP_SECTION_ID,
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "DESCRIPTION",
                                        2 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "agro_faq"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="tabs-content" data-tab="service">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:map.yandex.system",
                        "agro_map",
                        Array(
                            "CONTROLS" => array(),
                            "INIT_MAP_TYPE" => "MAP",
                            "INIT_MAP_LAT" => 53.902287,
                            "INIT_MAP_LON" => 27.561824,
                            "INIT_MAP_SCALE" => 12,
                            "MAP_HEIGHT" => "650",
                            "MAP_WIDTH" => "100%",
                            "OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING"),
                            "MAP_ID" => "map_service",
                            "IBLOCK_ID" => CONTACT_IBLOCK_ID,
                            "SECTION_ID" => SERVICE_SECTION_ID
                        )
                    );?>
                    <div class="container">
                        <div class="location-block">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "agro_adress",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "Y",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "3600",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => CONTACT_IBLOCK_ID,
                                    "IBLOCK_TYPE" => "FAQ",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "N",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "20",
                                    "PAGER_BASE_LINK" => "",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_PARAMS_NAME" => "arrPager",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => "",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => SERVICE_SECTION_ID,
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "DESCRIPTION",
                                        2 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "agro_faq"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="tabs-content" data-tab="office">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:map.yandex.system",
                        "agro_map",
                        Array(
                            "CONTROLS" => array(),
                            "INIT_MAP_TYPE" => "MAP",
                            "INIT_MAP_LAT" => 53.902287,
                            "INIT_MAP_LON" => 27.561824,
                            "INIT_MAP_SCALE" => 12,
                            "MAP_HEIGHT" => "650",
                            "MAP_WIDTH" => "100%",
                            "OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING"),
                            "MAP_ID" => "map_office",
                            "IBLOCK_ID" => CONTACT_IBLOCK_ID,
                            "SECTION_ID" => OFFICE_SECTION_ID
                        )
                    );?>
                    <div class="container">
                        <div class="location-block">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "agro_adress",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "Y",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "3600",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => CONTACT_IBLOCK_ID,
                                    "IBLOCK_TYPE" => "FAQ",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "N",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "20",
                                    "PAGER_BASE_LINK" => "",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_PARAMS_NAME" => "arrPager",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => "",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => OFFICE_SECTION_ID,
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "DESCRIPTION",
                                        2 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "COMPONENT_TEMPLATE" => "agro_faq"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="contact--bg">
                <div class="form-opt">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:form",
                        "agro_form",
                        Array(
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "CHAIN_ITEM_LINK" => "",
                            "CHAIN_ITEM_TEXT" => "",
                            "EDIT_ADDITIONAL" => "N",
                            "EDIT_STATUS" => "Y",
                            "IGNORE_CUSTOM_TEMPLATE" => "N",
                            "NAME_TEMPLATE" => "",
                            "NOT_SHOW_FILTER" => array("",""),
                            "NOT_SHOW_TABLE" => array("",""),
                            "RESULT_ID" => $_REQUEST["RESULT_ID"],
                            "SEF_MODE" => "N",
                            "SHOW_ADDITIONAL" => "Y",
                            "SHOW_ANSWER_VALUE" => "N",
                            "SHOW_EDIT_PAGE" => "N",
                            "SHOW_LIST_PAGE" => "N",
                            "SHOW_STATUS" => "Y",
                            "SHOW_VIEW_PAGE" => "N",
                            "START_PAGE" => "new",
                            "SUCCESS_URL" => "",
                            "USE_EXTENDED_ERRORS" => "N",
                            "VARIABLE_ALIASES" => Array("action"=>"action"),
                            "WEB_FORM_ID" => "1"
                        )
                    );?>
                </div>
            </div>
        </section>
    </article>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>