<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
if (CModule::IncludeModule("iblock")) require 'result_modify.php';

?>
<!--<script src="https://api-maps.yandex.ru/2.1/?apikey=2c3ad223-bf43-40ee-bf09-2bca17017747&lang=ru_RU"-->
<!--        type="text/javascript">-->

<script type="text/javascript">

    if (!window.GLOBAL_arMapObjects)
        window.GLOBAL_arMapObjects = {};

    function init_<?echo $arParams['MAP_ID']?>() {
        if (!window.ymaps)
            return;

        var node = BX("BX_YMAP_<?echo $arParams['MAP_ID']?>");
        node.innerHTML = '';
        var placemarks = <?=CUtil::PhpToJSObject($arResult['JS_PARAMS']);?>

        var map = window.GLOBAL_arMapObjects['<?echo $arParams['MAP_ID']?>'] = new ymaps.Map(node, {
            center: [<?echo $arParams['INIT_MAP_LAT']?>, <?echo $arParams['INIT_MAP_LON']?>],
            zoom: <?echo $arParams['INIT_MAP_SCALE']?>,
            type: 'yandex#<?=$arResult['ALL_MAP_TYPES'][$arParams['INIT_MAP_TYPE']]?>'
        });

        for (var i in placemarks) {
            if (placemarks.hasOwnProperty(i)) {
                var placemark = new ymaps.Placemark(placemarks[i].coordPoint);
                map.geoObjects.add(placemark);
            }
        }

        <?
        foreach ($arResult['ALL_MAP_OPTIONS'] as $option => $method)
        {
        if (in_array($option, $arParams['OPTIONS'])):
        ?>
        map.behaviors.enable("<?echo $method?>");
        <?
        else:
        ?>
        if (map.behaviors.isEnabled("<?echo $method?>"))
            map.behaviors.disable("<?echo $method?>");
        <?
        endif;
        }

        foreach ($arResult['ALL_MAP_CONTROLS'] as $control => $method)
        {
        if (in_array($control, $arParams['CONTROLS'])):
        ?>
        map.controls.add('<?=$method?>');
        <?
        endif;
        }


        if ($arParams['DEV_MODE'] == 'Y'):
        ?>
        window.bYandexMapScriptsLoaded = true;
        <?
        endif;

        if ($arParams['ONMAPREADY']):
        ?>
        if (window.<?echo $arParams['ONMAPREADY']?>) {
            <?
            if ($arParams['ONMAPREADY_PROPERTY']):
            ?>
            <?echo $arParams['ONMAPREADY_PROPERTY']?> = map;
            window.<?echo $arParams['ONMAPREADY']?>();
            <?
            else:
            ?>
            window.<?echo $arParams['ONMAPREADY']?>(map);
            <?
            endif;
            ?>
        }
        <?
        endif;
        ?>
    }
    <?
    if ($arParams['DEV_MODE'] == 'Y'):
    ?>
    function BXMapLoader_<?echo $arParams['MAP_ID']?>() {
        if (null == window.bYandexMapScriptsLoaded) {
            function _wait_for_map() {
                if (window.ymaps && window.ymaps.Map)
                    init_<?echo $arParams['MAP_ID']?>();
                else
                    setTimeout(_wait_for_map, 50);
            }

            BX.loadScript('<?=$arResult['MAPS_SCRIPT_URL']?>', _wait_for_map);
        } else {
            init_<?echo $arParams['MAP_ID']?>();
        }
    }
    <?
    if ($arParams['WAIT_FOR_EVENT']):
    ?>
    <?=CUtil::JSEscape($arParams['WAIT_FOR_EVENT'])?> = BXMapLoader_<?=$arParams['MAP_ID']?>;
    <?
    elseif ($arParams['WAIT_FOR_CUSTOM_EVENT']):
    ?>
    BX.addCustomEvent('<?=CUtil::JSEscape($arParams['WAIT_FOR_EVENT'])?>', BXMapLoader_<?=$arParams['MAP_ID']?>);
    <?
    else:
    ?>
    BX.ready(BXMapLoader_<?echo $arParams['MAP_ID']?>);
    <?
    endif;
    else: // $arParams['DEV_MODE'] == 'Y'
    ?>

    (function bx_ymaps_waiter() {
        if (typeof ymaps !== 'undefined')
            ymaps.ready(init_<?echo $arParams['MAP_ID']?>);
        else
            setTimeout(bx_ymaps_waiter, 100);
    })();

    <?
    endif; // $arParams['DEV_MODE'] == 'Y'
    ?>

    /* if map inits in hidden block (display:none)
    *  after the block showed
    *  for properly showing map this function must be called
    */
    function BXMapYandexAfterShow(mapId) {
        if (window.GLOBAL_arMapObjects[mapId] !== undefined)
            window.GLOBAL_arMapObjects[mapId].container.fitToViewport();
    }

</script>
<div id="BX_YMAP_<? echo $arParams['MAP_ID'] ?>" class="bx-yandex-map"
     style="height: <? echo $arParams['MAP_HEIGHT']; ?>; width: <? echo $arParams['MAP_WIDTH'] ?>;max-width: 100%;"><? echo GetMessage('MYS_LOADING' . ($arParams['WAIT_FOR_EVENT'] ? '_WAIT' : '')); ?></div>


