<? use Bitrix\Main\Page\Asset;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
//$this->addExternalJS('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
?>
<!--<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>-->
<script src="https://api-maps.yandex.ru/2.0-stable/?apikey=2c3ad223-bf43-40ee-bf09-2bca17017747&load=package.standard&lang=ru-RU" type="text/javascript"> </script>



<?php
$jsParams = [];
foreach ($arResult["ITEMS"] as $arItem)
{
$arCoords = explode(',', $arItem['PROPERTIES']['CORD']['VALUE']);
$jsParams[] = [
'coordPoint' => $arCoords
];
};

?>
<div id="map" style="width: 100%; height: 700px">
</div>

<script type="text/javascript">

    ymaps.ready(init);
    var myMap,
        placemarks = <?=CUtil::PhpToJSObject($jsParams);?>;

    function init() {
        myMap = new ymaps.Map("map", {
            center: placemarks[2].coordPoint,
            zoom: 12
        });

        for (var i in placemarks) {
            if (placemarks.hasOwnProperty(i)) {
                var placemark = new ymaps.Placemark(placemarks[i].coordPoint);
                myMap.geoObjects.add(placemark);
            }
        }
    }
</script>
