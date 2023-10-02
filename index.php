<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <article>
    <section>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "agro_slider",
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
                "FIELD_CODE" => array("", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => SLIDER_IBLOCK_ID,
                "IBLOCK_TYPE" => "main",
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
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("", "DESCRIPTION", ""),
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
                "STRICT_SECTION_CHECK" => "N"
            )
        ); ?>
    </section>
    <section>
        <div class="main-catalog">
            <div class="container">
                <ul class="catalog-tabs">
                    <li class="catalog-tabs__li active" data-tab="novinki">

                        Новинки
                    </li>
                    <li class="catalog-tabs__li" data-tab="akcii">

                        Акции и скидки
                    </li>
                    <li class="catalog-tabs__li" data-tab="popular">

                        Популярные товары
                    </li>
                </ul>
                <div class="catalog-search">
                    <form>
                        <input type="text" placeholder="Поиск по названию товара или артиклю">
                        <input class="ico-search" type="submit">
                    </form>
                </div>
                <div class="catalog-container active" data-tab="novinki">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags novinki">

                                <div class="tooltip-ico">Новинки</div>
                            </div>
                            <div class="flags tehniche">

                                <div class="tooltip-ico">Гарантия 2 года</div>
                            </div>
                            <div class="flags one">

                                <div class="tooltip-ico">1-й поставщик</div>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая</div>
                                <div class="name">AL-KO Hightline 42.5 P-A</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                                <div class="block">Вес:3,1 кг</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price">
                                <!--span.current 780,00 руб.--><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico "><a class="catalog-item__ico-video" href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a class="catalog-item__ico-compare" href="#">

                                    <div class="tooltip-ico">В сравнении</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Купить в 1 клик</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">В корзине</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">

                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)">
                            <span
                                    class="bxhtmled-surrogate-inner">
                                <span class="bxhtmled-right-side-item-icon"></span>
                                <span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">

                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags novinki">

                                <div class="tooltip-ico">Новинки</div>
                            </div>
                            <div class="flags tehniche">

                                <div class="tooltip-ico">Гарантия 2 года</div>
                            </div>
                            <div class="flags one">

                                <div class="tooltip-ico">1-й поставщик</div>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая</div>
                                <div class="name">AL-KO Hightline 42.5 P-A</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                                <div class="block">Вес:3,1 кг</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price">
                                <!--span.current 780,00 руб.--><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico "><a class="catalog-item__ico-video" href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a class="catalog-item__ico-compare" href="#">

                                    <div class="tooltip-ico">В сравнении</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Купить в 1 клик</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">В корзине</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-container" data-tab="akcii">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">

                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags novinki">

                                <div class="tooltip-ico">Новинки</div>
                            </div>
                            <div class="flags tehniche">

                                <div class="tooltip-ico">Гарантия 2 года</div>
                            </div>
                            <div class="flags one">

                                <div class="tooltip-ico">1-й поставщик</div>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая</div>
                                <div class="name">AL-KO Hightline 42.5 P-A</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                                <div class="block">Вес:3,1 кг</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price">
                                <!--span.current 780,00 руб.--><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico "><a class="catalog-item__ico-video" href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a class="catalog-item__ico-compare" href="#">

                                    <div class="tooltip-ico">В сравнении</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Купить в 1 клик</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">В корзине</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">

                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-container" data-tab="popular">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                        </a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">

                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#" data-bg="url(/images/c3.png)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                            style="background-image:
                            url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"</a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">

                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#" data-bg="url(/images/c3.png)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>
                            style="background-image:
                            url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"</a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#" data-bg="url(/images/c3.png)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>/images/c2.png)"
                            style="background-image:
                            url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"</a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags novinki">

                                <div class="tooltip-ico">Новинки</div>
                            </div>
                            <div class="flags tehniche">

                                <div class="tooltip-ico">Гарантия 2 года</div>
                            </div>
                            <div class="flags one">

                                <div class="tooltip-ico">1-й поставщик</div>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая</div>
                                <div class="name">AL-KO Hightline 42.5 P-A</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                                <div class="block">Объём двигателя:4 м3</div>
                                <div class="block">Вес:3,1 кг</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price">
                                <!--span.current 780,00 руб.--><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico "><a class="catalog-item__ico-video" href="#">

                                    <div class="tooltip-ico">Видеозор</div>
                                </a><a class="catalog-item__ico-compare" href="#">

                                    <div class="tooltip-ico">В сравнении</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Купить в 1 клик</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">В корзине</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#" data-bg="url(/images/c3.png)"><span
                                    class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span
                                        class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"></span></span>/images/c2.png)"
                            style="background-image:
                            url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"</a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block">Мощность двигателя:27 лошадиные силы
                                </div>
                                <div class="block">Топливный бак (объем):208 литров</div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">

                                    <div class="tooltip-ico">Добавить в сравнение</div>
                                </a><a href="#">

                                    <div class="tooltip-ico">Добавить в корзину</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="plants-block">
                <span class="ground">
                    <span class="ground__img" data-depth-x="0.10" data-depth-y="0"></span>
                </span>
            <span class="plants">
                    <span class="plants__img" data-depth-x="0.6" data-depth-y="0"></span>
                </span>
            <div class="container">
                <div class="plants-block__zag">наша цель:</div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "agro_goal",
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
                        "COMPONENT_TEMPLATE" => ".default",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(0 => "", 1 => "",),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => GOAL_IBLOCK_ID,
                        "IBLOCK_TYPE" => "main",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "2",
                        "PAGER_BASE_LINK" => "",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => "",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(0 => "", 1 => "DESCRIPTION", 2 => "",),
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
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ); ?>
            </div>
        </div>
    </section>
    <section>
        <div class="main-about">
            <div class="container">
                <div class="zag">
                    <span class="zag__red">кто мы такие</span>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "title",
                            "EDIT_TEMPLATE" => "standard.php"
                        )
                    ); ?>
                </div>
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "agro_advantages", array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                    "AJAX_MODE" => "N",    // Включить режим AJAX
                    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                    "CACHE_FILTER" => "Y",    // Кешировать при установленном фильтре
                    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                    "CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "CACHE_TYPE" => "A",    // Тип кеширования
                    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                    "COMPONENT_TEMPLATE" => ".default",
                    "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                    "DISPLAY_DATE" => "N",    // Выводить дату элемента
                    "DISPLAY_NAME" => "Y",    // Выводить название элемента
                    "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                    "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                    "FIELD_CODE" => array(    // Поля
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",    // Фильтр
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                    "IBLOCK_ID" => ADVANTAGES_IBLOCK_ID,    // Код информационного блока
                    "IBLOCK_TYPE" => "main",    // Тип информационного блока (используется только для проверки)
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                    "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                    "NEWS_COUNT" => "3",    // Количество новостей на странице
                    "PAGER_BASE_LINK" => "",
                    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                    "PAGER_PARAMS_NAME" => "arrPager",
                    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                    "PAGER_TEMPLATE" => "",    // Шаблон постраничной навигации
                    "PAGER_TITLE" => "Новости",    // Название категорий
                    "PARENT_SECTION" => "",    // ID раздела
                    "PARENT_SECTION_CODE" => "",    // Код раздела
                    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                    "PROPERTY_CODE" => array(    // Свойства
                        0 => "",
                        1 => "DESCRIPTION",
                        2 => "",
                    ),
                    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                    "SET_STATUS_404" => "N",    // Устанавливать статус 404
                    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                    "SHOW_404" => "N",    // Показ специальной страницы
                    "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                    "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                    "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                    "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                ),
                    false
                ); ?>
                <div class="main-about__img lazy" data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/main-about.png)">
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="main-article">
            <div class="container">
                <div class="article-item article-item--akcii">
                    <div class="article-item__top"><a class="article-item__type" href="#">Акции</a>
                        <div class="article-item__date">02 марта</div>
                    </div>
                    <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от
                        российского «Тополя»
                    </div>
                    <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально
                        занимается
                        продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.
                    </div>
                    <a class="article-item__link" href="#">Читать полностью
                        <div class="arrow">

                        </div>
                    </a>
                </div>
                <div class="article-item article-item--article">
                    <div class="article-item__top"><a class="article-item__type" href="#">Статьи</a>
                        <div class="article-item__date">15 марта</div>
                    </div>
                    <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от
                        российского «Тополя»
                    </div>
                    <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально
                        занимается
                        продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.
                    </div>
                    <a class="article-item__link" href="#">Читать полностью
                        <div class="arrow">

                        </div>
                    </a>
                </div>
                <div class="article-item article-item--news">
                    <div class="article-item__top"><a class="article-item__type" href="#">Новости</a>
                        <div class="article-item__date">22 марта</div>
                    </div>
                    <div class="article-item__name">Преимущества блоков, а может и газонокосилок производства от
                        российского «Тополя»
                    </div>
                    <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально
                        занимается
                        продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.
                    </div>
                    <a class="article-item__link" href="#">Читать полностью
                        <div class="arrow">

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="brands">
            <div class="container">
                <div class="brands__text">
                    <span>
                        Наши
                    </span>
                    <span>
                        бренды
                    </span></div>
                <div class="brands__img"><a class="img wow fadeInUp" href="#" data-wow-delay=".5s"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay=".5s"><img
                                src="/local/templates/agro/images/brands/logo1.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo1.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay=".6s"><img
                                src="/local/templates/agro/images/brands/logo2.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo2.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay=".7s"><img
                                src="/local/templates/agro/images/brands/logo3.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo3.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay=".8s"><img
                                src="/local/templates/agro/images/brands/logo4.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo4.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay=".9s"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay=".9s"><img
                                src="/local/templates/agro/images/brands/logo5.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo5.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay="1s"><img
                                src="/local/templates/agro/images/brands/logo6.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo6.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay="1.1s"><img
                                src="/local/templates/agro/images/brands/logo7.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo7.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay="1.2s"><img
                                src="/local/templates/agro/images/brands/logo8.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo8.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay="1.3s"><img
                                src="/local/templates/agro/images/brands/logo9.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo9.svg"></a><a class="img wow fadeInUp"
                                                                                                href="#"
                                                                                                data-wow-delay="1.4s"><img
                                src="/local/templates/agro/images/brands/logo10.svg" class="lazy"
                                data-src="/local/templates/agro/images/brands/logo10.svg"></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="form-border">
            <div class="container">
                <div class="border">
                    <div class="form-border__text">
                        <p>Хотите быть в курсе<b>скидок и акций?</b></p>
                    </div>
                    <form class="form-border__form">
                        <div class="input-text-label">
                            <label>Введите ваше имя</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="input-text-label">
                            <label>Введите ваш email</label>
                            <input type="text" placeholder="">
                        </div>
                        <input type="submit" value="Отправить">
                    </form>
                </div>
            </div>
        </div>
    </section>
    </article><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>