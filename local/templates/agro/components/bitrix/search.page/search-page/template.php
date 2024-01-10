<?php
$APPLICATION->SetTitle("Результат поиска");
$APPLICATION->AddChainItem($APPLICATION->GetTitle());
?>

<div class="search-result">
    <div class="container">
        <div class="search-result__count">
            По запросу
            <strong>
                "<?=$arResult['REQUEST']['QUERY']?>"
            </strong>
            <?php if(!empty($arResult['SEARCH'])):?>
            найдено
            <strong>
                <?=count($arResult['SEARCH'])?> товаров
            </strong>
            <?php else:?>
                ничего не найдено
            <?php endif;?>
        </div>

        <?$APPLICATION->IncludeComponent("bitrix:search.title","catalog-search",Array(
                "CATEGORY_0" => array(),
                "CATEGORY_0_TITLE" => "",
                "CHECK_DATES" => "N",
                "CONTAINER_ID" => "title-search",
                "INPUT_ID" => "title-search-input",
                "NUM_CATEGORIES" => "1",
                "ORDER" => "date",
                "PAGE" => "#SITE_DIR#catalog/search/",
                "SHOW_INPUT" => "Y",
                "SHOW_OTHERS" => "N",
                "TOP_COUNT" => "5",
                "USE_LANGUAGE_GUESS" => "Y"
            )
        );?>
    </div>

</div>
