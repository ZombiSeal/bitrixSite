<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */


$this->setFrameMode(true);


$firstImgSrc = $arResult['PROPERTIES']['IMAGES']['SRC'][0];

//
//vr($arResult);
?>

<section>
    <div class="card-tabs" id="<?= $arResultIds['ID'] ?>">
        <div class="container">
            <div class="card-tabs__block active" data-tabs="information">
                <div class="card-tabs__block-text">
                    <?php if (!empty($arResult['PROPERTIES']['EQUIPMENT']['VALUE'])): ?>
                        <p class="desc">
                            <span class="card-tabs__block-text-zag"><?= $arResult['PROPERTIES']['EQUIPMENT']['NAME'] ?>:</span>
                            <?= $arResult['PROPERTIES']['EQUIPMENT']['VALUE'] ?>
                        </p>
                    <?php endif; ?>

                    <div class="card-tabs__block-text-zag btn-mob-slider">
                        <span>Подарки при покупке одним платежом:</span>
                    </div>
                    <div class="card-tabs__block-text-slider__container">
                        <div class="card-tabs__block-text-slider-arrow">
                            <button class="slick-next slick-arrow" type="button"></button>
                            <button class="slick-prev slick-arrow" type="button"></button>
                        </div>
                        <div class="card-tabs__block-text-slider">
                            <div class="slide-vertical"><a class="slide-vertical__container" href="#">
                                    <div class="slide-vertical__img">
                                        <div class="bg"
                                             style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/card-slide.png"></div>
                                    </div>
                                    <div class="slide-vertical__text">
                                        <div class="slide-vertical__text-name">Плуг П1-20/3 без сцепк 65 отоблокам РФ
                                        </div>
                                        <div class="slide-vertical__text-price">50 рублей</div>
                                        <div class="slide-vertical__text-free">Бесплатно</div>
                                    </div>
                                </a>
                            </div>
                            <div class="slide-vertical"><a class="slide-vertical__container" href="#">
                                    <div class="slide-vertical__img">
                                        <div class="bg"
                                             style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/card-slide.png"></div>
                                    </div>
                                    <div class="slide-vertical__text">
                                        <div class="slide-vertical__text-name">Плуг П1-20/3 без сцепк 65 отоблокам РФ
                                        </div>
                                        <div class="slide-vertical__text-price">50 рублей</div>
                                        <div class="slide-vertical__text-free">Бесплатно</div>
                                    </div>
                                </a></div>
                            <div class="slide-vertical"><a class="slide-vertical__container" href="#">
                                    <div class="slide-vertical__img">
                                        <div class="bg"
                                             style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/card-slide.png"></div>
                                    </div>
                                    <div class="slide-vertical__text">
                                        <div class="slide-vertical__text-name">Плуг П1-20/3 без сцепк 65 отоблокам РФ
                                        </div>
                                        <div class="slide-vertical__text-price">50 рублей</div>
                                        <div class="slide-vertical__text-free">Бесплатно</div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <div class="card-tabs__block-text-advantage">
                        <div class="advantage-catalog__item ico-credit">Работаем в рассрочку без % от 3 до 36
                            месяцев
                        </div>
                        <div class="advantage-catalog__item ico-truck">Бесплатно привозим в любую точку страны при
                            заказе от 1500 рублей
                        </div>
                        <div class="advantage-catalog__item ico-setting">Ремонтируем в собственном сервисном
                            центре
                        </div>
                    </div>
                </div>

                <div class="card-tabs__block-img">
                    <div class="catalog-item__flags">
                        <?php foreach ($arResult['FLAGS'] as $flag): ?>
                            <?php if ($flag[0]['VALUE_XML_ID'] === 'Y'): ?>
                                <?= renderFlag($flag['SPRITE'], $flag['CLASS'], $flag[0]['NAME']); ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <?php if (!empty($arResult['PROPERTIES']['IMAGES']['SRC'])): ?>
                        <div class="card-tabs__slider-main">
                            <?php foreach ($arResult['PROPERTIES']['IMAGES']['SRC'] as $img): ?>
                                <a class="card-tabs__slider-main-block"
                                   href="<?= $img ?>"
                                   style="background-image: url(<?= $img ?>)">
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-tabs__slider-nav">
                            <?php foreach ($arResult['PROPERTIES']['IMAGES']['SRC'] as $img): ?>
                                <div class="card-tabs__slider-nav-block">
                                    <div class="bg" style="background-image: url(<?= $img ?>)"></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <? endif; ?>
                </div>
            </div>
            <div class="card-tabs__block" data-tabs="description">
                <div class="card-tabs__block-text">
                    <div class="text">
                        <div class="card-tabs__block-text-zag">Подарки при покупке одним платежом:</div>
                        <p>Условия предоставления беспроцентной рассрочки от "Норм-сайт":</p>
                        <ul>
                            <li>паспорт;</li>
                            <li>справка о доходах или пенсии за 3 месяца;</li>
                            <li>без поручителей;</li>
                            <li>без дополнительных документов;</li>
                            <li>возможность досрочного погашения.</li>
                        </ul>
                        <p>Мы оформляем рассрочку в магазине по адресу: г. Минск, Наполеона, 23. Оформление занимает
                            20 минут! При доставке, беспроцентную рассрочку оформляет курьер. Вы можете приобрести
                            мотоблок по любой банковской карте рассрочки. Если вы хотите узнать об этом способе
                            побольше, то можете почитать информацию об условиях на странице</p><a
                                href="#">Рассрочка</a>
                    </div>
                </div>
                <div class="card-tabs__block-img"
                     style="background-image: url(<?= $firstImgSrc ?>)">
                    <div class="catalog-item__flags">
                        <?php foreach ($arResult['FLAGS'] as $flag): ?>
                            <?php if ($flag[0]['VALUE_XML_ID'] === 'Y'): ?>
                                <?= renderFlag($flag['SPRITE'], $flag['CLASS'], $flag[0]['NAME']); ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="card-tabs__block" data-tabs="rasrochka">
                <?php if (!empty($arResult['DISPLAY_PROPERTIES'])): ?>
                    <ul class="card-tabs__block-text_description">
                        <?php foreach ($arResult['DISPLAY_PROPERTIES'] as $prop): ?>
                            <li><span><?= $prop['NAME'] ?>:</span><span><?= $prop['VALUE'] ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>Упс... Свойств нет(((</p>
                <?php endif; ?>
            </div>
            <div class="card-tabs__block" data-tabs="delivery">
                <div class="card-tabs__block-text">
                    <div class="text">
                        <div class="card-tabs__block-text-zag">Условия доставки</div>
                        <p>
                            Бесплатно привезём заказ
                            &#032;<b>в Минске</b>&#032;
                            при покупке<span class="red">от 200 рублей.</span><br>Бесплатно привезём заказ
                            &#032;<b>в Минске</b>&#032;
                            при покупке<span class="red">от 200 рублей.</span>
                        </p>
                        <ul>
                            <li>в Минске курьер привезёт заказ за 10 рублей в день заказа или на следующий день;
                            </li>
                            <li>по Беларуси стоимость доставки зависит от суммы заказа и места доставки.</li>
                        </ul>
                        <p>Наши консультанты помогут разобраться в этом вопросе и подберут оптимальный вариант по
                            телефонам<br><b>8 (029) 111-22-33 или 8 (029) 700-22-44.</b></p>
                        <p><b>Запчасти, заказы от 20 рублей можем переслать почтой наложенным платежом.</b>&#032;
                            В Россию и Казахстан отправляем заказы транспортными компаниями или почтой наложенным
                            платежом.
                        </p>
                        <p>Также вы можете забрать заказ в магазинах. Запчасти на Уборевича, 31, остальные товары на
                            Наполеона, 23 или на складе по адресу 4-й переулок Монтажников, 5.</p>
                    </div>
                </div>
                <div class="card-tabs__block-img" style="background-image: url(<?= $firstImgSrc ?>)"></div>
            </div>
            <div class="card-tabs__block" data-tabs="instruction">
                <div class="card-tabs__block-text">
                    <?php if (!empty($arResult['FILES'])): ?>
                        <ul class="card-tabs__block-text_pdf">
                            <?php foreach ($arResult['FILES'] as $file): ?>
                                <li>
                                    <a href="<?= $file['SRC'] ?>" download>
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#pdf"></use>
                                        </svg>
                                        <span><?= $file['ORIGINAL_NAME'] ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php elseif (!empty($arResult['PROPERTIES']['INSTRUCTION']['VALUE'])): ?>
                        <ul class="card-tabs__block-text_pdf">
                            <li>
                                <a href="<?= $arResult['PROPERTIES']['INSTRUCTION']['SRC'] ?>" download>
                                    <svg class="sprite-svg">
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#pdf"></use>
                                    </svg>
                                    <span><?= $arResult['PROPERTIES']['INSTRUCTION']['ORIGINAL_NAME'] ?></span>
                                </a>
                            </li>
                        </ul>
                    <?php else: ?>
                        <p>Инструкций нет</p>
                    <?php endif; ?>

                </div>
                <div class="card-tabs__block-img" style="background-image: url(<?= $firstImgSrc ?>)"></div>
            </div>
        </div>
        <div class="card-tabs__list">
            <div class="container">
                <ul>
                    <li class="active" data-tabs="information" data-w="tab1"><span class="circle"></span><span>Информация</span>
                    </li>
                    <li data-tabs="description" data-w="tab2"><span class="circle"></span><span>Описание</span></li>
                    <li data-tabs="rasrochka" data-w="tab3"><span class="circle"></span><span>Характеристики</span></li>
                    <li data-tabs="delivery" data-w="tab4"><span class="circle"></span><span>Доставка</span></li>
                    <li data-tabs="instruction" data-w="tab5"><span
                                class="circle"></span><span>Инструкции к товару</span></li>
                </ul>
                <span class="border tab1"></span>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="card-info">
        <div class="container">
            <div class="card-info__top">
                <div class="card-info__top-links">
                    <?php if (!empty($arResult['PROPERTIES']['VIDEO']['VALUE'])): ?>
                        <a class="link popup--video popup-youtube"
                           href="<?= $arResult['PROPERTIES']['VIDEO']['VALUE'] ?>">
                            <svg class="sprite-svg">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#video"></use>
                            </svg>
                            Видеообзор
                        </a>
                    <?php endif; ?>

                    <?php if (!empty($arResult['PROPERTIES']['INSTRUCTION']['VALUE'])): ?>
                        <a class="link" href="<?= $arResult['PROPERTIES']['INSTRUCTION']['SRC'] ?>">
                            <svg class="sprite-svg">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#pdf"></use>
                            </svg>
                            <?= $arResult['PROPERTIES']['INSTRUCTION']['ORIGINAL_NAME'] ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="card-info__top-price">
                    <?php if ($arParams['SHOW_OLD_PRICE'] === 'Y' && $price['RATIO_PRICE'] < $price['RATIO_BASE_PRICE']): ?>
                        <div class="old"><span>старая цена</span><span><?= $price['PRINT_RATIO_BASE_PRICE'] ?></span>
                        </div>
                    <?php endif; ?>
                    <div class="new"><?= $price['PRINT_RATIO_PRICE']; ?></div>
                    <div class="list-shop"><span class="list-shop__name">Наличие товара по магазинам</span>
                        <ul class="location-block__ul list-shop__ul">
                            <li class="ico-placeholder"><a href="/contacts/">Магазин
                                    на<span>Наполеона, 23</span></a>
                                <div>8 (017) 555-11-22</div>
                            </li>
                            <li class="ico-placeholder"><a href="/contacts/">Магазин
                                    на<span>Наполеона, 23</span></a>
                                <div>8 (017) 555-11-22</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-info__bottom">
                <div class="card-info__bottom-block card-info__bottom-param">
                    <ul>
                        <?php foreach ($arResult['BOTTOM_PROPS'] as $prop): ?>
                            <?php if (!empty($prop['VALUE'])): ?>
                                <li>
                                    <span><?= $prop['NAME'] ?>:</span><span><?= $prop['VALUE'] ?></span>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="card-info__bottom-block">
                    <a class="compare--link" href="#">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#compare"></use>
                        </svg>
                        Добавить к сравнению
                    </a>
                </div>
                <div class="card-info__bottom-block card-info__bottom-btns" id="<?= $itemIds['BASKET_ACTIONS'] ?>">
                    <?php if ($actualItem['CAN_BUY']): ?>
                        <a class="link--buy" href="javascript:void(0)" id="<?= $itemIds['BUY_LINK'] ?>">
                            <svg class="sprite-svg">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#shopping-bag"></use>
                            </svg>
                            КУПИТЬ
                        </a>
                    <?php else: ?>
                        <div>
                            <a id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)" rel="nofollow">
                                <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                            </a>
                        </div>
                    <?php endif; ?>


                </div>
                <div class="card-info--for-mob">
                    <div class="card-info__bottom-block card-info__bottom-param">
                        <ul>
                            <li><span>Штрих-код:</span><span>4605067017631</span></li>
                            <li><span>Код товара:</span><span>00000006198</span></li>
                            <li><span>Артикул изготовителя:</span><span>МБ1-Б Мульти НОРМ RS950</span></li>
                        </ul>
                    </div>
                    <div class="card-info__top-links"><a class="link" href="#">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#video"></use>
                            </svg>
                            Видеообзор</a><a class="link" href="#">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#pdf"></use>
                            </svg>
                            Инструкция к мотоблоку.pdf</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="extra-block">
        <div class="container">
            <div class="extra-block__zag">
                Этот товар
                <b>дополняют:</b>
            </div>
            <div class="extra-block__container">
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags novinki">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#novinki"></use>
                                </svg>
                                <div class="tooltip-ico"><span>Новинки</span></div>
                            </div>
                            <div class="flags tehniche">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#tehniche"></use>
                                </svg>
                                <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
                            </div>
                            <div class="flags one">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#onePost"></use>
                                </svg>
                                <div class="tooltip-ico"><span>1-й поставщик</span></div>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/c1.png)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая</div>
                                <div class="name">AL-KO Hightline 42.5 P-A</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
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
                                        <use xlink:href="./images/sprite/sprite.svg#video"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Видеозор</span></div>
                                </a><a class="catalog-item__ico-compare" href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>В сравнении</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg" id="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#click-one"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>В корзине</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
                                <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#onePost"></use>
                                </svg>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c3.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
                                <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#video"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Видеозор</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#onePost"></use>
                                </svg>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c3.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
                                <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#video"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Видеозор</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags novinki">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#novinki"></use>
                                </svg>
                                <div class="tooltip-ico"><span>Новинки</span></div>
                            </div>
                            <div class="flags tehniche">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#tehniche"></use>
                                </svg>
                                <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
                            </div>
                            <div class="flags one">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#onePost"></use>
                                </svg>
                                <div class="tooltip-ico"><span>1-й поставщик</span></div>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/c1.png)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая</div>
                                <div class="name">AL-KO Hightline 42.5 P-A</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
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
                                        <use xlink:href="./images/sprite/sprite.svg#video"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Видеозор</span></div>
                                </a><a class="catalog-item__ico-compare" href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>В сравнении</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg" id="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#click-one"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>В корзине</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
                                <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="extra-block">
        <div class="container">
            <div class="extra-block__zag">
                Из этой же
                <b>категории:</b>
            </div>
            <div class="extra-block__container">
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags novinki">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#novinki"></use>
                                </svg>
                                <div class="tooltip-ico"><span>Новинки</span></div>
                            </div>
                            <div class="flags tehniche">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#tehniche"></use>
                                </svg>
                                <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
                            </div>
                            <div class="flags one">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#onePost"></use>
                                </svg>
                                <div class="tooltip-ico"><span>1-й поставщик</span></div>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/c1.png)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая</div>
                                <div class="name">AL-KO Hightline 42.5 P-A</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
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
                                        <use xlink:href="./images/sprite/sprite.svg#video"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Видеозор</span></div>
                                </a><a class="catalog-item__ico-compare" href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>В сравнении</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg" id="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#click-one"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>В корзине</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
                                <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#onePost"></use>
                                </svg>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c3.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
                                <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#video"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Видеозор</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags one">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#onePost"></use>
                                </svg>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c3.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G с плугом и почвофрезой</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
                                <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                                <div class="block"><span>Объём двигателя:</span><span>4 м3</span></div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="new">590,00 руб</span><span class="old">750,00руб</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#video"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Видеозор</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <div class="flags novinki">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#novinki"></use>
                                </svg>
                                <div class="tooltip-ico"><span>Новинки</span></div>
                            </div>
                            <div class="flags tehniche">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#tehniche"></use>
                                </svg>
                                <div class="tooltip-ico"><span>Гарантия 2 года</span></div>
                            </div>
                            <div class="flags one">
                                <svg class="sprite-svg">
                                    <use xlink:href="./images/sprite/sprite.svg#onePost"></use>
                                </svg>
                                <div class="tooltip-ico"><span>1-й поставщик</span></div>
                            </div>
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/c1.png)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая</div>
                                <div class="name">AL-KO Hightline 42.5 P-A</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
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
                                        <use xlink:href="./images/sprite/sprite.svg#video"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Видеозор</span></div>
                                </a><a class="catalog-item__ico-compare" href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>В сравнении</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg" id="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#click-one"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Купить в 1 клик</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>В корзине</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="catalog-item">
                        <div class="catalog-item__flags">
                            <!--+b('flags novinki')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#novinki")-->
                            <!--+b('flags tehniche')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#tehniche")-->
                            <!--+b('flags one')-->
                            <!--    svg(class="sprite-svg")-->
                            <!--        use(xlink:href="./images/sprite/sprite.svg#onePost")-->
                        </div>
                        <a class="catalog-item__img lazy" href="#"
                           data-bg="url(<?= SITE_TEMPLATE_PATH ?>/images/c2.png)"
                           style="background-image: url(data:image/gif;base64,R0lGODlhKwAgAIAAAP///wAAACH5BAEAAAEALAAAAAArACAAAAIjjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2bRcAOw==)"></a>
                        <div class="catalog-item__name">
                            <div>
                                <div class="pos">Газонокосилка бензиновая самоходная</div>
                                <div class="name">BOSCH TT 951 2479-G67-E</div>
                            </div>
                        </div>
                        <div class="catalog-item__param">
                            <div>
                                <div class="block"><span>Мощность двигателя:</span><span>27 лошадиные силы</span>
                                </div>
                                <div class="block"><span>Топливный бак (объем):</span><span>208 литров</span></div>
                            </div>
                        </div>
                        <div class="catalog-item__bottom">
                            <div class="catalog-item__price"><span class="current">780,00 руб.</span>
                            </div>
                            <div class="catalog-item__ico"><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#compare"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в сравнение</span></div>
                                </a><a href="#">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#shopping-bag"></use>
                                    </svg>
                                    <div class="tooltip-ico"><span>Добавить в корзину</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>