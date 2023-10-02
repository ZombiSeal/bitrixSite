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
//vr($arResult['ITEMS']);
?>
<div class="main-top__slider">
    <?php if (!empty($arResult['ITEMS'])): ?>
        <?php foreach ($arResult['ITEMS'] as $arItem):?>
            <?php 
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="main-top" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="container clearfix lazy"
                     data-bg="url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
                    <a class="main-top__link" href="#" ></a>

                    <div class="zag--black"><?=$arItem['PREVIEW_TEXT'];?></div>

                    <?php if(!empty($arItem['PROPERTIES']['OUR_PHONES'])):?>
                    <div class="phone-block">
                        <div class="phone-block__zag">Наши телефоны</div>
                        <ul class="phone-block__ul">
                            <?php foreach ($arItem['PROPERTIES']['OUR_PHONES']['~VALUE'] as $item): ?>
                                <li><?=$item['TEXT']?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <?php endif;?>

                    <?php if(!empty($arItem['PROPERTIES']['ADRESS'])):?>
                    <div class="location-block">
                        <ul class="location-block__ul">
                            <?php foreach ($arItem['PROPERTIES']['ADRESS']['VALUE'] as $key=>$item):?>
                            <li class="ico-placeholder"><a href="#">Магазин на<span><?=$item?></span></a><a
                                        href="tel:80175551122"><?=$arItem['PROPERTIES']['PHONE']['VALUE_ENUM'][$key]?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</div>