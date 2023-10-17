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

                    <div class="catalog-filter__maker">
                        <div class="catalog-filter__maker-zag">Производитель</div>
                        <div class="catalog-filter__maker-block">
                            <ul>
                                <li class="country"><img src="./images/svg/flag-russia.svg"><span>Россия</span>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Авангард (3)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Нева (10)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Агат (1)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Ока (2)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                    </label>
                                </li>
                                <li class="country"><img src="./images/svg/flag-russia.svg"><span>Россия</span>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Авангард (3)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Нева (10)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Агат (1)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Ока (2)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                    </label>
                                </li>
                                <li class="country">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#flag-bel"></use>
                                    </svg>
                                    <span>Россия</span>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Авангард (3)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Нева (10)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Агат (1)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Ока (2)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                    </label>
                                </li>
                                <li class="country">
                                    <svg class="sprite-svg">
                                        <use xlink:href="./images/sprite/sprite.svg#flag-china"></use>
                                    </svg>
                                    <span>Китай</span>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Авангард (3)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Нева (10)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Агат (1)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Ока (2)</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="catalog-filter__container">
                        <?php if($price['PRICE']):?>
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
                        <?php endif;?>

                        <div class="catalog-filter__select catalog-filter__block"><span
                                    class="tooltip-span">Мощность(лс):<span
                                        class="quest">?</span>
                      <div class="tooltip-ico"><span>Разница в силе тяги и мощности</span></div></span>
                            <div>
                                <select class="styler">
                                    <option>750 л.с.</option>
                                    <option>7500 л.с.</option>
                                    <option>75000 л.с.</option>
                                    <option>750000 л.с.</option>
                                    <option>7500000 л.с.</option>
                                </select>
                            </div>
                        </div>
                        <div class="catalog-filter__check catalog-filter__block"><span>Тип двигателя:</span>
                            <div>
                                <label>
                                    <input class="styler" type="checkbox"><span>Бензиновый</span>
                                </label>
                                <label>
                                    <input class="styler" type="checkbox"><span>Дизельный</span>
                                </label>
                            </div>
                        </div>
                        <div class="catalog-filter__input catalog-filter__block"><span>Вес (кг):</span>
                            <div>
                                <input type="text" placeholder="От 75 кг">
                                <input type="text" placeholder="До 100 кг">
                            </div>
                        </div>
                        <div class="catalog-filter__variant catalog-filter__block"><span
                                    class="tooltip-span">Дифференциал:<span
                                        class="quest">?
                        <div class="tooltip-ico"><span>Разница в силе тяги и мощности</span></div></span></span>
                            <div class="filter__variant__block">
                                <div class="filter__variant__block-name"><span>5 варинатов</span></div>
                                <ul class="filter__variant__block-ul">
                                    <li>
                                        <label>
                                            <input class="styler" type="checkbox"><span>Ока (2)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="styler" type="checkbox"><span>Мотор Сиг (1)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="styler" type="checkbox"><span>Ока (2)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input class="styler" type="checkbox"><span>Тарпан (1)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="catalog-filter__check catalog-filter__block"><span>Тип корпуса:</span>
                            <div>
                                <label>
                                    <input class="styler" type="checkbox"><span>Мотоблок</span>
                                </label>
                                <label>
                                    <input class="styler" type="checkbox"><span>Культиватор</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-filter__btns">
                        <label class="presence--btn">
                            <input class="styler" type="checkbox"><span>В наличии на складе</span>
                        </label>
                        <button class="reset for--deks">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#close"></use>
                            </svg>
                            Сбросить параметры фильтра
                        </button>
                        <button class="reset for--mob">
                            <svg class="sprite-svg">
                                <use xlink:href="./images/sprite/sprite.svg#close"></use>
                            </svg>
                            Сбросить фильтры
                        </button>
                        <button class="catalog-filter--sbmt">Показать все результаты мотоблоки (25)</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


<script type="text/javascript">
    var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>