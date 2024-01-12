<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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
$this->setFrameMode(true);

if(!isset($_GET['type'])) {
    $currentUrl = $_SERVER['REQUEST_URI'];
    $newUrl = $currentUrl . '?' . http_build_query(['type' => 'all']);
    vr($newUrl);
    header('Location: ' . $newUrl);
};

$types = $arResult['TABS'];

$cache = \Bitrix\Main\Application::getInstance()->getManagedCache();
$cacheId = "ibock_id_" . $arParams['IBLOCK_ID'] ;
if ($cache->read(36000000, $cacheId)) {
    $preview = $cache->get($cacheId); // достаем переменные из кеша
} else {
    $arSelect = ['ID', 'NAME', 'PREVIEW_TEXT', 'IBLOCK_ID', 'IBLOCK_TYPE_ID', 'PROPERTY_TYPE', 'DETAIL_PAGE_URL'];
    $arFilter = ["IBLOCK_ID"=>$arParams['IBLOCK_ID'], "ACTIVE"=>"Y", "!=PROPERTY_PREVIEW" => false];
    $res = CIBlockElement::GetList(["DATE_ACTIVE_FROM" => 'desc'], $arFilter, false, ["nTopCount" => 1], $arSelect);
    if($elem = $res->GetNext()) $preview = $elem;
    $cache->set($cacheId, $preview);
}

global $filter;
switch ($_GET['type']) {
    case 'all':
        $filter = ['!=ID' =>  $preview['ID']];
        break;
    case 'akcii':
        $filter = ['PROPERTY_TYPE' => $types['akcii']['ID'], '!=ID' => $preview['ID']];
        break;
    case 'article':
        $filter = ['PROPERTY_TYPE' => $types['article']['ID'], '!=ID' => $preview['ID']];
        break;
    case 'news':
        $filter = ['PROPERTY_TYPE' => $types['news']['ID'], '!=ID' => $preview['ID']];
        break;
}

?>


<section>
    <?php if (!empty($types)): ?>
        <div class="news tabs">
            <div class="container">
                <ul class="tabs-nav">
                    <?php foreach ($types as $type):?>
                        <a class="tabs__li <?=($_GET['type'] === $type['CODE']) ? 'active' : '';?>" data-tab="<?= $type['CODE'] ?>"
                           href="<?= $type['LINK'] ?>"><?= $type['VALUE'] ?></a>
                    <?php
                    endforeach; ?>
                </ul>
            </div>
            <div class="tabs-content active">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "agro_news",
                    [
                        "PREVIEW" => $preview,
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "NEWS_COUNT" => empty($_GET['PAGEN']) ? 7 : 9,
                        "SORT_BY1" => $arParams["SORT_BY1"],
                        "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                        "SORT_BY2" => $arParams["SORT_BY2"],
                        "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                        "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                        "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                        "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
                        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                        "SET_TITLE" => $arParams["SET_TITLE"],
                        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                        "MESSAGE_404" => $arParams["MESSAGE_404"],
                        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                        "SHOW_404" => $arParams["SHOW_404"],
                        "FILE_404" => $arParams["FILE_404"],
                        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                        "CACHE_TIME" => $arParams["CACHE_TIME"],
                        "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                        "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                        "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                        "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                        "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                        "FILTER_NAME" => 'filter',
                        "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                        "CHECK_DATES" => $arParams["CHECK_DATES"],
                    ],
                    $component,
                    ['HIDE_ICONS' => 'Y']
                );
                ?>
            </div>
        </div>
    <?php else: ?>
        <p>Нет активных новостей</p>
    <?php endif; ?>
</section>


