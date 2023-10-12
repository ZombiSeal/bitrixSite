<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<div class="pagination">
        <? if ($arResult["NavPageNomer"] > 1): ?>

                <? if ($arResult["NavPageNomer"] > 2): ?>
                    <a class="pagination__prev" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/svg/ar-l-pag.svg">
                        <div class="action-button__circles">
                            <svg class="action-button__circle action-button__circle--base" height="30" width="30">
                                <circle cx="15" cy="15" r="14"></circle>
                            </svg>
                            <svg class="action-button__circle action-button__circle--fill" height="30" width="30">
                                <circle cx="15" cy="15" r="14"></circle>
                            </svg>
                        </div>
                    </a>
                <? else: ?>
                    <a class="pagination__prev" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/svg/ar-l-pag.svg">
                        <div class="action-button__circles">
                            <svg class="action-button__circle action-button__circle--base" height="30" width="30">
                                <circle cx="15" cy="15" r="14"></circle>
                            </svg>
                            <svg class="action-button__circle action-button__circle--fill" height="30" width="30">
                                <circle cx="15" cy="15" r="14"></circle>
                            </svg>
                        </div>
                    </a>
            <? endif ?>
        <? else: ?>
            <a class="pagination__prev" href="#" onclick="return false">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/svg/ar-l-pag.svg">
                <div class="action-button__circles">
                    <svg class="action-button__circle action-button__circle--base" height="30" width="30">
                        <circle cx="15" cy="15" r="14"></circle>
                    </svg>
                    <svg class="action-button__circle action-button__circle--fill" height="30" width="30">
                        <circle cx="15" cy="15" r="14"></circle>
                    </svg>
                </div>
            </a>
        <? endif ?>

    <ul>
        <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
            <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <li><a class="active" href="#" onclick="return false;"><?= $arResult["nStartPage"] ?></a></li>
            <? elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
                <li><a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a></li>
            <? else: ?>
                <li><a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a></li>
            <? endif ?>
            <? $arResult["nStartPage"]++ ?>
        <? endwhile ?>
    </ul>

        <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
            <a class="pagination__next" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/svg/ar-l-pag.svg">
                <div class="action-button__circles">
                    <svg class="action-button__circle action-button__circle--base" height="30" width="30">
                        <circle cx="15" cy="15" r="14"></circle>
                    </svg>
                    <svg class="action-button__circle action-button__circle--fill" height="30" width="30">
                        <circle cx="   15" cy="15" r="14"></circle>
                    </svg>
                </div>
            </a>
        <? else: ?>
            <a class="pagination__next" href="#" onclick="return false">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/svg/ar-l-pag.svg">
                <div class="action-button__circles">
                    <svg class="action-button__circle action-button__circle--base" height="30" width="30">
                        <circle cx="15" cy="15" r="14"></circle>
                    </svg>
                    <svg class="action-button__circle action-button__circle--fill" height="30" width="30">
                        <circle cx="   15" cy="15" r="14"></circle>
                    </svg>
                </div>
            </a>
        <? endif ?>

</div>


