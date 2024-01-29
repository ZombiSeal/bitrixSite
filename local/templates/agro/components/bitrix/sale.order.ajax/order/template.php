<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<section>
    <div class="container">
        <div class="checkout__container">
            <div class="checkout__info">
                <div class="checkout__info-step open">
                    <div class="checkout__info-step__num"><span class="num">1</span><span class="text">Тип покупателя и регион доставки</span></div>
                    <div class="checkout__info-step__container">
                        <div class="checkout__info-step__type">
                            <div class="name">Тип плательщика:</div>
                            <label>
                                <input class="styler" type="radio" name="type"><span>Физичуское лицо</span>
                            </label>
                            <label>
                                <input class="styler" type="radio" name="type"><span>Юридическое лицо</span>
                            </label>
                        </div>
                        <div class="checkout__info-step__address">
                            <div class="name">Город:</div>
                            <input class="search--ico" type="text" placeholder="Минск">
                            <p>Начните вводить название города. Появится выпадающий список. Выберите в нем название своего города.</p>
                            <div class="name">Индекс:</div>
                            <input class="num--inset" type="text" placeholder="201010">
                        </div>
                    </div>
                </div>
                <div class="checkout__info-step">
                    <div class="checkout__info-step__num"><span class="num">2</span><span class="text">Доставка и оплата</span></div>
                    <div class="checkout__info-step__container">
                        <div class="checkout__info-step__delPay">
                            <label class="block">
                                <input type="checkbox" name="Самовывоз">
                                <div class="ico">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#car-delivery"></use>
                                    </svg>
                                </div>
                                <div class="text"><span class="name">Самовывоз</span><span class="num">0 руб</span></div>
                            </label>
                            <label class="block">
                                <input type="checkbox" name="Курьером">
                                <div class="ico">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#delivery-man"></use>
                                    </svg>
                                </div>
                                <div class="text"><span class="name">Курьером</span><span class="num">0 руб</span></div>
                            </label>
                            <label class="block">
                                <input type="checkbox" name="Служба DPD">
                                <div class="ico"><img src="./images/checkout/dpd.png"></div>
                                <div class="text"><span class="name">Служба DPD</span><span class="num">10 руб</span></div>
                            </label>
                            <label class="block">
                                <input type="checkbox" name="Белпочта">
                                <div class="ico"><img src="./images/checkout/belposhta_logo.png"></div>
                                <div class="text"><span class="name">Белпочта</span><span class="num">10 руб</span></div>
                            </label>
                        </div>
                        <div class="checkout__info-step__delPay">
                            <label class="block" data-pay="1">
                                <input type="checkbox" name="Карта онлайн">
                                <div class="ico">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#credit-card"></use>
                                    </svg>
                                </div>
                                <div class="text"><span class="name">Карта онлайн</span></div>
                            </label>
                            <label class="block" data-pay="2">
                                <input type="checkbox" name="Курьером">
                                <div class="ico">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#cash"></use>
                                    </svg>
                                </div>
                                <div class="text"><span class="name">Наличные или карта курьеру</span></div>
                            </label>
                            <label class="block" data-pay="3">
                                <input type="checkbox" name="Служба DPD">
                                <div class="ico"><img src="./images/checkout/raschet.png"></div>
                                <div class="text"><span class="name">Ерип</span></div>
                            </label>
                            <label class="block">
                                <input type="checkbox" name="Белпочта">
                                <div class="ico">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#piggy-bank-gray"></use>
                                    </svg>
                                </div>
                                <div class="text"><span class="name">Карты рассрочки</span></div>
                            </label>
                        </div>
                    </div>
                    <div class="checkout__info-step__delPay-bot" data-pay="1">
                        <label class="block">
                            <input type="checkbox" name="Карта онлайн">
                            <div class="ico"><img src="./images/checkout/bps.png"></div>
                            <div class="text"><span class="name">Карта FUN</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Курьером">
                            <div class="ico"><img src="./images/checkout/halva.png"></div>
                            <div class="text"><span class="name">Халва</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Служба DPD">
                            <div class="ico"><img src="./images/checkout/smart.png"></div>
                            <div class="text"><span class="name">Смарткарта</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Белпочта">
                            <div class="ico"><img src="./images/checkout/cherepaha.png"></div>
                            <div class="text"><span class="name">Черепаха</span></div>
                        </label>
                    </div>
                    <div class="checkout__info-step__delPay-bot" data-pay="2">
                        <label class="block">
                            <input type="checkbox" name="Карта онлайн">
                            <div class="ico"><img src="./images/checkout/bps.png"></div>
                            <div class="text"><span class="name">Карта FUN</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Курьером">
                            <div class="ico"><img src="./images/checkout/halva.png"></div>
                            <div class="text"><span class="name">Халва</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Служба DPD">
                            <div class="ico"><img src="./images/checkout/smart.png"></div>
                            <div class="text"><span class="name">Смарткарта</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Белпочта">
                            <div class="ico"><img src="./images/checkout/cherepaha.png"></div>
                            <div class="text"><span class="name">Черепаха</span></div>
                        </label>
                    </div>
                    <div class="checkout__info-step__delPay-bot" data-pay="3">
                        <label class="block">
                            <input type="checkbox" name="Карта онлайн">
                            <div class="ico"><img src="./images/checkout/bps.png"></div>
                            <div class="text"><span class="name">Карта FUN</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Курьером">
                            <div class="ico"><img src="./images/checkout/halva.png"></div>
                            <div class="text"><span class="name">Халва</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Служба DPD">
                            <div class="ico"><img src="./images/checkout/smart.png"></div>
                            <div class="text"><span class="name">Смарткарта</span></div>
                        </label>
                        <label class="block">
                            <input type="checkbox" name="Белпочта">
                            <div class="ico"><img src="./images/checkout/cherepaha.png"></div>
                            <div class="text"><span class="name">Черепаха</span></div>
                        </label>
                    </div>
                </div>
                <div class="checkout__info-step">
                    <div class="checkout__info-step__promo"><span class="text">Применить купон:</span>
                        <input type="text" placeholder="209875">
                        <input type="submit" value=""><span class="bx-soa-coupon-item"><strong class="bx-soa-coupon-item-danger" data-coupon="папа">папа<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="ваывпып">ваывпып<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="пыап">пыап<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="ы">ы<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="п">п<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="ып">ып<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="пы">пы<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="впывп">впывп<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="вп">вп<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="ыв">ыв<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong><strong class="bx-soa-coupon-item-danger" data-coupon="ывп">ывп<span class="bx-soa-coupon-remove"></span><span class="bx-soa-tooltip bx-soa-tooltip-coupon bx-soa-tooltip-danger tooltip top"><span class="tooltip-arrow"></span><span class="tooltip-inner">Не найден</span></span></strong></span>
                    </div>
                </div>
                <div class="checkout__info-step">
                    <div class="checkout__info-step__num"><span class="num">3</span><span class="text">Информация о покупателе</span></div>
                    <div class="checkout__info-step__container">
                        <div class="checkout__info-step__info">
                            <div class="input-text-label">
                                <label>Введите ваше имя</label>
                                <input type="text" placeholder="">
                            </div>
                            <div class="input-text-label">
                                <label>Индекс</label>
                                <input class="num--inset" type="text" placeholder="">
                            </div>
                            <div class="input-text-label">
                                <label>Введите ваш телефон</label>
                                <input type="text" placeholder="">
                            </div>
                            <div class="input-text-label">
                                <label>Адрес доставки</label>
                                <input type="text" placeholder="">
                            </div>
                            <div class="input-text-label">
                                <label>Введите ваш email</label>
                                <input type="text" placeholder="">
                            </div>
                        </div>
                        <div class="checkout__info-step__map"><img src="./images/map.png"></div>
                        <div class="checkout__info-step__info">
                            <div class="input-text-label w100">
                                <label>Введите ваш телефон</label>
                                <input type="text" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basket-container">
                    <div class="basket-container__top"><span>Товары в корзине</span><a href="#">Подробнее</a></div>
                    <div class="basket-container__param">
                        <ul>
                            <li>Товар</li>
                            <li>Скидка</li>
                            <li>Цена</li>
                            <li>Вес</li>
                            <li>Количество</li>
                            <li>Сумма</li>
                        </ul>
                    </div>
                    <div class="basket-item">
                        <div class="basket-item__img">
                            <div class="bg" style="background-image: url(./images/c1.png)"></div>
                        </div>
                        <div class="basket-item__name"><span>Мотоблок Нева МБ1-Б 6,5 МультиНОРМ</span></div>
                        <div class="basket-item__discount"><span class="for--mob">Скидка</span><span class="red">5 %</span></div>
                        <div class="basket-item__price"><span class="for--mob">Цена</span><span class="new">145 870 руб</span><span class="old">290 000 руб</span></div>
                        <div class="basket-item__weight"><span class="for--mob">Вес</span><span>200 кг.</span></div>
                        <div class="basket-item__count"><span class="for--mob">Количество</span><span>2 шт.</span></div>
                        <div class="basket-item__total"><span class="for--mob">Сумма</span><span class="new">145 870 руб</span><span class="old">290 000 руб</span></div>
                    </div>
                    <div class="basket-item">
                        <div class="basket-item__img">
                            <div class="bg" style="background-image: url(./images/c1.png)"></div>
                        </div>
                        <div class="basket-item__name"><span>Мотоблок Нева МБ1-Б 6,5 МультиНОРМ</span></div>
                        <div class="basket-item__discount"><span class="for--mob">Скидка</span><span class="red">5 %</span></div>
                        <div class="basket-item__price"><span class="for--mob">Цена</span><span class="new">145 870 руб</span><span class="old">290 000 руб</span></div>
                        <div class="basket-item__weight"><span class="for--mob">Вес</span><span>200 кг.</span></div>
                        <div class="basket-item__count"><span class="for--mob">Количество</span><span>2 шт.</span></div>
                        <div class="basket-item__total"><span class="for--mob">Сумма</span><span class="new">145 870 руб</span><span class="old">290 000 руб</span></div>
                    </div>
                    <div class="basket-item">
                        <div class="basket-item__img">
                            <div class="bg" style="background-image: url(./images/c1.png)"></div>
                        </div>
                        <div class="basket-item__name"><span>Мотоблок Нева МБ1-Б 6,5 МультиНОРМ</span></div>
                        <div class="basket-item__discount"><span class="for--mob">Скидка</span><span class="red">5 %</span></div>
                        <div class="basket-item__price"><span class="for--mob">Цена</span><span class="new">145 870 руб</span><span class="old">290 000 руб</span></div>
                        <div class="basket-item__weight"><span class="for--mob">Вес</span><span>200 кг.</span></div>
                        <div class="basket-item__count"><span class="for--mob">Количество</span><span>2 шт.</span></div>
                        <div class="basket-item__total"><span class="for--mob">Сумма</span><span class="new">145 870 руб</span><span class="old">290 000 руб</span></div>
                    </div>
                </div>
                <div class="checkout__info-submit">
                    <label>
                        <input class="styler" type="checkbox"><a><span>Я согласен на</span>обработку персональных данных</a>
                    </label>
                    <input class="sbmt--red" type="submit">
                </div>
            </div>
            <div class="checkout_price">
                <div class="checkout_price__top"><span>Ваш заказ</span><a href="#">Изменить</a></div>
                <div class="checkout_price__body">
                    <ul>
                        <li><span>Товаров на:</span><span>1 567 руб.</span></li>
                        <li><span>Доставка:</span><span>10 руб.</span></li>
                        <li class="econom"><span>Экономия:</span><span>25 руб.</span></li>
                    </ul>
                </div>
                <div class="checkout_price__bottom">
                    <input class="sbmt--red-border" type="submit" value="Оформить заказ">
                    <div class="total">Итого: 2 550 руб.</div>
                </div>
            </div>
        </div>
    </div>
</section>