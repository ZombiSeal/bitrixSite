<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Loader;
/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$arResult['ITEM']['FLAGS'] = [ 'NEW' => [$arResult['ITEM']['PROPERTIES']['NEW'], 'SPRITE' => 'novinki', 'CLASS' => 'novinki'],
    [$arResult['ITEM']['PROPERTIES']['SUPPLIER'],'SPRITE' => 'tehniche', 'CLASS' => 'tehniche'],
    [$arResult['ITEM']['PROPERTIES']['GUARANTEE'], 'SPRITE' => 'onePost', 'CLASS' => 'one']
];

$arResult['ITEM']['CLICK_ACTION'] = 'BUY_ONE_CLICK';

if (Loader::includeModule("iblock")) {
    $arSelect = ["NAME"];
    $res = CIBlockSection::GetList([], ["ID" => $arResult['ITEM']['IBLOCK_SECTION_ID']], false, [], $arSelect);

    while ($el = $res->GetNext()) {
        $arResult['ITEM']['SECTION_NAME'] = $el['NAME'];
    }
}
