<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Название сайта">
    <meta name="author" content="Company Test"><!--APPLE-->
    <meta meta name="viewport" content="width=device-width, initial-scale=1"><!--IE-->
    <meta meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- ICO-->

    <?php $APPLICATION->ShowHead(); ?>

    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php
    Asset::getInstance()->addString('<link rel="shortcut icon" type="image/png" href="/local/templates/agro/images/favicon/favicon100.png">');
    Asset::getInstance()->addString('<link rel="apple-touch-icon" href="/local/templates/agro/images/favicon/favicon57.png">');
    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="72x72" href="/local/templates/agro/images/favicon/favicon72.png">');
    Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="114x114" href="/local/templates/agro/images/favicon/favicon114.png">');

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/libs.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/block/header.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/block/footer.css');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.2.1.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/libs.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/common.js");
    ?>

</head>
<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<a class="scrollup" href="#">
    <svg class="img">
        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#a-top"></use>
    </svg>
</a>
<header>
    <div class="header-top">
        <div class="container">
            <div id="nav-icon3"><span></span><span></span><span></span><span></span></div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header-top",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            ); ?>
            <div class="header-bottom__phone">
                <a class="header-bottom__phone-link ico-velcom" href="tel:+375291112233">
                    <span>8 (029) 111-22-33</span>
                </a>
                <div class="header-bottom__phone-hover">
                    <div class="header-bottom__phone-contact">
                        <div class="name">Контакт-центр:</div>
                        <ul>
                            <li class="ico-velcom"><a href="tel:80291112233">8 (029)<b>111-22-33</b></a></li>
                            <li class="ico-mtc"><a href="tel:80297002244">8 (029)<b>700-22-44</b></a></li>
                            <li><a href="mailto:info@normsite.by">info@normsite.by</a></li>
                        </ul>
                    </div>
                    <div class="header-bottom__phone-time">
                        <div class="name">Время работы:</div>
                        <ul>
                            <li>пн. - пт. с 10.00 до 19.00</li>
                            <li>сб. - вс. с 10.00 до 17.00</li>
                        </ul>
                    </div>
                    <div class="header-bottom__phone-adress"><a class="call-back--link ico-smartphone-red" href="#">Обратный
                            звонок</a>
                        <ul>
                            <li class="ico-placeholder-gray"><a href="#">Магазин на<span>Наполеона, 23</span></a><a
                                        href="tel:80175551122">8 (017) 555-11-22</a></li>
                            <li class="ico-placeholder-gray"><a href="#">Магазин на<span>Неманская, 45 11</span></a><a
                                        href="tel:80175337788">8 (017) 533-77-88</a></li>
                            <li class="ico-placeholder-gray"><a href="#">Магазин на<span>Уборевича, 31 2</span></a><a
                                        href="tel:80293334455">8 (029) 333-44-55</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom__logo">
                <a href="/" <?php if ($APPLICATION->GetCurPage() == '/'): ?> onclick="return false;" <?php endif; ?>>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo2.svg">
                </a>
            </div>
            <div class="header-bottom__phone">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/main_phone.php",
                        "AREA_FILE_SUFFIX" => "inc",
                        "AREA_FILE_RECURSIVE" => "Y",
                        "EDIT_TEMPLATE" => "standard.php"
                    )
                ); ?>
                <div class="header-bottom__phone-hover">
                    <div class="header-bottom__phone-contact">
                        <div class="name">Контакт-центр:</div>
                        <ul>
                            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/phones.php",
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "EDIT_TEMPLATE" => "standard.php"
                                )
                            ); ?>
                            <li><a href="mailto:info@normsite.by">info@normsite.by</a></li>
                        </ul>
                    </div>
                    <div class="header-bottom__phone-time">
                        <div class="name">Время работы:</div>
                        <ul>
                            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/time.php",
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "EDIT_TEMPLATE" => "standard.php"
                                )
                            ); ?>

                        </ul>
                    </div>
                    <div class="header-bottom__phone-adress"><a class="call-back--link ico-smartphone-red" href="#">Обратный
                            звонок</a>
                        <ul>
                            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/adresses.php",
                                    "AREA_FILE_RECURSIVE" => "Y",
                                    "EDIT_TEMPLATE" => "standard.php"
                                )
                            ); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-bottom__catalog"><a class="btn-for--catalog" href="#">Каталог продукции
                    <svg class="sprite-svg open">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#a-b-red"></use>
                    </svg>
                    <svg class="sprite-svg close">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#close"></use>
                    </svg>
                </a>

                <div class="header-catalog-popup">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "agro_section_list",
                        array(
                            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                            "VIEW_MODE" => "LIST",
                            "SHOW_PARENT_NAME" => "Y",
                            "IBLOCK_TYPE" => "catalog",
                            "IBLOCK_ID" => "10",
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_CODE" => $_REQUEST["SECTION_CODE_PATH"],
                            "SECTION_URL" => "/catalog/#SECTION_CODE_PATH#/",
                            "COUNT_ELEMENTS" => "Y",
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "Y",
                            "TOP_DEPTH" => "2",
                            "SECTION_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SECTION_USER_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_NOTES" => "",
                            "CACHE_GROUPS" => "Y",
                            "COMPONENT_TEMPLATE" => "agro_section_list",
                            "FILTER_NAME" => "sectionsFilter",
                            "CACHE_FILTER" => "N"
                        ),
                        false
                    ); ?>
                </div>
            </div>
            <div class="header-bottom__ul">
                <div class="header-bottom__li"><a href="/about/">О компании</a></div>
                <div class="header-bottom__li"><a href="#">Сотрудничество</a></div>
            </div>
            <div class="header-bottom__btn">
                <div class="search-block header-bottom__btn-block">
                    <form>
                        <input type="text" placeholder="Введите ваш поисковый запрос">
                        <button class="close">
                            <svg class="sprite-svg">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#close"></use>
                            </svg>
                        </button>
                        <input class="ico-search" type="submit">
                    </form>
                </div>
                <div class="basket-block header-bottom__btn-block"><a class="basket-header-ico" href="#">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#shopping-bag"></use>
                        </svg>
                        <span class="count active">9</span></a></div>
                <div class="personal-block header-bottom__btn-block"><a class="ico-lock" href="#">Личный кабинет</a>
                </div>
            </div>
        </div>
    </div>
</header>
