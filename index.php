<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
//$USER->Authorize(2);
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
                    <svg id="svg-anim" class="sprite-svg">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki"></use>
                    </svg>
                        Новинки
                    </li>
                    <li class="catalog-tabs__li" data-tab="akcii">
                        <svg id="svg-anim" class="sprite-svg">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#akcii"></use>
                        </svg>
                        Акции и скидки
                    </li>
                    <li class="catalog-tabs__li" data-tab="popular">
                        <svg id="svg-anim" class="sprite-svg">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#lider"></use>
                        </svg>
                        Популярные товары
                    </li>
                </ul>
                <div class="catalog-search">
                    <?$APPLICATION->IncludeComponent("bitrix:search.title","catalog-search",Array(
                            "CATEGORY_0" => array(),
                            "CATEGORY_0_TITLE" => "",
                            "CHECK_DATES" => "N",
                            "CONTAINER_ID" => "title-search",
                            "INPUT_ID" => "title-search-input",
                            "NUM_CATEGORIES" => "1",
                            "ORDER" => "date",
                            "PAGE" => "#SITE_DIR#catalog/search/",
                            "SHOW_INPUT" => "Y",
                            "SHOW_OTHERS" => "N",
                            "TOP_COUNT" => "5",
                            "USE_LANGUAGE_GUESS" => "Y"
                        )
                    );?>
                </div>
                <div class="catalog-container active">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section",
                        "agro_section",
                        Array(
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
                            "COMPATIBLE_MODE" => "N",
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
                            "FILTER_NAME" => "arrFilter",
                            "HIDE_NOT_AVAILABLE" => "N",
                            "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                            "IBLOCK_ID" => "10",
                            "IBLOCK_TYPE" => "catalog",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "LABEL_PROP" => array(),
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
                            "PRICE_CODE" => array("BASE"),
                            "PRICE_VAT_INCLUDE" => "Y",
                            "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                            "PRODUCT_ID_VARIABLE" => "id",
                            "PRODUCT_PROPS_VARIABLE" => "prop",
                            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                            "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                            "PRODUCT_SUBSCRIPTION" => "Y",
                            "PROPERTY_CODE_MOBILE" => array(),
                            "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                            "RCM_TYPE" => "personal",
                            "SECTION_CODE" => "",
                            "SECTION_CODE_PATH" => "",
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_ID_VARIABLE" => "SECTION_ID",
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array("",""),
                            "SEF_MODE" => "Y",
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
                            "USE_PRODUCT_QUANTITY" => "N"
                        )
                    );?>
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