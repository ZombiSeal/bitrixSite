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
           <?php include_once  $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . "/include/sort.php"?>
        </div>
    </div>
    <div class="catalog-filter__bottom">
        <div class="container">
            <div class="catalog-filter__bottom-param" data-filter="parametr">
                <form id="filter">
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
                                                value="<? echo $price["VALUES"]["MIN"]["HTML_VALUE"] ?>"
                                                size="5"
                                        />
                                        <input
                                                type="text"
                                                name="<?= $price["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                                id="<?= $price["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                                placeholder="От <?= $price["VALUES"]["MAX"]["VALUE"] ?>р"
                                                value="<? echo $price["VALUES"]["MAX"]["HTML_VALUE"] ?>"
                                                size="5"
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
                                                />
                                                <input
                                                        type="text"
                                                        name="<? echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"] ?>"
                                                        id="<? echo $arItem["VALUES"]["MAX"]["CONTROL_ID"] ?>"
                                                        value="<? echo $arItem["VALUES"]["MAX"]["HTML_VALUE"] ?>"
                                                        placeholder="До <? echo $arItem["VALUES"]["MAX"]["VALUE"] ?> кг"
                                                        size="5"
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
                                            <select class="styler select"
                                                    name="<?= current($arItem['VALUES'])['CONTROL_NAME_ALT'] ?>"
                                            >
                                                <option id="default" value="" selected>Выбрать</option>
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
                                    <?php if ($arItem['CODE'] !== 'PRODUCER'): $checkCount = count($arItem['VALUES'])?>
                                        <div class="<?=($checkCount > 3) ? 'catalog-filter__variant' : 'catalog-filter__check'?> catalog-filter__block">
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
                                                <?php if($checkCount > 3):?>
                                                        <div class="filter__variant__block">
                                                            <div class="filter__variant__block-name">
                                                                <span><?=count($arItem['VALUES'])?> вариантов</span>
                                                            </div>
                                                            <ul class="filter__variant__block-ul">
                                                                <?php foreach ($arItem['VALUES'] as $val => $ar): ?>
                                                                    <li>
                                                                        <label class="check"
                                                                               data-role="label_<?= $ar["CONTROL_ID"] ?>"
                                                                               for="<? echo $ar["CONTROL_ID"] ?>">
                                                                            <input class="styler"
                                                                                   type="checkbox"
                                                                                   value="<? echo $ar["HTML_VALUE"] ?>"
                                                                                   name="<? echo $ar["CONTROL_NAME"] ?>"
                                                                                   id="<? echo $ar["CONTROL_ID"] ?>"
                                                                                <? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                                                            />
                                                                            <span class="styler" title="<?= $ar["VALUE"] ?>"> <?= $ar["VALUE"] ?> </span>
                                                                        </label>
                                                                    </li>
                                                                <?php endforeach;?>
                                                            </ul>
                                                        </div>
                                                <?php else:?>
                                            <div>
                                                    <?php foreach ($arItem['VALUES'] as $val => $ar): ?>
                                                        <label class="check" data-role="label_<?= $ar["CONTROL_ID"] ?>"
                                                               for="<? echo $ar["CONTROL_ID"] ?>">
                                                            <input class="styler"
                                                                   type="checkbox"
                                                                   value="<? echo $ar["HTML_VALUE"] ?>"
                                                                   name="<? echo $ar["CONTROL_NAME"] ?>"
                                                                   id="<? echo $ar["CONTROL_ID"] ?>"
                                                                <? echo $ar["CHECKED"] ? 'checked="checked"' : '' ?>
                                                            />
                                                            <span class="styler"
                                                                  title="<?= $ar["VALUE"] ?>">
                                                            <?= $ar["VALUE"] ?>

                                                        </span>
                                                        </label>
                                                    <?php endforeach; ?>
                                            </div>
                                                <?php endif;?>


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
                                                            <label class="check">
                                                                <input class="styler"
                                                                       type="checkbox"
                                                                       value="<? echo $brand["HTML_VALUE"] ?>"
                                                                       name="<? echo $brand["CONTROL_NAME"] ?>"
                                                                       id="<? echo $brand["CONTROL_ID"] ?>"
                                                                    <? echo $brand["CHECKED"] ? 'checked="checked"' : '' ?>

                                                                />
                                                                <span class="styler"
                                                                      title="<?= $brand["VALUE"] ?>">
                                                                    <?= $brand["VALUE"] ?>

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
                        <label class="presence--btn check">
                            <input id="<?=$arResult['ITEMS']['AVAILABLE']['VALUES'][0]['CONTROL_ID']?>"
                                   class="styler <?=($_GET['arrFilter_available']) ? 'checked' : ''?>"
                                   type="checkbox" <?=($_GET['arrFilter_available']) ? 'checked' : ''?>
                                   name="<?=$arResult['ITEMS']['AVAILABLE']['VALUES'][0]['CONTROL_NAME']?>"
                                   title="<?=$arResult['ITEMS']['AVAILABLE']['VALUES'][0]['VALUE']?>">
                            <span>В наличии на складе</span>
                        </label>

                        <button class="reset for--deks">
                            <svg class="sprite-svg">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#close"></use>
                            </svg>
                            Сбросить параметры фильтра
                        </button>
                        <button class="reset for--mob">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#close"></use>
                            </svg>
                            Сбросить фильтры
                        </button>
                        <button class="catalog-filter--sbmt">
                            Показать все результаты <span class="num_el"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="filter-param__active">
        <?php
        if (!empty($arResult['FILTERS'])):
            foreach ($arResult['FILTERS'] as $id => $name):
                ?>

                <div input-id=<?=$id?> class="close-tag">

                        <?php if(is_array($name)): ?>
                            <?php if(count($name) > 1):?>
                                <?=$name[0]?> - <?=$name[1]?>
                            <?php else:?>
                                <?=$name[0];?>
                            <?php endif;?>
                        <?php else:?>
                            <?=$name?>
                        <?php endif;?>

                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/svg/cross.svg" class="sprite-svg">
                </div>
            <?php
            endforeach;
        endif;
        ?>
    </div>
</div>