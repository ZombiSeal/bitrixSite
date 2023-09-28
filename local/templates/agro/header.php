<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

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
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/--style.css');
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
        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#a-top"></use>
    </svg>
</a>
<header>
    <div class="header-top">
        <div class="container">
            <div id="nav-icon3"><span></span><span></span><span></span><span></span></div>
            <ul class="header-top__ul">
                <li class="header-top__li"><a href="#">Доставка</a></li>
                <li class="header-top__li"><a href="#">Оплата</a></li>
                <li class="header-top__li"><a href="#">Рассрочка</a></li>
                <li class="header-top__li"><a href="#">Сервисный центр</a></li>
                <li class="header-top__li"><a href="#">FAQ</a></li>
                <li class="header-top__li"><a href="#">Cертификаты</a></li>
                <li class="header-top__li"><a href="#">Бренды</a></li>
                <li class="header-top__li"><a href="#">Новости</a></li>
                <li class="header-top__li"><a href="#">Блог</a></li>
                <li class="header-top__li"><a href="#">Контакты</a></li>
            </ul>
            <div class="header-bottom__phone"><a class="header-bottom__phone-link ico-velcom"
                                                 href="tel:+375291112233"><span>8 (029) 111-22-33</span></a>
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
            <div class="header-bottom__logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo2.svg"></a></div>
            <div class="header-bottom__phone"><a class="header-bottom__phone-link ico-velcom"
                                                 href="tel:+375291112233"><span>8 (029) 111-22-33</span></a>
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
            <div class="header-bottom__catalog"><a class="btn-for--catalog" href="#">Каталог продукции
                    <svg class="sprite-svg open">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#a-b-red"></use>
                    </svg>
                    <svg class="sprite-svg close">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#close"></use>
                    </svg>
                </a>
                <div class="header-catalog-popup">
                    <ul class="header-catalog-popup__ul clearfix">
                        <li class="header-catalog-popup__li hasChild"><a href="/catalog/mototekhnika/">Мототехника<span>(13)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                            <ul class="drop" style="display: none;">
                                <li><a href="/catalog/mototekhnika/mopedy/">Мопеды<span>(1)</span></a>
                                    <div class="arrow-to-open">
                                        <svg class="sprite-svg open">
                                            <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                        </svg>
                                    </div>
                                </li>
                                <li>
                                    <a href="/catalog/mototekhnika/motobuksirovshchiki/">Мотобуксировщики<span>(1)</span></a>
                                    <div class="arrow-to-open">
                                        <svg class="sprite-svg open">
                                            <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                        </svg>
                                    </div>
                                </li>
                                <li><a href="/catalog/mototekhnika/mototsikly/">Мотоциклы<span>(1)</span></a>
                                    <div class="arrow-to-open">
                                        <svg class="sprite-svg open">
                                            <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                        </svg>
                                    </div>
                                </li>
                                <li>
                                    <a href="/catalog/mototekhnika/elektrosamokaty/">Электросамокаты<span>(10)</span></a>
                                    <div class="arrow-to-open">
                                        <svg class="sprite-svg open">
                                            <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                        </svg>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/aeratory/">Аэраторы<span>(7)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li hasChild"><a
                                    href="/catalog/sadovaya_tekhnika/gazonokosilki/">Газонокосилки<span>(90)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                            <ul class="drop">
                                <li><a href="/catalog/sadovaya_tekhnika/gazonokosilki/akkumulyatornye_gazonokosilki/">Аккумуляторные
                                        газонокосилки<span>(6)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/gazonokosilki/benzokosilki/">Бензокосилки<span>(32)</span></a>
                                </li>
                                <li><a href="/catalog/sadovaya_tekhnika/gazonokosilki/gazonokosilki_roboty/">Газонокосилки-роботы<span>(5)</span></a>
                                </li>
                                <li><a href="/catalog/sadovaya_tekhnika/gazonokosilki/komplektuyushchie_dlya_kosilok/">Комплектующие
                                        для косилок<span>(31)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/gazonokosilki/mekhanicheskie_gazonokosilki/">Механические
                                        газонокосилки<span>(3)</span></a></li>
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/gazonokosilki/elektrokosilki/">Электрокосилки<span>(13)</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/dvigateli_dlya_sadovoy_tekhniki/">Двигатели для садовой
                                техники<span>(64)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li hasChild"><a
                                    href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/">Для дома и
                                участка<span>(442)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                            <ul class="drop">
                                <li><a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/gazonnye_travy/">Газонные
                                        травы<span>(6)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/moyushchee_oborudovanie/">Моющее
                                        оборудование<span>(21)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/obogrevateli/">Обогреватели<span>(47)</span></a>
                                </li>
                                <li><a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/opryskivateli_1/">Опрыскиватели<span>(33)</span></a>
                                </li>
                                <li><a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/sadovaya_mebel/">Садовая
                                        мебель<span>(6)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/pylesosy/">Пылесосы<span>(7)</span></a>
                                </li>
                                <li><a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/sadovyy_inventar/">Садовый
                                        инвентарь<span>(297)</span></a></li>
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/stanki_derevoobrabatyvayushchie/">Станки
                                        деревообрабатывающие<span>(18)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/dlya_doma_i_uchastka/teplitsy_1/">Теплицы<span>(7)</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/drovokoly/">Дровоколы<span>(6)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li active"><a
                                    href="/catalog/sadovaya_tekhnika/izmelchiteli_sadovye/">Измельчители
                                садовые<span>(5)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a href="/catalog/sadovaya_tekhnika/kultivatory/">Культиваторы<span>(33)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/kustorezy_i_vysotorezy/">Кусторезы и высоторезы<span>(18)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a href="/catalog/sadovaya_tekhnika/minitraktory/">Минитракторы<span>(23)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/motobloki/">Мотоблоки<span>(75)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/navesnoe_oborudovanie_dlya_kultivatorov/">Навесное
                                оборудование для культиваторов<span>(48)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/navesnoe_oborudovanie_dlya_minitraktorov/">Навесное
                                оборудование для минитракторов<span>(77)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/navesnoe_oborudovanie_dlya_motoblokov/">Навесное
                                оборудование для мотоблоков<span>(225)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li hasChild"><a
                                    href="/catalog/sadovaya_tekhnika/pily/">Пилы<span>(27)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                            <ul class="drop">
                                <li><a href="/catalog/sadovaya_tekhnika/pily/akkumulyatornye_pily/">Аккумуляторные
                                        пилы<span>(2)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/pily/benzopily/">Бензопилы<span>(17)</span></a>
                                </li>
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/pily/elektropily/">Электропилы<span>(8)</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/podmetatelnye_mashiny/">Подметательные
                                машины<span>(4)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a
                                    href="/catalog/sadovaya_tekhnika/prinadlezhnosti_i_smazochnye_materialy_1/">Принадлежности
                                и смазочные материалы<span>(105)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a href="/catalog/sadovaya_tekhnika/sadovye_pylesosy/">Садовые
                                пылесосы<span>(7)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a href="/catalog/sadovaya_tekhnika/sadovye_traktory/">Садовые
                                тракторы<span>(6)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a href="/catalog/sadovaya_tekhnika/snegouborshchiki/">Снегоуборщики<span>(16)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li hasChild"><a
                                    href="/catalog/sadovaya_tekhnika/stroitelnoe_oborudovanie/">Строительное
                                оборудование<span>(122)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                            <ul class="drop">
                                <li><a href="/catalog/sadovaya_tekhnika/stroitelnoe_oborudovanie/betonomeshalki/">Бетономешалки<span>(9)</span></a>
                                </li>
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/stroitelnoe_oborudovanie/generatory_i_elektrostantsii/">Генераторы
                                        и электростанции<span>(14)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/stroitelnoe_oborudovanie/kompressory/">Компрессоры<span>(4)</span></a>
                                </li>
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/stroitelnoe_oborudovanie/motobury/">Мотобуры<span>(10)</span></a>
                                </li>
                                <li><a href="/catalog/sadovaya_tekhnika/stroitelnoe_oborudovanie/motopompy_i_nasosy/">Мотопомпы
                                        и насосы<span>(48)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/stroitelnoe_oborudovanie/svarochnye_apparaty/">Сварочные
                                        аппараты<span>(37)</span></a></li>
                            </ul>
                        </li>
                        <li class="header-catalog-popup__li hasChild"><a
                                    href="/catalog/sadovaya_tekhnika/trimmery_i_motokosy/">Триммеры и
                                мотокосы<span>(99)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                            <ul class="drop">
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/trimmery_i_motokosy/komplektuyushchie_dlya_trimmerov/">Комплектующие
                                        для триммеров<span>(56)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/trimmery_i_motokosy/trimmery_akkumulyatornye/">Триммеры
                                        аккумуляторные<span>(3)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/trimmery_i_motokosy/trimmery_benzinovye/">Триммеры
                                        бензиновые<span>(31)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/trimmery_i_motokosy/trimmery_elektricheskie/">Триммеры
                                        электрические<span>(9)</span></a></li>
                            </ul>
                        </li>
                        <li class="header-catalog-popup__li hasChild"><a
                                    href="/catalog/sadovaya_tekhnika/fermerskoe_oborudovanie/">Фермерское оборудование<span>(103)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                            <ul class="drop">
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/fermerskoe_oborudovanie/avtoklavy/">Автоклавы<span>(3)</span></a>
                                </li>
                                <li><a href="/catalog/sadovaya_tekhnika/fermerskoe_oborudovanie/doilnye_ustanovki/">Доильные
                                        установки<span>(17)</span></a></li>
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/fermerskoe_oborudovanie/inkubatory/">Инкубаторы<span>(38)</span></a>
                                </li>
                                <li>
                                    <a href="/catalog/sadovaya_tekhnika/fermerskoe_oborudovanie/separatory_i_masloboyki/">Сепараторы
                                        и маслобойки<span>(4)</span></a></li>
                                <li><a href="/catalog/sadovaya_tekhnika/fermerskoe_oborudovanie/sokovyzhimalki/">Соковыжималки<span>(2)</span></a>
                                </li>
                                <li><a href="/catalog/sadovaya_tekhnika/fermerskoe_oborudovanie/izmelchiteli/">Измельчители<span>(39)</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-catalog-popup__li"><a href="/catalog/sadovaya_tekhnika/elektroplugi/">Электроплуги<span>(3)</span></a>
                            <div class="arrow-to-open">
                                <svg class="sprite-svg open">
                                    <use xlink:href="/local/templates/agro/images/sprite/sprite.svg#a-b-red"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="header-catalog-popup__li"><a href="/catalog-zapchasti/">Каталог
                                запчастей<span>(3872)</span></a></li>
                    </ul>
                    <!--ul(class='header-catalog-popup__ul clearfix')-->
                    <!--    li(class='header-catalog-popup__li hasChild')-->
                    <!--        a(href='https://yandex.by')-->
                    <!--            | Бензо/электропилы-->
                    <!--            span (14)-->
                    <!--        .arrow-to-open-->
                    <!--            svg(class="sprite-svg open")-->
                    <!--                use(xlink:href="./images/sprite/sprite.svg#a-b-red")-->
                    <!--        ul.drop-->
                    <!--            li-->
                    <!--                a(href="#") Мопеды-->
                    <!--                span (14)-->
                    <!--            li-->
                    <!--                a(href="#") Мотобуксировщики-->
                    <!--                span (14)-->
                    <!--            li-->
                    <!--                a(href="#") Мотоциклы-->
                    <!--                span (14)-->
                    <!--            li-->
                    <!--                a(href="#") Электросамокаты-->
                    <!--                span (14)-->
                    <!---->
                    <!--    li(class='header-catalog-popup__li')-->
                    <!--        a(href='#' onclick='event.preventDefault()') Строительное оборудование-->
                    <!--        ul.drop-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Бензо/электропилы-->
                    <!--                    span (14)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Газонокосилки-->
                    <!--                    span (26)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Двигатели-->
                    <!--                    span (31)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Мотоблоки-->
                    <!--                    span (42)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Минитракторы-->
                    <!--                    span (21)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Навесное оборудование-->
                    <!--                    span (56)-->
                    <!---->
                    <!--    li(class='header-catalog-popup__li')-->
                    <!--        a(href='#' onclick='event.preventDefault()') Фермерское оборудование-->
                    <!--        ul.drop-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Бензо/электропилы-->
                    <!--                    span (14)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Газонокосилки-->
                    <!--                    span (26)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Двигатели-->
                    <!--                    span (31)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Мотоблоки-->
                    <!--                    span (42)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Минитракторы-->
                    <!--                    span (21)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Навесное оборудование-->
                    <!--                    span (56)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Опрыскиватели-->
                    <!--                    span (56)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Садовые тракторы-->
                    <!--                    span (56)-->
                    <!--    li(class='header-catalog-popup__li')-->
                    <!--        a(href='#' onclick='event.preventDefault()') Все для дома и участка-->
                    <!--        ul.drop-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Бензо/электропилы-->
                    <!--                    span (14)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Газонокосилки-->
                    <!--                    span (26)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Двигатели-->
                    <!--                    span (31)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Мотоблоки-->
                    <!--                    span (42)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Минитракторы-->
                    <!--                    span (21)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Навесное оборудование-->
                    <!--                    span (56)-->
                    <!--    li(class='header-catalog-popup__li')-->
                    <!--        a(href='#' onclick='event.preventDefault()') Уборочное оборудование-->
                    <!--        ul.drop-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Бензо/электропилы-->
                    <!--                    span (14)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Газонокосилки-->
                    <!--                    span (26)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Двигатели-->
                    <!--                    span (31)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Мотоблоки-->
                    <!--                    span (42)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Минитракторы-->
                    <!--                    span (21)-->
                    <!--    li(class='header-catalog-popup__li')-->
                    <!--        a(href='#' onclick='event.preventDefault()') Отопительное оборудование-->
                    <!--        ul.drop-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Бензо/электропилы-->
                    <!--                    span (14)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Газонокосилки-->
                    <!--                    span (26)-->
                    <!--    li(class='header-catalog-popup__li')-->
                    <!--        a(href='#' onclick='event.preventDefault()') Электроинструмент-->
                    <!--        ul.drop-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Бензо/электропилы-->
                    <!--                    span (14)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Газонокосилки-->
                    <!--                    span (26)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Двигатели-->
                    <!--                    span (31)-->
                    <!--            li-->
                    <!--                a(href='#')-->
                    <!--                    | Мотоблоки-->
                    <!--                    span (42)-->
                    <!--    li(class='header-catalog-popup__li')-->
                    <!--        a(href='#')-->
                    <!--            | Каталог запчастей-->
                    <!--            span (500)-->
                </div>
            </div>
            <div class="header-bottom__ul">
                <div class="header-bottom__li"><a href="#">О компании</a></div>
                <div class="header-bottom__li"><a href="#">Сотрудничество</a></div>
            </div>
            <div class="header-bottom__btn">
                <div class="search-block header-bottom__btn-block">
                    <form>
                        <input type="text" placeholder="Введите ваш поисковый запрос">
                        <button class="close">
                            <svg class="sprite-svg">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#close"></use>
                            </svg>
                        </button>
                        <input class="ico-search" type="submit">
                    </form>
                </div>
                <div class="basket-block header-bottom__btn-block"><a class="basket-header-ico" href="#">
                        <svg class="sprite-svg">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                        </svg>
                        <span class="count active">9</span></a></div>
                <div class="personal-block header-bottom__btn-block"><a class="ico-lock" href="#">Личный кабинет</a>
                </div>
            </div>
        </div>
    </div>
</header>
