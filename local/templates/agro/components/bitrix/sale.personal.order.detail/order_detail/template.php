<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

/** @global CMain $APPLICATION */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $templateFolder */

use Bitrix\Main\Page\Asset;

if ($arParams['GUEST_MODE'] !== 'Y')
{
	Asset::getInstance()->addJs("/bitrix/components/bitrix/sale.order.payment.change/templates/.default/script.js");
}

$APPLICATION->SetTitle("");

if (!empty($arResult['ERRORS']['FATAL']))
{
	foreach ($arResult['ERRORS']['FATAL'] as $error)
	{
		ShowError($error);
	}

	$component = $this->__component;

	if ($arParams['AUTH_FORM_IN_TEMPLATE'] && isset($arResult['ERRORS']['FATAL'][$component::E_NOT_AUTHORIZED]))
	{
		$APPLICATION->AuthForm('', false, false, 'N', false);
	}
}
else
{
	if (!empty($arResult['ERRORS']['NONFATAL']))
	{
		foreach ($arResult['ERRORS']['NONFATAL'] as $error)
		{
			ShowError($error);
		}
	}
	?>
    <div class="lc-content">
        <div class="lc-history lc-history-info">
            <div class="lc-history__top">
                <ul>
                    <li>Товар</li>
                    <li>Количество</li>
                    <li>Цена</li>
                </ul>
            </div>
            <div class="lc-history__content catalog-container active">
                <div class="lc-history__block">
                    <div class="lc-history__block-info__name">
                        <div class="num">Заказ № <?=htmlspecialcharsbx($arResult["ACCOUNT_NUMBER"])?></div>
                        <div class="price">Сумма заказа: <?=$arResult["PRICE_FORMATED"]?></div>
                    </div>
                    <?php foreach ($arResult['BASKET'] as $basketItem):?>
                        <div class="lc-history__block-info__item">
                            <div class="lc-history__block-info__item-img">
                                <div class="bg" style="background-image: url(<?=$basketItem['PICTURE']['SRC']?>)"></div>
                            </div>
                            <div class="lc-history__block-info__item-text">
                                <div class="text">
                                    <div class="name"><?=htmlspecialcharsbx($basketItem['NAME'])?></div>
                                    <ul>
                                        <li><span>Штрих-код:</span><span><?=(!empty($basketItem['PROPERTY_BARCODE_VALUE'])) ? $basketItem['PROPERTY_BARCODE_VALUE'] : 'нет'?></span></li>
                                        <li><span>Артикул изготовителя:</span><span><?=(!empty($basketItem['PROPERTY_ARTICLE_VALUE'])) ? $basketItem['PROPERTY_ARTICLE_VALUE'] : 'нет'?></span></li>
                                        <li><span>Код товара:</span><span><?=(!empty($basketItem['PROPERTY_CODE_VALUE'])) ? $basketItem['PROPERTY_CODE_VALUE'] : 'нет'?></span></li>
                                    </ul>
                                </div>
                                <div class="lc-history__block-info__item-num"><span class="name">Количество</span><span><?=$basketItem['QUANTITY']?>&nbsp;шт.</span></div>
                                <div class="lc-history__block-info__item-num"><span class="name">Цена</span><span><?=$basketItem['FORMATED_SUM']?></span></div>

                                   <?php if($arResult['STATUS_ID'] === 'DN' || $arResult['STATUS_ID'] === 'F'):?>
                                        <div class="lc-history__block-info__item-link">
                                            <a class="link--refresh refresh-product" data-id="<?=$basketItem['PRODUCT_XML_ID']?>" quantity="<?=$basketItem['QUANTITY']?>">
                                                <svg class="sprite-svg">
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#refresh"></use>
                                                </svg>повторить
                                            </a>
                                        </div>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="lc-content__bottom-btns">
            <?php foreach ($arResult['PAYMENT'] as $pay):
                if ($arResult['STATUS_ID'] === 'N'):?>
                    <div>
                        <div class="state">
                            <b><?= $pay['PAY_SYSTEM_NAME'] ?>:</b>
                            <span class="red"><?= GetMessage('SPOD_PAYMENT_UNPAID') ?></span>
                        </div>
                        <?php if( $pay['PAY_SYSTEM']['IS_CASH'] === 'N'):?>
                        <a class="sbmt" href="/basket/order/?ORDER_ID=<?=$arResult['ID']?>"><?= GetMessage('SPOD_ORDER_PAY') ?></a>
                        <?php endif;?>
                    </div>
                <?php elseif($arResult['STATUS_ID'] === 'F'):?>
                    <a class="repeat-order link--refresh link--gray" href="<?= $arResult["URL_TO_COPY"] ?>">
                        <svg class="sprite-svg">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#refresh"></use>
                        </svg>
                        ПОВТОРИТЬ ЗАКАЗ
                    </a>
                    <div>
                        <div class="state">
                            <b><?= $pay['PAY_SYSTEM_NAME'] ?>:</b>
                            <span><?= GetMessage('SPOD_PAYMENT_PAID') ?></span>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
	<?php
	$javascriptParams = array(
		"url" => CUtil::JSEscape($this->__component->GetPath().'/ajax.php'),
		"templateFolder" => CUtil::JSEscape($templateFolder),
		"templateName" => $this->__component->GetTemplateName(),
		"paymentList" => $paymentData,
		"returnUrl" => $arResult['RETURN_URL'],
	);
	$javascriptParams = CUtil::PhpToJSObject($javascriptParams);
	?>
	<script>
		BX.Sale.PersonalOrderComponent.PersonalOrderDetail.init(<?=$javascriptParams?>);
	</script>
<?php
}
