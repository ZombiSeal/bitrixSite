<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?><section>
<div class="container">
	<div class="breadcrumbs">
		<div class="bx-breadcrumb">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"agro_breadcrumb",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
		</div>
	</div>
	<div class="zag_main">
		<h1><?= $APPLICATION->ShowTitle(false); ?></h1>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "subtitle",
		"EDIT_TEMPLATE" => "standard.php"
	)
);?>
	</div>
</div>
 </section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"agro_news",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "agro_pagenav",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "j F",
		"LIST_FIELD_CODE" => array("",""),
		"LIST_PROPERTY_CODE" => array("PREVIEW","TYPE",""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "8",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "agro_pagenav",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/news/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_CODE#/","news"=>"","section"=>""),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
);?>
<!--<article>-->
<!--    <section>-->
<!--        <div class="container">-->
<!--            <div class="breadcrumbs">-->
<!--                <div class="bx-breadcrumb">-->
<!--                    --><?//$APPLICATION->IncludeComponent("bitrix:breadcrumb","agro_breadcrumb",Array(
//                            "START_FROM" => "0",
//                            "PATH" => "",
//                            "SITE_ID" => "s1"
//                        )
//                    );?>
<!--                </div>-->
<!--            </div>-->
<!--            <div class="zag_main">-->
<!--                <h1>Текстовая страница</h1>-->
<!--                --><?// $APPLICATION->IncludeComponent(
//                    "bitrix:main.include",
//                    "",
//                    array(
//                        "AREA_FILE_RECURSIVE" => "Y",
//                        "AREA_FILE_SHOW" => "page",
//                        "AREA_FILE_SUFFIX" => "subtitle",
//                        "EDIT_TEMPLATE" => "standard.php"
//                    )
//                ); ?>
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    <section>-->
<!--        <div class="container text-page clearfix">-->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text1",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--            <h3>Карты рассрочки:</h3><br>-->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text2",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text3",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text4",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text5",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text6",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text7",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text8",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:main.include",
//                "",
//                array(
//                    "AREA_FILE_RECURSIVE" => "Y",
//                    "AREA_FILE_SHOW" => "page",
//                    "AREA_FILE_SUFFIX" => "text9",
//                    "EDIT_TEMPLATE" => "standard.php"
//                )
//            ); ?>
<!---->
<!--        </div>-->
<!--    </section>-->
<!--</article>--><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>