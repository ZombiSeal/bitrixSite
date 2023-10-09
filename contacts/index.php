<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");


$APPLICATION->SetTitle("Контакты");

$data = getMapData();
$sections = $data['sections'];
$items = $data['items'];
$placemarks = $data['placemarks'];
?>
    <article>
        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb", "agro_breadcrumb", array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => "s1"
                        )
                    ); ?>
                </div>
                <div class="zag_main">
                    <h1> Контакты</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="contact tabs">
                <?php if (!empty($sections)): ?>
                    <div class="container">
                        <ul class="tabs-nav">
                            <?php $firstKey = array_key_first($sections) ?>
                            <?php foreach ($sections as $id => $sect): ?>
                                <li class="tabs__li <?= ($firstKey === $id) ? "active" : "" ?>"
                                    data-tab="<?= $id ?>"><?= $sect ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (!empty($items)): ?>
                    <?php $firstKey = array_key_first($items) ?>
                    <?php foreach ($items as $sectId => $el):?>
                        <div class="tabs-content <?= ($firstKey === $sectId) ? "active" : "" ?>"
                             data-tab="<?= $sectId ?>">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:map.yandex.view",
                                "agro_map_view",
                                array(
                                    "API_KEY" => "2c3ad223-bf43-40ee-bf09-2bca17017747",    // Ключ API
                                    "CONTROLS" => "",    // Элементы управления
                                    "INIT_MAP_TYPE" => "MAP",    // Стартовый тип карты
                                    "MAP_DATA" => serialize(['yandex_lat' => 53.902287, 'yandex_lon' => 27.561824, 'yandex_scale' => 10, 'PLACEMARKS' => $placemarks[$sectId]]),    // Данные, выводимые на карте
                                    "MAP_HEIGHT" => "650",    // Высота карты
                                    "MAP_ID" => "map_" . $sectId,    // Идентификатор карты
                                    "MAP_WIDTH" => "100%",    // Ширина карты
                                    "OPTIONS" => array(    // Настройки
                                        0 => "ENABLE_SCROLL_ZOOM",
                                        1 => "ENABLE_DBLCLICK_ZOOM",
                                        2 => "ENABLE_DRAGGING",
                                    ),
                                    "COMPONENT_TEMPLATE" => "agro_map_view",
                                ),
                                false
                            ); ?>
                            <?php if (!empty($el["ITEMS"])): ?>
                                <div class="container">
                                    <div class="location-block">
                                        <ul class="location-block__ul">
                                            <?php foreach ($el["ITEMS"] as $key => $item):?>
                                                <li class="ico-placeholder" >
                                                    <a class="address-link" href="#"
                                                       data-lat="<?=$item['PROPERTY_CORD_VALUE']['LAT']?>"
                                                       data-lon="<?=$item['PROPERTY_CORD_VALUE']['LON']?>">
                                                        Магазин на<span  data-lat="<?=$item['PROPERTY_CORD_VALUE']['LAT']?>"
                                                                         data-lon="<?=$item['PROPERTY_CORD_VALUE']['LON']?>"><?= $item['NAME'] ?></span>
                                                    </a>
                                                    <div class="arrow">
                                                        <svg class="sprite-svg icon icon-ar-down ">
                                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#ar-down"></use>
                                                        </svg>
                                                    </div>
                                                    <ul class="drop">
                                                        <?php if (!empty($item['PROPERTY_PHONES_VALUE'])): ?>
                                                            <?php foreach ($item['PROPERTY_PHONES_VALUE'] as $phone):
                                                                $strPhone = preg_replace('/[^0-9]/', '', $phone['TEXT']);
                                                                ?>
                                                                <li><a href="<?= $strPhone ?>"><?= $phone['TEXT'] ?></a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>

                                                        <?php if (!empty($item['PROPERTY_WORK_TIME_VALUE'])): ?>
                                                            <li class="time"><strong>Время работы:</strong>
                                                                <?php foreach ($item['PROPERTY_WORK_TIME_VALUE'] as $time): ?>
                                                                    <p><?= $time ?></p>
                                                                <?php endforeach; ?>
                                                            </li>
                                                        <?php endif; ?>

                                                        <?php if (!empty($item['PROPERTY_EMAIL_VALUE'])): ?>
                                                            <li><a class="mail"
                                                                   href="mailto:<?= $item['PROPERTY_EMAIL_VALUE']; ?>"><?= $item['PROPERTY_EMAIL_VALUE']; ?></a>
                                                            </li>
                                                        <?php endif; ?>

                                                    </ul>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
        <section>
            <div class="contact--bg">
                <div class="form-opt">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:form",
                        "agro_form",
                        array(
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "CHAIN_ITEM_LINK" => "",
                            "CHAIN_ITEM_TEXT" => "",
                            "EDIT_ADDITIONAL" => "N",
                            "EDIT_STATUS" => "Y",
                            "IGNORE_CUSTOM_TEMPLATE" => "N",
                            "NAME_TEMPLATE" => "",
                            "NOT_SHOW_FILTER" => array("", ""),
                            "NOT_SHOW_TABLE" => array("", ""),
                            "RESULT_ID" => $_REQUEST["RESULT_ID"],
                            "SEF_MODE" => "N",
                            "SHOW_ADDITIONAL" => "Y",
                            "SHOW_ANSWER_VALUE" => "N",
                            "SHOW_EDIT_PAGE" => "N",
                            "SHOW_LIST_PAGE" => "N",
                            "SHOW_STATUS" => "Y",
                            "SHOW_VIEW_PAGE" => "N",
                            "START_PAGE" => "new",
                            "SUCCESS_URL" => "",
                            "USE_EXTENDED_ERRORS" => "N",
                            "VARIABLE_ALIASES" => array("action" => "action"),
                            "WEB_FORM_ID" => "1"
                        )
                    ); ?>
                </div>
            </div>
        </section>
    </article>
<script>
    // var addresses = document.querySelectorAll('.address-link');
    // addresses.forEach((item, key) => {
    //     item.addEventListener('click', (e) => {
    //         e.preventDefault();
    //         var container = document.querySelector('.tabs-content.active')
    //         var placemarks = container.querySelectorAll('.ymaps-point-overlay');
    //         console.log(placemarks[key]);
    //         // placemarks[key].click();
    //     })
    // })
</script>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>