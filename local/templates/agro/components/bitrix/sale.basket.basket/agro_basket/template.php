<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

\Bitrix\Main\UI\Extension::load(["ui.fonts.ruble", "ui.fonts.opensans"]);

/**
 * @var array 1qvbbbbbbbb
 * @var array $arResult
 * @var string $templateFolder
 * @var string $templateName
 * @var CMain $APPLICATION
 * @var CBitrixBasketComponent $component
 * @var CBitrixComponentTemplate $this
 * @var array $giftParameters
 */

$documentRoot = Main\Application::getDocumentRoot();

\CJSCore::Init(array('fx', 'popup', 'ajax'));
Main\UI\Extension::load(['ui.mustache']);

$this->addExternalJs($templateFolder . '/js/action-pool.js');
$this->addExternalJs($templateFolder . '/js/filter.js');
$this->addExternalJs($templateFolder . '/js/component.js');

$mobileColumns = isset($arParams['COLUMNS_LIST_MOBILE'])
    ? $arParams['COLUMNS_LIST_MOBILE']
    : $arParams['COLUMNS_LIST'];
$mobileColumns = array_fill_keys($mobileColumns, true);

$jsTemplates = new Main\IO\Directory($documentRoot . $templateFolder . '/js-templates');
/** @var Main\IO\File $jsTemplate */
foreach ($jsTemplates->getChildren() as $jsTemplate) {
    include($jsTemplate->getPath());
}

$displayModeClass = $arParams['DISPLAY_MODE'] === 'compact' ? ' basket-items-list-wrapper-compact' : '';
if (empty($arResult['ERROR_MESSAGE'])) { ?>
    <section>
        <div class="container">
            <div id="basket-root" class="basket" style="opacity: 0;">
                <?php
                if (
                    $arParams['BASKET_WITH_ORDER_INTEGRATION'] !== 'Y'
                    && in_array('top', $arParams['TOTAL_BLOCK_DISPLAY'])
                ) :?>
                    <div class="basket-header" data-entity="basket-total-block"></div>
                <?php endif; ?>
                <div class="basket-container" id="basket-items-list-container">
                    <div class="basket-items-list-overlay" id="basket-items-list-overlay"
                         style="display: none;"></div>
                    <div class="basket-items-list" id="basket-item-list">
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
                        <div class="basket-search-not-found" id="basket-item-list-empty-result"
                             style="display: none;">
                            <div class="basket-search-not-found-icon"></div>
                            <div class="basket-search-not-found-text">
                                <?= Loc::getMessage('SBB_FILTER_EMPTY_RESULT') ?>
                            </div>
                        </div>
                        <div id="basket-item-table"></div>
                    </div>
                </div>

                <?
                if (
                    $arParams['BASKET_WITH_ORDER_INTEGRATION'] !== 'Y'
                    && in_array('bottom', $arParams['TOTAL_BLOCK_DISPLAY'])
                ) {
                    ?>
                    <div class="row">
                        <div class="col-xs-12" data-entity="basket-total-block"></div>
                    </div>
                    <?
                }
                ?>
            </div>
        </div>
    </section>
    <?
    if (!empty($arResult['CURRENCIES']) && Main\Loader::includeModule('currency')) {
        CJSCore::Init('currency');

        ?>
        <script>
            BX.Currency.setCurrencies(<?=CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true)?>);
        </script>
        <?
    }

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
    <?
    if ($arParams['USE_GIFTS'] === 'Y' && $arParams['GIFTS_PLACE'] === 'BOTTOM') {
        ?>
        <div data-entity="parent-container">
            <div class="catalog-block-header"
                 data-entity="header"
                 data-showed="false"
                 style="display: none; opacity: 0;">
                <?= $arParams['GIFTS_BLOCK_TITLE'] ?>
            </div>
            <?
            $APPLICATION->IncludeComponent(
                'bitrix:sale.products.gift.basket',
                '.default',
                $giftParameters,
                $component
            );
            ?>
        </div>
        <?
    }
} elseif ($arResult['EMPTY_BASKET']) {
    include(Main\Application::getDocumentRoot() . $templateFolder . '/empty.php');
}
elseif ($arResult['EMPTY_BASKET'])
{
    include(Main\Application::getDocumentRoot().$templateFolder.'/empty.php');
}
else {
    ShowError($arResult['ERROR_MESSAGE']);
}