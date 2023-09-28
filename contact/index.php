<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/block/contact.css');
?>
    <article>
        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <div class="bx-breadcrumb">
                        <div class="bx-breadcrumb-item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" itemref="bx_breadcrumb_1"><a href="/" title="agro-park" itemprop="url"><span itemprop="title">Главная</span></a></div>
                        <div class="bx-breadcrumb-item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" itemref="bx_breadcrumb_1"><a href="/" title="agro-park" itemprop="url"><span itemprop="title"> каталог товаров</span></a></div>
                        <div class="bx-breadcrumb-item"><span> Контакты</span></div>
                    </div>
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
                        <li class="active">Магазины</li>
                        <li>Сервисный центр/Запчасти</li>
                        <li>Склад/Офис</li>
                    </ul>
                </div>
                <div class="tabs-content active"><img class="map" src="<?=SITE_TEMPLATE_PATH?>/images/carta.png">
                    <div class="container">
                        <div class="location-block">
                            <ul class="location-block__ul">
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Наполеона, 23</span></a>
                                    <div class="arrow">
                                        <svg class="sprite-svg icon icon-ar-down ">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#ar-down"></use>
                                        </svg>
                                    </div>
                                    <ul class="drop">
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li class="time"><strong>Время работы:</strong>
                                            <p>пн. - пт. с 10.00 до 19.00</p>
                                            <p>сб. - вс. с 10.00 до 17.00</p>
                                        </li>
                                        <li><a class="mail" href="mailto:info@agrКopark.by">info@agrКopark.by</a></li>
                                    </ul>
                                </li>
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Неманская, 45</span></a>
                                    <div class="arrow">
                                        <svg class="sprite-svg icon icon-ar-down ">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#ar-down"></use>
                                        </svg>
                                    </div>
                                    <ul class="drop">
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li class="time"><strong>Время работы:</strong>
                                            <p>пн. - пт. с 10.00 до 19.00</p>
                                            <p>сб. - вс. с 10.00 до 17.00</p>
                                        </li>
                                        <li><a class="mail" href="mailto:info@agrКopark.by">info@agrКopark.by</a></li>
                                    </ul>
                                </li>
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Уборевича, 31</span></a>
                                    <div class="arrow">
                                        <svg class="sprite-svg icon icon-ar-down ">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#ar-down"></use>
                                        </svg>
                                    </div>
                                    <ul class="drop">
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li class="time"><strong>Время работы:</strong>
                                            <p>пн. - пт. с 10.00 до 19.00</p>
                                            <p>сб. - вс. с 10.00 до 17.00</p>
                                        </li>
                                        <li><a class="mail" href="mailto:info@agrКopark.by">info@agrКopark.by</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tabs-content"><img class="map" src="<?=SITE_TEMPLATE_PATH?>/images/carta.png">
                    <div class="container">
                        <div class="location-block">
                            <ul class="location-block__ul">
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Наполеона, 23</span></a>
                                    <div class="arrow">
                                        <svg class="sprite-svg icon icon-ar-down ">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#ar-down"></use>
                                        </svg>
                                    </div>
                                    <ul class="drop">
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li class="time"><strong>Время работы:</strong>
                                            <p>пн. - пт. с 10.00 до 19.00</p>
                                            <p>сб. - вс. с 10.00 до 17.00</p>
                                        </li>
                                        <li><a class="mail" href="mailto:info@agrКopark.by">info@agrКopark.by</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tabs-content"><img class="map" src="<?=SITE_TEMPLATE_PATH?>/images/carta.png">
                    <div class="container">
                        <div class="location-block">
                            <ul class="location-block__ul">
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Неманская, 45</span></a>
                                    <div class="arrow">
                                        <svg class="sprite-svg icon icon-ar-down ">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#ar-down"></use>
                                        </svg>
                                    </div>
                                    <ul class="drop">
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li class="time"><strong>Время работы:</strong>
                                            <p>пн. - пт. с 10.00 до 19.00</p>
                                            <p>сб. - вс. с 10.00 до 17.00</p>
                                        </li>
                                        <li><a class="mail" href="mailto:info@agrКopark.by">info@agrКopark.by</a></li>
                                    </ul>
                                </li>
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Наполеона, 23</span></a>
                                    <div class="arrow">
                                        <svg class="sprite-svg icon icon-ar-down ">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#ar-down"></use>
                                        </svg>
                                    </div>
                                    <ul class="drop">
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li class="time"><strong>Время работы:</strong>
                                            <p>пн. - пт. с 10.00 до 19.00</p>
                                            <p>сб. - вс. с 10.00 до 17.00</p>
                                        </li>
                                        <li><a class="mail" href="mailto:info@agrКopark.by">info@agrКopark.by</a></li>
                                    </ul>
                                </li>
                                <li class="ico-placeholder"><a href="#">Магазин на<span>Уборевича, 31</span></a>
                                    <div class="arrow">
                                        <svg class="sprite-svg icon icon-ar-down ">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#ar-down"></use>
                                        </svg>
                                    </div>
                                    <ul class="drop">
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li><a href="tel:80297002244">8 (029)<strong>700-22-44</strong></a></li>
                                        <li class="time"><strong>Время работы:</strong>
                                            <p>пн. - пт. с 10.00 до 19.00</p>
                                            <p>сб. - вс. с 10.00 до 17.00</p>
                                        </li>
                                        <li><a class="mail" href="mailto:info@agrКopark.by">info@agrКopark.by</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="contact--bg">
                <div class="form-opt">
                    <div class="form-opt__container">
                        <div class="form-opt__zag">Напишите нам, если<strong>хотите стать оптовым клиентом</strong></div>
                        <p class="form-opt__p">Если у вас есть замечания, предложения, идеи для сотрудничества, напишите нам.<br>Руководство компании НОРМпарк знакомятся со всеми замечаниями и предложениями.</p>
                        <div class="form-opt__form">
                            <form>
                                <div class="input-text-label w2">
                                    <label>Введите ваше имя</label>
                                    <input class="required--input" type="text">
                                </div>
                                <div class="input-text-label w2">
                                    <label>Введите ваш телефон</label>
                                    <input class="required--input" type="text">
                                </div>
                                <div class="input-text-label">
                                    <label>Введите текст вашего сообщения</label>
                                    <input class="required--input" type="text">
                                </div>
                                <input class="required--sbmt" type="submit" value="отправить">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>