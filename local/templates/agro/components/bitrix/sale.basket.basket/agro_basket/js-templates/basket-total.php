<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script id="basket-total-template" type="text/html">
    <?php
    if ($arParams['HIDE_COUPON'] !== 'Y'):
        ?>
        <div class="basket-header__promo">
            <div class="input-text-label">
                <label>Введите купон для скидки</label>
                <input type="text" data-entity="basket-coupon-input">
                <input type="submit">
            </div>

        </div>
    <?php endif; ?>
    <div class="basket-header__price">
        <div class="basket-header__price-num">
            <span>Итого:</span>
            <div class="num">
                <div class="new">{{{PRICE_FORMATED}}}</div>

                {{#DISCOUNT_PRICE_FORMATED}}
                <div class="old">
                    {{{PRICE_WITHOUT_DISCOUNT_FORMATED}}}
                </div>
                {{/DISCOUNT_PRICE_FORMATED}}
            </div>
        </div>
        {{#DISCOUNT_PRICE_FORMATED}}
        <div class="basket-header__price-econom">
                <div class="basket-header__price-econom">
                    <span>Экономия:</span>
                    <div class="num">{{DISCOUNT_PRICE_FORMATED}}</div>
                </div>
        </div>
        {{/DISCOUNT_PRICE_FORMATED}}
    </div>

    <div class="basket-header__btn">
        <a class="sbmt--red" href="<?= $arParams['PATH_TO_ORDER'] ?>" data-entity="basket-checkout-button">Оформить
            заказ</a>
        <button class="btn--gray">Быстрый заказ</button>
    </div>
</script>