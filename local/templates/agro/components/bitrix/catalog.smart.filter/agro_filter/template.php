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

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true);
$price = $arResult['ITEMS']['BASE'];
?>
<div class="catalog-filter">
    <div class="catalog-filter__top">
        <div class="container">
            <div class="param">
                <div class="catalog-filter__top-text"><span class="dekstop">ПОДБОР МОТОБЛОКА ПО</span><span
                            class="mob">ПОДБОР ПО</span></div>
                <div class="catalog-filter__top-btn" data-filter="parametr"><span>ПАРАМЕТРАМ</span>
                    <svg class="sprite-svg ar">
                        <use xlink:href="./images/sprite/sprite.svg#a-r-black"></use>
                    </svg>
                    <svg class="sprite-svg close">
                        <use xlink:href="./images/sprite/sprite.svg#close"></use>
                    </svg>
                </div>
            </div>
            <div class="sort"><span>Сортировка:</span>
                <select class="styler">
                    <option>Популярное</option>
                    <option>Новые</option>
                    <option>На акции</option>
                </select>
            </div>
        </div>
    </div>
    <div class="catalog-filter__bottom">
        <div class="container">
            <div class="catalog-filter__bottom-param" data-filter="parametr">
                <form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>"
                      method="get" class="smartfilter">

                    <?php foreach ($arResult['NEW_ITEMS'] as $key => $block):
                        $class = ($key === 'FIRST_BLOCK') ? "catalog-filter__maker" : "catalog-filter__container";

                        ?>
                        <div class="<?= $class ?>">

                            <?php if ($price['PRICE'] && $key !== 'FIRST_BLOCK'): ?>
                                <div class="catalog-filter__input catalog-filter__block"><span>Цена:</span>
                                    <div>
                                        <input
                                                type="text"
                                                name="<?= $price["VALUES"]["MIN"]["CONTROL_NAME"] ?>"
                                                id="<?= $price["VALUES"]["MIN"]["CONTROL_ID"] ?>"
                                                placeholder="От <?= $price["VALUES"]["MIN"]["VALUE"] ?>р"
                                                size="5"
                                                onkeyup="smartFilter.keyup(this)"
                                        />
                                        <input
                                                type="text"
                                                name="<?= $price["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                                id="<?= $price["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                                placeholder="От <?= $price["VALUES"]["MAX"]["VALUE"] ?>р"
                                                size="5"
                                                onkeyup="smartFilter.keyup(this)"
                                        />
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php foreach ($block as $arItem): ?>
                                <?php
                                if (empty($arItem["VALUES"]) || isset($arItem["PRICE"])) continue;

                                switch ($arItem["DISPLAY_TYPE"]):
                                    case SectionPropertyTable::NUMBERS: ?>
                                        <div class="catalog-filter__input catalog-filter__block">
                                            <?php if (!empty($arItem["FILTER_HINT"])): ?>
                                                <span class="tooltip-span"><?= $arItem['NAME'] ?>:
                                        <span class="quest">?</span>
                                        <div class="tooltip-ico">
                                            <span><?= $arItem["FILTER_HINT"] ?></span>
                                        </div>
                                    </span>
                                            <?php else: ?>
                                                <span><?= $arItem['NAME'] ?>:</span>
                                            <?php endif; ?>
                                            <div>
                                                <input
                                                        type="text"
                                                        name="<? echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"] ?>"
                                                        id="<? echo $arItem["VALUES"]["MIN"]["CONTROL_ID"] ?>"
                                                        value="<? echo $arItem["VALUES"]["MIN"]["HTML_VALUE"] ?>"
                                                        placeholder="От <? echo $arItem["VALUES"]["MIN"]["VALUE"] ?> кг"
                                                        size="5"
                                                        onkeyup="smartFilter.keyup(this)"
                                                />
                                                <input
                                                        type="text"
                                                        name="<? echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                                        id="<? echo $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                                        value="<? echo $arItem["VALUES"]["MAX"]["HTML_VALUE"] ?>"
                                                        placeholder="До <? echo $arItem["VALUES"]["MAX"]["VALUE"] ?> кг"
                                                        size="5"
                                                        onkeyup="smartFilter.keyup(this)"
                                                />
                                            </div>
                                        </div>
                                        <?php break; ?>

                                    <?php case SectionPropertyTable::DROPDOWN: ?>
                                    <div class="catalog-filter__select catalog-filter__block">
                                        <?php if (!empty($arItem["FILTER_HINT"])): ?>
                                            <span class="tooltip-span"><?= $arItem['NAME'] ?>:
                                        <span class="quest">?</span>
                                        <div class="tooltip-ico">
                                            <span><?= $arItem["FILTER_HINT"] ?></span>
                                        </div>
                                    </span>
                                        <?php else: ?>
                                            <span><?= $arItem['NAME'] ?>:</span>
                                        <?php endif; ?>

                                        <div>
                                            <select class="styler"
                                                    name="<?= current($arItem['VALUES'])['CONTROL_NAME_ALT'] ?>">
                                                <?php foreach ($arItem["VALUES"] as $val => $ar): ?>
                                                    <option
                                                            id="<?= $ar['CONTROL_ID'] ?>"
                                                            value="<?= $ar["HTML_VALUE_ALT"] ?>"
                                                        <?= ($ar["CHECKED"]) ? 'selected' : '' ?>
                                                    >
                                                        <?= $ar['VALUE'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php break; ?>

                                <?php default: ?>
                                    <?php if ($arItem['CODE'] !== 'PRODUCER'): ?>
                                        <div class="catalog-filter__check catalog-filter__block">
                                            <?php if (!empty($arItem["FILTER_HINT"])): ?>
                                                <span class="tooltip-span"><?= $arItem['NAME'] ?>:
                                                    <span class="quest">?</span>
                                                    <div class="tooltip-ico">
                                                        <span><?= $arItem["FILTER_HINT"] ?></span>
                                                    </div>
                                                </span>
                                            <?php else: ?>
                                                <span><?= $arItem['NAME'] ?>:</span>
                                            <?php endif; ?>
                                            <div>
                                                <?php foreach ($arItem['VALUES'] as $val => $ar): ?>
                                                    <label data-role="label_<?= $ar["CONTROL_ID"] ?>"
                                                           for="<? echo $ar["CONTROL_ID"] ?>">
                                                        <input class="styler"
                                                               type="checkbox"
                                                               value="<? echo $ar["HTML_VALUE"] ?>"
                                                               name="<? echo $ar["CONTROL_NAME"] ?>"
                                                               id="<? echo $ar["CONTROL_ID"] ?>"
                                                            <? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                                               onclick="smartFilter.click(this)"
                                                        />
                                                        <span class="styler"
                                                              title="<?= $ar["VALUE"] ?>">
                                                            <?= $ar["VALUE"] ?>
                                                            <?= ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])) ? "({$ar["ELEMENT_COUNT"]})" : "" ?>
                                                        </span>
                                                    </label>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="catalog-filter__maker-zag"><?= $arItem['NAME'] ?></div>
                                        <div class="catalog-filter__maker-block">
                                            <ul>
                                                <?php foreach ($arItem['VALUES'] as $country): ?>
                                                    <li class="country"><img src="<?= $country['IMG'] ?>">
                                                    <span><?= $country['NAME'] ?></span>
                                                    <?php foreach ($country['BRANDS'] as $brand): ?>
                                                        <li>
                                                            <label>
                                                                <input class="styler"
                                                                       type="checkbox"
                                                                       value="<? echo $brand["HTML_VALUE"] ?>"
                                                                       name="<? echo $brand["CONTROL_NAME"] ?>"
                                                                       id="<? echo $brand["CONTROL_ID"] ?>"
                                                                    <? echo $brand["CHECKED"] ? 'checked="checked"' : '' ?>
                                                                       onclick="smartFilter.click(this)"
                                                                />
                                                                <span class="styler"
                                                                      title="<?= $brand["VALUE"] ?>">
                                                                    <?= $brand["VALUE"] ?>
                                                                    <?= ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($brand["ELEMENT_COUNT"])) ? "({$brand["ELEMENT_COUNT"]})" : "" ?>
                                                                </span>
                                                            </label>
                                                        </li>
                                                    <?php endforeach; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                    <?php break; ?>
                                <?php endswitch; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>

                    <div class="catalog-filter__btns">
                        <label class="presence--btn">
                            <input class="styler" type="checkbox"><span>В наличии на складе</span>
                        </label>

                        <button class="reset for--deks" type="submit" name="del_filter" id="del_filter">
                            <svg class="sprite-svg">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite/sprite.svg#close"></use>
                            </svg>
                            Сбросить параметры фильтра
                        </button>
                        <button class="reset for--mob">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#close"></use>
                            </svg>
                            Сбросить фильтры
                        </button>

                        <button class="catalog-filter--sbmt" type="submit" id="set_filter" name="set_filter">
                            Показать все результаты (<?=$arResult["ELEMENT_COUNT"] ?? 0?>)
                        </button>

                        <div class="bx-filter-popup-result <? if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"] ?>"
                             id="modef" <? if (!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"'; ?>
                             style="display: inline-block;">
                            <? echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">' . (int)($arResult["ELEMENT_COUNT"] ?? 0) . '</span>')); ?>
                            <span class="arrow"></span>
                            <br/>
                            <a href="<? echo $arResult["FILTER_URL"] ?>"
                               target=""><? echo GetMessage("CT_BCSF_FILTER_SHOW") ?>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>