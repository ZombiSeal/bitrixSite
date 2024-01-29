<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
//vr($arResult['GRID']['ROWS']);
use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

$this->addExternalJs(SITE_TEMPLATE_PATH . '/components/bitrix/sale.basket.basket/basket/js/action-pool.js');
$this->addExternalJs(SITE_TEMPLATE_PATH . '/components/bitrix/sale.basket.basket/basket/js/filter.js');
$this->addExternalJs(SITE_TEMPLATE_PATH . '/components/bitrix/sale.basket.basket/basket/js/component.js');
?>
<section>
    <div class="container">
        <div id="basket-root" class="basket">
            <?php if (!empty($arResult['GRID']['ROWS'])): ?>
                <div class="basket-header">
                    <div class="basket-header__promo">
                        <div class="input-text-label">
                            <label>Введите купон для скидки</label>
                            <input type="text">
                            <input type="submit">
                        </div>
                    </div>
                    <div class="basket-header__price">
                        <div class="basket-header__price-num"><span>Итого:</span>
                            <div class="num">
                                <div class="new"><?=$arResult['allSum_FORMATED']?></div>
                                <div class="old"><?=$arResult['PRICE_WITHOUT_DISCOUNT']?></div>
                            </div>
                        </div>
                        <div class="basket-header__price-econom"><span>Экономия:</span>
                            <div class="num"><?=$arResult['DISCOUNT_PRICE_ALL_FORMATED']?></div>
                        </div>
                    </div>
                    <div class="basket-header__btn">
                        <a class="sbmt--red" href="<?=$arParams['PATH_TO_ORDER']?>">Оформить заказ</a>
                        <button class="btn--gray">Быстрый заказ</button>
                    </div>
                </div>
                <div id="basket-warning">
                    <div data-entity="basket-general-warnings"></div>
                    <div data-entity="basket-item-warnings">
                        <?=Loc::getMessage('SBB_BASKET_ITEM_WARNING')?>
                    </div>
                </div>
                <div id="basket-items-list-wrapper" class="basket-items-list basket-container">
                    <div id="basket-items-list-container">
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
                        <?php foreach ($arResult['GRID']['ROWS'] as $row): ?>
                            <div id="basket-item-<?=$row['ID']?>" class="basket-item basket-item-page" data-entity="basket-item" data-id="<?=$row['ID']?>">
                                <div class="basket-item__img">
                                    <div class="bg" style="background-image: url(<?= $row['PREVIEW_PICTURE_SRC'] ?>)"></div>
                                </div>
                                <div class="basket-item__name"><span><?= $row['NAME'] ?></span></div>
                                <div class="basket-item__discount"><span class="for--mob">Скидка</span><span
                                            class="red"><?= $row['DISCOUNT_PRICE_PERCENT_FORMATED'] ?></span>
                                </div>
                                <div class="basket-item__price">
                                    <span class="for--mob">Цена</span>
                                    <span class="new"><?=$row['PRICE_FORMATED']?></span>
                                    <?php if($row['PRICE'] !== $row['FULL_PRICE']):?>
                                        <span class="old"><?=$row['FULL_PRICE_FORMATED']?></span>
                                    <?php endif;?>

                                </div>
                                <div class="basket-item__weight"><span class="for--mob">Вес</span><span><?=$row['WEIGHT_FORMATED']?></span></div>
                                <div class="basket-item__count"><span class="for--mob">Количество</span>
                                    <div class="click-counter">
                                        <button class="plus">+</button>
                                        <input class="num--inset" type="text" value="<?=$row['QUANTITY']?>">
                                        <button class="minus">-</button>
                                    </div>
                                </div>
                                <div class="basket-item__total">
                                    <span class="for--mob">Сумма</span>
                                    <span class="new"><?=$row['SUM']?></span>
                                    <?php if($row['SUM_VALUE'] !== $row['SUM_FULL_PRICE']):?>
                                        <span class="old"><?=$row['SUM_FULL_PRICE_FORMATED']?></span>
                                    <?php endif;?>

                                </div>
                                <div class="basket-item__delet">
                                    <button class="delete" data-entity="basket-item-delete">
                                        <svg class="sprite-svg">
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#delete"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>
                В корзине нет товаров
            <?php endif; ?>

        </div>
    </div>
    <?php
    $signer = new \Bitrix\Main\Security\Sign\Signer;
    $signedTemplate = $signer->sign($templateName, 'sale.basket.basket');
    $signedParams = $signer->sign(base64_encode(serialize($arParams)), 'sale.basket.basket');
    $messages = Loc::loadLanguageFile(__FILE__);
    ?>
    <script>
        BX.message(<?=CUtil::PhpToJSObject($messages)?>);
        BX.Sale.BasketComponent.init({
            result: <?=CUtil::PhpToJSObject($arResult, false, false, true)?>,
            params: <?=CUtil::PhpToJSObject($arParams)?>,
            template: '<?=CUtil::JSEscape($signedTemplate)?>',
            signedParamsString: '<?=CUtil::JSEscape($signedParams)?>',
            siteId: '<?=CUtil::JSEscape($component->getSiteId())?>',
            siteTemplateId: '<?=CUtil::JSEscape($component->getSiteTemplateId())?>',
            templateFolder: '<?=CUtil::JSEscape($templateFolder)?>'
        });
    </script>
</section>