<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var CBitrixPersonalOrderListComponent $component */
/** @var array $arParams */
/** @var array $arResult */

//if ($payment['PAID'] === 'Y')
//{
//    ?>
<!--    <span class="sale-order-list-status-success">--><?php //=Loc::getMessage('SPOL_TPL_PAID')?><!--</span>-->
<!--    --><?//
//}
//elseif ($order['ORDER']['IS_ALLOW_PAY'] == 'N')
//{
//    ?>
<!--    <span class="sale-order-list-status-restricted">--><?php //=Loc::getMessage('SPOL_TPL_RESTRICTED_PAID')?><!--</span>-->
<!--    --><?//
//}
//else
//{
//    ?>
<!--    <span class="sale-order-list-status-alert">--><?php //=Loc::getMessage('SPOL_TPL_NOTPAID')?><!--</span>-->
<!--    --><?//
//}

?>

<?php
if (!empty($arResult['ERRORS']['FATAL'])):

    foreach ($arResult['ERRORS']['FATAL'] as $error) {
        ShowError($error);
    }
    $component = $this->__component;
    if ($arParams['AUTH_FORM_IN_TEMPLATE'] && isset($arResult['ERRORS']['FATAL'][$component::E_NOT_AUTHORIZED])):
        $APPLICATION->AuthForm('', false, false, 'N', false);
    endif;
else:
	$filterHistory = ($_REQUEST['filter_history'] ?? ''); ?>

	<div class="lc-content">
		<ul class="catalog-tabs lc-tabs">
			<li class="catalog-tabs__li <?=($filterHistory !== 'Y') ? 'active': ''?>" data-tab="actualy-order">
				<a href="/personal/orders/">
					Текущий заказ (<?=$arResult['COUNT_NOW']?>)
				</a>
			</li>
			<li class="catalog-tabs__li <?=($filterHistory === 'Y') ? 'active': ''?>" data-tab="actualy-order">
				<a href="/personal/orders/?filter_history=Y">
					Ваши предыдущие заказы (<?=$arResult['COUNT_PREV']?>)
				</a>
			</li>
		</ul>
		<div class="lc-history">
			<div class="lc-history__top">
				<ul>
					<li>Номер заказа</li>
					<li>Сумма</li>
					<li>Дата</li>
					<li>Статус</li>
				</ul>
			</div>
			<?php if(!empty($arResult['ORDERS'])):?>
			<div class="lc-history__content catalog-container active" data-tab="actualy-order">
				<?php foreach ($arResult['ORDERS'] as $key => $order):?>
				<div class="lc-history__block">
					<div class="lc-history__block-info">
						<div class="lc-history__block-info__top">
							<a class="num" href="<?=htmlspecialcharsbx($order["ORDER"]["URL_TO_DETAIL"])?>">№ <?=$order['ORDER']['ACCOUNT_NUMBER']?></a>
                            <?php
                            $itemsCount = count($order['BASKET_ITEMS']);
                            $count = $itemsCount % 10;
                            $countText = '1';
                            if($count == 1)
                            {
                                $countText = GetMessage('SPOL_TPL_GOOD');
                            }
                            elseif ($count >= 2 && $count <= 4)
                            {
                                $countText = GetMessage('SPOL_TPL_TWO_GOODS');
                            }
                            else
                            {
                                $countText = GetMessage('SPOL_TPL_GOODS');
                            }
                            ?>
							<a href="<?=htmlspecialcharsbx($order["ORDER"]["URL_TO_DETAIL"])?>">всего <?=$itemsCount . ' ' . $countText?> </a>
						</div>

                        <?php $counter = 0;
                        foreach ($order['BASKET_ITEMS'] as $item):
                            $counter++;
                            if($counter > 3) break; ?>
                            <a class="item" href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a>
                        <?php endforeach;?>

                        <a class="link--circle-ar" href="<?=htmlspecialcharsbx($order["ORDER"]["URL_TO_DETAIL"])?>">
                            ПОДРОБНЕЕ О ЗАКАЗЕ
                            <div class="ar">
                                <svg class="sprite-svg">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#a-r-gray"></use>
                                </svg>
                            </div>
                        </a>
					</div>
                    <div class="lc-history__block-price lc-history__block-simple"><span class="name">Сумма</span><span><?=$order['ORDER']['FORMATED_PRICE']?></span></div>
                    <div class="lc-history__block-date lc-history__block-simple"><span class="name">Дата</span><span><?=$order['ORDER']['DATE_INSERT_FORMATED']?></span></div>
                    <div class="lc-history__block-status lc-history__block-simple"><span class="name">Статус</span>
                        <span>
                        <svg class="sprite-svg">
                          <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#box"></use>
                        </svg>
                        <div class="text"><?=htmlspecialcharsbx($arResult['INFO']['STATUS'][$order['ORDER']['STATUS_ID']]['NAME'])?></div>
                        </span>
                    </div>
				</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
		</div>
    <div class="pagination-container" data-pagination-num="<?= $navParams['NavNum'] ?>">
        <?= $arResult['NAV_STRING'] ?>
    </div>
	</div>
<?php
endif;

?>