<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
    <article>
        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <div class="bx-breadcrumb">
                        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","agro_breadcrumb",Array(
                                "START_FROM" => "0",
                                "PATH" => "",
                                "SITE_ID" => "s1"
                            )
                        );?>
                    </div>
                </div>
                <div class="zag_main">
                    <h1>О компании</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="company-header">
                    <div class="company-header__logo"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo2.svg">
                        <p>20 лет продаём садовую<br>технику и оборудование</p>
                    </div>
                    <div class="company-header__img"><img src="<?=SITE_TEMPLATE_PATH?>/images/22.png"></div>
                    <div class="company-header__list">
                        <ul>
                            <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/settings.png)">Собственный сервисный центр</li>
                            <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/medal.png)">Первый поставщик техники и комплектующих в Беларуси</li>
                            <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/handshake.png)">52 B2B партнёра</li>
                            <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/wallet.png)">7432 покупателя</li>
                            <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/testimonial.png)">93 отзыва</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="company-certificate">
                <div class="container">
                    <div class="company-certificate__zag"><span>4 НАШИХ КИТА</span>
                        <ul>
                            <li>Опыт</li>
                            <li>Гарантия</li>
                            <li>Поддержка</li>
                            <li>Сервис</li>
                        </ul>
                    </div>
                    <div class="company-certificate__slide">
                        <div class="certificate-gallery__container zoom-gallery"><a href="<?=SITE_TEMPLATE_PATH?>/images/certificate/1.png"><img src="<?=SITE_TEMPLATE_PATH?>/images/certificate/1.png"></a><a href="<?=SITE_TEMPLATE_PATH?>/images/certificate/2.png"><img src="<?=SITE_TEMPLATE_PATH?>/images/certificate/2.png"></a><a href="<?=SITE_TEMPLATE_PATH?>/images/certificate/3.png"><img src="<?=SITE_TEMPLATE_PATH?>/images/certificate/3.png"></a><a href="<?=SITE_TEMPLATE_PATH?>/images/certificate/4.png"><img src="<?=SITE_TEMPLATE_PATH?>/images/certificate/4.png"></a><a href="<?=SITE_TEMPLATE_PATH?>/images/certificate/1.png"><img src="<?=SITE_TEMPLATE_PATH?>/images/certificate/1.png"></a><a href="<?=SITE_TEMPLATE_PATH?>/images/certificate/2.png"><img src="<?=SITE_TEMPLATE_PATH?>/images/certificate/2.png"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="company-text">
                    <div class="company-text__main"><img src="<?=SITE_TEMPLATE_PATH?>/images/1.png">
                        <div class="h3">Пара предложений о нас</div>
                        <p>Норм-сайт специализируется на продаже садовой техники и комплектующих по всей стране. Каждый год мы продаем около 5 000 товаров, которые помогают людям в сельском хозяйстве.</p>
                        <p>Бизнес-идея НОРМпарка основана на желании изменить жизнь людей к лучшему, предлагая простоту Ки надежность покупки, обслуживание и сервис по всей поставляемой продукции.</p>
                        <p>Для компании имеет значение помощь в выборе техники под нужны человека. Мы хотим не только продавать, но и быть полезны. Поэтому менеджеры компании дают развёрнутую консультацию, знакомят с правилами управления техникой и интересуются вашими нуждами. Чтобы подобрать наиболее подходящую технику в нужной комплектации и с подходящим оснащением.</p>
                        <p>Компания осуществляет техническую поддержк у, гарантийное и послегарантийное обслуживание поставляемого оборудования. Всегда в наличии на складе оригинальные запчасти на всю технику.</p>
                    </div>
                    <div class="company-text__right"><img src="<?=SITE_TEMPLATE_PATH?>/images/2.png">
                        <div class="h3">Магазин</div>
                        <p>Магазин Наш магазин находится<a href="#">по адресу Наполеона, 23.</a>В нём вы        можете посмотреть и протестировать любую технику и оборудование.</p><img src="<?=SITE_TEMPLATE_PATH?>/images/3.png">
                        <div class="h3">Сервис</div>
                        <p><a href="#">Сервис На Уборевича, 31</a>находится наш сервисный центр. В нём мы осуществляем<strong>гарантийно е и постгарантийное обслуживание,</strong>продаём и    ремонтируем запчасти.</p>
                    </div>
                </div>
            </div>
            <div class="hr"></div>
        </section>
        <section>
            <div class="company-contact">
                <div class="container">
                    <div class="h2">Реквизиты<strong>ОДО «Норм-сайт»</strong></div>
                    <div class="company-contact__list">
                        <div class="company-contact__list-finance">
                            <ul>
                                <li><strong>Код банка:</strong>TTTBB11</li>
                                <li><strong>Счет BYN:</strong>BB11111111112222222222233333382<br>в ООО «Банк Решение» г.Минск, ул.Уральская 12<br><br></li>
                                <li><strong>УНН  1111111</strong></li>
                                <li><strong>ОКПО 22222222</strong><br><br></li>
                                <li><strong>Директор:</strong>Иванов Иван Иванович <br>(на основании Устава)</li>
                            </ul>
                        </div>
                        <div class="company-contact__list-info">
                            <ul>
                                <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/box.png"><span class="red">Юридический адрес</span><span>330011 г. Минск, ул.Уральская 17, офис 3.</span></li>
                                <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/location.png"><span class="red">Почтовый адрес</span><span>330011 г. Минск, ул.Уральская 17, офис 3.</span></li>
                                <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/warehouse.png"><span class="red">Пункт разгрузки, склад,<br>адрес доставки для выписки<br>ТТН и СМР:</span><span>330011 Минск Наполеона 23</span></li>
                                <li style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/customer-support.svg"><span class="red">Телефоны</span><a href="tel:80291112233">8 (029) 111-22-33 (Велком)</a><a href="tel:80291112233">8 (029) 111-22-33 (Велком)</a><a href="tel:80291112233">8 (029) 111-22-33 (Велком)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="company-brands">
                <div class="brands">
                    <div class="container">
                        <div class="brands__text"><span>Наши</span><span>клиенты</span></div>
                        <div class="brands__img"><a class="img wow fadeInUp" href="#" data-wow-delay=".5s"></a><a class="img wow fadeInUp" href="#" data-wow-delay=".5s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo1.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay=".6s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo2.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay=".7s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo3.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay=".8s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo4.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay=".9s"></a><a class="img wow fadeInUp" href="#" data-wow-delay=".9s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo5.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay="1s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo6.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay="1.1s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo7.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay="1.2s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo8.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay="1.3s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo9.svg"></a><a class="img wow fadeInUp" href="#" data-wow-delay="1.4s"><img class="lazy" data-src="<?=SITE_TEMPLATE_PATH?>/images/brands/logo10.svg"></a></div>
                    </div>
                </div>
            </div>
        </section>
    </article>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>