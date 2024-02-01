<?php

use Bitrix\Main\Loader;
use \Bitrix\Main\Data\Cache;

function vr($var) : void
{
    echo "<div style='background: white'>";
    echo "<pre>";
    var_dump($var);
    echo "<pre>";
    echo "</div>";
}

function getMapData() : array
{
    $cache = Cache::createInstance(); // получаем экземпляр класса
    $ttl = 36000000;
    $cacheKey = 'contactsMap';
    if ($cache->initCache($ttl, $cacheKey)) { // проверяем кеш и задаём настройки
        $vars = $cache->getVars(); // достаем переменные из кеша
    } elseif ($cache->startDataCache()) {
        if (Loader::includeModule("iblock")) {
            $arSelect = ["ID", "IBLOCK_SECTION_ID", "NAME", "PROPERTY_CORD", "PROPERTY_PHONES", "PROPERTY_EMAIL", "PROPERTY_WORK_TIME"];
            $res = CIBlockElement::GetList([], ["IBLOCK_ID" => CONTACT_IBLOCK_ID, 'ACTIVE' => 'Y'], false, [], $arSelect);

            while ($el = $res->GetNext()) {
                if (!empty($el['IBLOCK_SECTION_ID'])) {
                    list($lat, $lon) = explode(',', $el['PROPERTY_CORD_VALUE']);
                    $el['PROPERTY_CORD_VALUE'] = ['LAT' => $lat, 'LON' => $lon];
                    $items[$el['IBLOCK_SECTION_ID']]['ITEMS'][] = $el;
                    $sectionId[] = $el['IBLOCK_SECTION_ID'];
                    $placemarks[$el['IBLOCK_SECTION_ID']][] = ["LAT" => $lat, "LON" => $lon, "TEXT" => $el['NAME'], "ID" => "hello"];
                }
            }

            if (!empty($sectionId)) {
                $arFilter = ['IBLOCK_ID' => CONTACT_IBLOCK_ID, 'ACTIVE' => 'Y', 'ID' => $sectionId];
                $arSelect = ['ID', 'NAME'];
                $db_list = CIBlockSection::GetList([], $arFilter, true, $arSelect);

                while ($sect = $db_list->GetNext()) {
                    if (!empty($sect['ELEMENT_CNT'])) {
                        $sections[$sect['ID']] = $sect['NAME'];
                    }
                }
            }
        }
        $vars = ['items' => $items, 'sections' => $sections, 'placemarks' => $placemarks];
        $cache->endDataCache($vars);
    }
    return $vars;
}

function renderFlag($sprite, $class, $tooltip) {

    $spritePath = SITE_TEMPLATE_PATH . "/images/sprite/sprite.svg#$sprite";
    return <<<HTML
            <div class="flags $class">
                <svg class="sprite-svg">
                    <use xlink:href="$spritePath"></use>
                </svg>
                <div class="tooltip-ico">
                    <span>$tooltip</span>
                </div>
            </div>
        HTML;
}

function getApplicationBasketItems()
{
    if (Loader::includeModule("sale")) {
        $basket = \Bitrix\Sale\Basket::loadItemsForFUser(\Bitrix\Sale\Fuser::getId(), \Bitrix\Main\Context::getCurrent()->getSite());
        $additionalIds = [];
        if (!empty($basket)) {
            foreach ($basket as $basketItem) {
                $basketIds[] = $basketItem->getProductId();;
            }
            if (!empty($basketIds)) {
                $arFilter = [
                    "IBLOCK_ID" => CATALOG_IBLOCK_ID,
                    "ACTIVE" => "Y",
                    "ID" => $basketIds
                ];
                $res = CIBlockElement::GetList([], $arFilter, false, false, ['PROPERTY_ADDITIONAL_PRODUCT.ID']);
                while ($ar_fields = $res->GetNext()) {
                    $productId = $ar_fields['PROPERTY_ADDITIONAL_PRODUCT_ID'];
                    if ($productId && !in_array($productId, $basketIds)) $additionalIds[] = $productId;
                }
            }
            array_unique($additionalIds);
        }

    }
    return $additionalIds;
}