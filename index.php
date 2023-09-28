<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/block/main-top.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/block/main-article.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/block/main-about.css");
?>
    <article>
        <section>
            <div class="main-top__slider">
                <div class="main-top">
                    <div class="container clearfix lazy" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/tractor.png)"><a class="main-top__link"
                                                                                                href="#"></a>
                        <div class="zag--black">Продажа садовой<br><strong>техники и оборудования</strong></div>
                        <div class="phone-block">
                            <div class="phone-block__zag">Наши телефоны</div>
                            <ul class="phone-block__ul">
                                <li><a class="ico-velcom" href="tel:80291112233">8 (029)<b>111-22-33</b></a></li>
                                <li><a class="ico-mtc" href="tel:80291112233">8 (029)<b>700-22-44</b></a></li>
                            </ul>
                        </div>
                        <div class="location-block">
                            <ul class="location-block__ul">
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Наполеона, 23</span></a><a
                                        href="tel:80175551122">8 (017) 555-11-22</a></li>
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Неманская, 45</span></a><a
                                        href="tel:80175551122">8 (017) 533-77-88</a></li>
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Уборевича, 31</span></a><a
                                        href="tel:80293334455">8 (029) 333-44-55</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-top">
                    <div class="container clearfix lazy" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/tractor.png)"><a class="main-top__link"
                                                                                                href="#"></a>
                        <div class="zag--black">Продажа садовой<br><strong>техники и оборудования</strong></div>
                        <div class="phone-block">
                            <div class="phone-block__zag">Наши телефоны</div>
                            <ul class="phone-block__ul">
                                <li><a class="ico-velcom" href="tel:80291112233">8 (029)<b>111-22-33</b></a></li>
                                <li><a class="ico-mtc" href="tel:80291112233">8 (029)<b>700-22-44</b></a></li>
                            </ul>
                        </div>
                        <div class="location-block">
                            <ul class="location-block__ul">
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Наполеона, 23</span></a><a
                                        href="tel:80175551122">8 (017) 555-11-22</a></li>
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Неманская, 45</span></a><a
                                        href="tel:80175551122">8 (017) 533-77-88</a></li>
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Уборевича, 31</span></a><a
                                        href="tel:80293334455">8 (029) 333-44-55</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="main-catalog">
                <div class="container">
                    <ul class="catalog-tabs">
                        <li class="catalog-tabs__li active" data-tab="novinki">
                            <svg class="sprite-svg" id="svg-anim">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki"></use>
                            </svg>
                            Новинки
                        </li>
                        <li class="catalog-tabs__li" data-tab="akcii">
                            <svg class="sprite-svg">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#akcii"></use>
                            </svg>
                            Акции и скидки
                        </li>
                        <li class="catalog-tabs__li" data-tab="popular">
                            <svg class="sprite-svg">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#lider"></use>
                            </svg>
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
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Новинки</span></div>
                                </div>
                                <div class="flags tehniche">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
                                </div>
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>1-й поставщик</span></div>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/c1.png)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая</div>
                                    <div class="name">AL-KO Hightline 42.5 P-A</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                    <div class="block"><span>Вес:</span><span>3,1 кг</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price">
                                    <!--span.current 780,00 руб.--><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico "><a class="catalog-item__ico-video" href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a class="catalog-item__ico-compare" href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>В сравнении</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg" id="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#click-one"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>В корзине</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <!--+b('flags novinki')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki")-->
                                <!--+b('flags tehniche')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche")-->
                                <!--+b('flags one')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost")-->
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c2.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G67-E</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c3.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href=".<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c3.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <!--+b('flags novinki')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki")-->
                                <!--+b('flags tehniche')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche")-->
                                <!--+b('flags one')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost")-->
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c2.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G67-E</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags novinki">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Новинки</span></div>
                                </div>
                                <div class="flags tehniche">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
                                </div>
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>1-й поставщик</span></div>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/c1.png)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая</div>
                                    <div class="name">AL-KO Hightline 42.5 P-A</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                    <div class="block"><span>Вес:</span><span>3,1 кг</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price">
                                    <!--span.current 780,00 руб.--><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico "><a class="catalog-item__ico-video" href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a class="catalog-item__ico-compare" href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>В сравнении</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg" id="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#click-one"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>В корзине</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-container" data-tab="akcii">
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c3.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <!--+b('flags novinki')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki")-->
                                <!--+b('flags tehniche')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche")-->
                                <!--+b('flags one')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost")-->
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c2.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G67-E</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags novinki">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Новинки</span></div>
                                </div>
                                <div class="flags tehniche">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
                                </div>
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>1-й поставщик</span></div>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/c1.png)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая</div>
                                    <div class="name">AL-KO Hightline 42.5 P-A</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                    <div class="block"><span>Вес:</span><span>3,1 кг</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price">
                                    <!--span.current 780,00 руб.--><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico "><a class="catalog-item__ico-video" href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a class="catalog-item__ico-compare" href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>В сравнении</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg" id="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#click-one"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>В корзине</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <!--+b('flags novinki')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki")-->
                                <!--+b('flags tehniche')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche")-->
                                <!--+b('flags one')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost")-->
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c2.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G67-E</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <!--+b('flags novinki')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki")-->
                                <!--+b('flags tehniche')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche")-->
                                <!--+b('flags one')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost")-->
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c2.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G67-E</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c3.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
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
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki")-->
                                <!--+b('flags tehniche')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche")-->
                                <!--+b('flags one')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost")-->
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c2.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G67-E</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c3.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c3.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <!--+b('flags novinki')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki")-->
                                <!--+b('flags tehniche')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche")-->
                                <!--+b('flags one')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost")-->
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c2.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G67-E</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <div class="flags novinki">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Новинки</span></div>
                                </div>
                                <div class="flags tehniche">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
                                </div>
                                <div class="flags one">
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>1-й поставщик</span></div>
                                </div>
                            </div>
                            <a class="catalog-item__img lazy" href="#" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/c1.png)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая</div>
                                    <div class="name">AL-KO Hightline 42.5 P-A</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                    <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                                    <div class="block"><span>Вес:</span><span>3,1 кг</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price">
                                    <!--span.current 780,00 руб.--><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                                </div>
                                <div class="catalog-item__ico "><a class="catalog-item__ico-video" href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#video"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Видеозор</span></div>
                                    </a><a class="catalog-item__ico-compare" href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>В сравнении</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg" id="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#click-one"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>В корзине</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog-item">
                            <div class="catalog-item__flags">
                                <!--+b('flags novinki')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#novinki")-->
                                <!--+b('flags tehniche')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#tehniche")-->
                                <!--+b('flags one')-->
                                <!--    svg(class="sprite-svg")-->
                                <!--        use(xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#onePost")-->
                            </div>
                            <a class="catalog-item__img lazy" href="#" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/c2.png)"
                               style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                            <div class="catalog-item__name">
                                <div>
                                    <div class="pos">Газонокосилка бензиновая самоходная</div>
                                    <div class="name">BOSCH TT 951 2479-G67-E</div>
                                </div>
                            </div>
                            <div class="catalog-item__param">
                                <div>
                                    <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span></div>
                                    <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                </div>
                            </div>
                            <div class="catalog-item__bottom">
                                <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                                </div>
                                <div class="catalog-item__ico"><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                    </a><a href="#">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#shopping-bag"></use>
                                        </svg>
                                        <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="plants-block"><span class="ground"><span class="ground__img" data-depth-x="0.10"
                                                                 data-depth-y="0"></span></span><span class="plants"><span
                        class="plants__img" data-depth-x="0.6" data-depth-y="0"></span></span>
                <div class="container">
                    <div class="plants-block__zag">наша цель:</div>
                    <p>Облегчение сельскохозяйственных работ при помощи садовой техники и оборудования.<br><b>Помощь в её
                            выборе, подбор нужной комплектации, сервисное обслуживание всей продукции.</b></p>
                </div>
            </div>
        </section>
        <section>
            <div class="main-about">
                <div class="container">
                    <div class="zag"><span class="zag__red">кто мы такие</span><b>Первый поставщик</b>&nbsp;
                        мини-сельхозтехники и навесного оборудования к ней.
                    </div>
                    <ul class="main-about__ul">
                        <li class="ico-cus-support wow slideInLeft"><span class="name">Собственный сервисный центр</span>
                            <p>
                                Наша мастерская
                                &nbsp;<b>осуществляет как гарантийное, так и послегарантийное обслуживание</b>&nbsp;
                                садовой техники и оборудования, а также техническую поддержку всей техники.
                            </p>
                        </li>
                        <li class="ico-box wow slideInLeft"><span
                                class="name">Бесплатная доставка по Минску от 200 рублей</span>
                            <p><b>Вы не переплачиваете за доставку!</b>&nbsp;
                                Это удобно, если учесть, что доставка крупногабаритной техники — занятие не из лёгких.
                            </p>
                        </li>
                        <li class="ico-handshake wow slideInLeft"><span class="name">Опыт работы 20 лет</span>
                            <p><b>За это время мы набили много шишек.</b>&nbsp;
                                Но отточили бизнес-процессы в компании, чтобы помочь вам при выборе, покупке, использовании
                                садовой техники и инвентаря.
                            </p>
                        </li>
                    </ul>
                    <div class="main-about__img lazy" data-bg="url(<?=SITE_TEMPLATE_PATH?>/images/main-about.png)"
                         style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></div>
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
                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается
                            продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.
                        </div>
                        <a class="article-item__link" href="#">Читать полностью
                            <div class="arrow">
                                <svg class="img">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#a-r-gray"></use>
                                </svg>
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
                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается
                            продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.
                        </div>
                        <a class="article-item__link" href="#">Читать полностью
                            <div class="arrow">
                                <svg class="img">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#a-r-gray"></use>
                                </svg>
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
                        <div class="article-item__desc">Наша компания ОДО «Норм-сайт» многие годы профессионально занимается
                            продажей сервисным обслуживанием мотосельхозтехни ведущих мировых производителей.
                        </div>
                        <a class="article-item__link" href="#">Читать полностью
                            <div class="arrow">
                                <svg class="img">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#a-r-gray"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="brands">
                <div class="container">
                    <div class="brands__text"><span>Наши</span><span>бренды</span></div>
                    <div class="brands__img"><a class="img wow fadeInUp" href="#" data-wow-delay=".5s"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay=".5s"><img class="lazy"
                                                                                        data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo1.svg"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay=".6s"><img class="lazy"
                                                                                        data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo2.svg"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay=".7s"><img class="lazy"
                                                                                        data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo3.svg"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay=".8s"><img class="lazy"
                                                                                        data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo4.svg"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay=".9s"></a><a class="img wow fadeInUp" href="#"
                                                                                          data-wow-delay=".9s"><img
                                class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo5.svg"></a><a class="img wow fadeInUp" href="#"
                                                                                         data-wow-delay="1s"><img class="lazy"
                                                                                                                  data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo6.svg"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay="1.1s"><img class="lazy"
                                                                                         data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo7.svg"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay="1.2s"><img class="lazy"
                                                                                         data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo8.svg"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay="1.3s"><img class="lazy"
                                                                                         data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo9.svg"></a><a
                            class="img wow fadeInUp" href="#" data-wow-delay="1.4s"><img class="lazy"
                                                                                         data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo10.svg"></a>
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
    </article>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>