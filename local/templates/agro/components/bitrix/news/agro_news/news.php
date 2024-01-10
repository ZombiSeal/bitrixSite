<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
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
$types = getNewsType();
?>


<section>
    <div class="news tabs">
        <div class="container">
            <ul class="tabs-nav">
                <li class="tabs__li active"  data-tab="all">Все материалы</li>
                <?php if (!empty($types['types'])):
                    foreach ($types['types'] as $type):
                        ?>
                        <li class="tabs__li" data-tab="<?= $type['CODE'] ?>"><?= $type['VALUE'] ?></li>
                    <?php
                    endforeach;
                endif; ?>

            </ul>
        </div>

        <div class="tabs-content active" data-tab="all">
            <?php
            global $filterAll;
            $filterAll = ['!=PROPERTY_PREVIEW' => 43];
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "agro_news",
                [
                        "TAB" => "all",
                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                    "NEWS_COUNT" => 7,
                    "SORT_BY1" => $arParams["SORT_BY1"],
                    "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                    "SORT_BY2" => $arParams["SORT_BY2"],
                    "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                    "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                    "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                    "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                    "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                    "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
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
                    "FILTER_NAME" => 'filterAll',
                    "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                    "CHECK_DATES" => $arParams["CHECK_DATES"],
                ],
                $component,
                ['HIDE_ICONS' => 'Y']
            ); ?>
<!--            <div class="main-article">-->
<!--                <div class="container">-->
<!--                    <div class="article-item article-item--akcii">-->
<!--                        <div class="article-item__top"><a class="article-item__type" href="#">Акции</a>-->
<!--                            <div class="article-item__date">02 марта</div>-->
<!--                        </div>-->
<!--                        <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от российского «Тополя»</div>-->
<!--                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.</div><a class="article-item__link" href="#">Читать полностью-->
<!--                            <div class="arrow">-->
<!--                                <svg class="img">-->
<!--                                    <use xlink:href="./images/sprite/sprite.svg#a-r-gray"></use>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                    <div class="article-item article-item--article">-->
<!--                        <div class="article-item__top"><a class="article-item__type" href="#">Статьи</a>-->
<!--                            <div class="article-item__date">15 марта</div>-->
<!--                        </div>-->
<!--                        <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от российского «Тополя»</div>-->
<!--                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.</div><a class="article-item__link" href="#">Читать полностью-->
<!--                            <div class="arrow">-->
<!--                                <svg class="img">-->
<!--                                    <use xlink:href="./images/sprite/sprite.svg#a-r-gray"></use>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                    <div class="article-item article-item--news">-->
<!--                        <div class="article-item__top"><a class="article-item__type" href="#">Новости</a>-->
<!--                            <div class="article-item__date">22 марта</div>-->
<!--                        </div>-->
<!--                        <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от российского «Тополя»</div>-->
<!--                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.</div><a class="article-item__link" href="#">Читать полностью-->
<!--                            <div class="arrow">-->
<!--                                <svg class="img">-->
<!--                                    <use xlink:href="./images/sprite/sprite.svg#a-r-gray"></use>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                    <div class="article-item article-item--akcii article-item--main">-->
<!--                        <div class="article-item__top"><a class="article-item__type" href="#">Анонс</a></div>-->
<!--                        <div class="article-item__name">Черная пятница 2018</div>-->
<!--                        <div class="article-item__desc">Совсем скоро мы начинаем самую большую распродажу года - Чёрная пятница 2018. Распродажа начнется<strong>  в 23 часа 59 минут 21 ноября  </strong>и продлится<strong>   до 23 часов 59 минут 25 ноября 2018 г. Уровень скидок будет  составлять до 50%!  </strong></div><a class="article-item__link" href="#">Читать полностью-->
<!--                            <div class="arrow">-->
<!--                                <svg class="img">-->
<!--                                    <use xlink:href="./images/sprite/sprite.svg#a-r-gray"></use>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                    <div class="article-item article-item--news">-->
<!--                        <div class="article-item__top"><a class="article-item__type" href="#">Новости</a>-->
<!--                            <div class="article-item__date">22 марта</div>-->
<!--                        </div>-->
<!--                        <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от российского «Тополя»</div>-->
<!--                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.</div><a class="article-item__link" href="#">Читать полностью-->
<!--                            <div class="arrow">-->
<!--                                <svg class="img">-->
<!--                                    <use xlink:href="./images/sprite/sprite.svg#a-r-gray"></use>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                    <div class="article-item article-item--akcii">-->
<!--                        <div class="article-item__top"><a class="article-item__type" href="#">Акции</a>-->
<!--                            <div class="article-item__date">02 марта</div>-->
<!--                        </div>-->
<!--                        <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от российского «Тополя»</div>-->
<!--                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.</div><a class="article-item__link" href="#">Читать полностью-->
<!--                            <div class="arrow">-->
<!--                                <svg class="img">-->
<!--                                    <use xlink:href="./images/sprite/sprite.svg#a-r-gray"></use>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                    <div class="article-item article-item--article">-->
<!--                        <div class="article-item__top"><a class="article-item__type" href="#">Статьи</a>-->
<!--                            <div class="article-item__date">15 марта</div>-->
<!--                        </div>-->
<!--                        <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от российского «Тополя»</div>-->
<!--                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.</div><a class="article-item__link" href="#">Читать полностью-->
<!--                            <div class="arrow">-->
<!--                                <svg class="img">-->
<!--                                    <use xlink:href="./images/sprite/sprite.svg#a-r-gray"></use>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                    <div class="article-item article-item--news">-->
<!--                        <div class="article-item__top"><a class="article-item__type" href="#">Новости</a>-->
<!--                            <div class="article-item__date">22 марта</div>-->
<!--                        </div>-->
<!--                        <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от российского «Тополя»</div>-->
<!--                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.</div><a class="article-item__link" href="#">Читать полностью-->
<!--                            <div class="arrow">-->
<!--                                <svg class="img">-->
<!--                                    <use xlink:href="./images/sprite/sprite.svg#a-r-gray"></use>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                    <div class="pagination"><a class="pagination__prev" href="#"><img src="./images/svg/ar-l-pag.svg">-->
<!--                            <div class="action-button__circles">-->
<!--                                <svg class="action-button__circle action-button__circle--base" height="30" width="30">-->
<!--                                    <circle cx="15" cy="15" r="14"></circle>-->
<!--                                </svg>-->
<!--                                <svg class="action-button__circle action-button__circle--fill" height="30" width="30">-->
<!--                                    <circle cx="15" cy="15" r="14"></circle>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                        <ul>-->
<!--                            <li><a href="#">1</a></li>-->
<!--                            <li><a href="#">2</a></li>-->
<!--                            <li><a class="active" href="#">3</a></li>-->
<!--                            <li><a href="#">4</a></li>-->
<!--                            <li><a href="#">5</a></li>-->
<!--                            <li><a href="#">...</a></li>-->
<!--                            <li><a href="#">8</a></li>-->
<!--                        </ul><a class="pagination__next" href="#"><img src="./images/svg/ar-l-pag.svg">-->
<!--                            <div class="action-button__circles">-->
<!--                                <svg class="action-button__circle action-button__circle--base" height="30" width="30">-->
<!--                                    <circle cx="15" cy="15" r="14"></circle>-->
<!--                                </svg>-->
<!--                                <svg class="action-button__circle action-button__circle--fill" height="30" width="30">-->
<!--                                    <circle cx="   15" cy="15" r="14"></circle>-->
<!--                                </svg>-->
<!--                            </div></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <?php if (!empty($types['types'])):
            foreach ($types['types'] as $type):
                ?>
                <div class="tabs-content" data-tab="<?= $type['CODE'] ?>">
                    <?php
                        global $filter;
                        $filter = ['PROPERTY_TYPE' => $type['ID'], '!=PROPERTY_PREVIEW' => 43];
                    $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "agro_news",
                        [
                            "TAB" => $type['CODE'],
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "NEWS_COUNT" => $arParams["NEWS_COUNT"],
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
            <?php
            endforeach;
        endif; ?>


    </div>
</section>


