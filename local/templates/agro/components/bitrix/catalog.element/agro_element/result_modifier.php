<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

if (!empty($arResult['PROPERTIES']['IMAGES']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $imgId) {
        $imagePath = CFile::GetPath($imgId);
        $arResult['PROPERTIES']['IMAGES']['SRC'][] = $imagePath;
    }
}

$arResult['FLAGS'] = [
    [$arResult['PROPERTIES']['NEW'], 'SPRITE' => 'novinki', 'CLASS' => 'novinki'],
    [$arResult['PROPERTIES']['SUPPLIER'], 'SPRITE' => 'tehniche', 'CLASS' => 'tehniche'],
    [$arResult['PROPERTIES']['GUARANTEE'], 'SPRITE' => 'onePost', 'CLASS' => 'one']
];

if (!empty($arResult['PROPERTIES']['INSTRUCTIONS']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['INSTRUCTIONS']['VALUE'] as $file) {
        $filesInf[] = CFile::GetFileArray($file);
    }
    $arResult['FILES'] = $filesInf;
}

if (!empty($arResult['PROPERTIES']['INSTRUCTION']['VALUE'])) {
    $fileInf = CFile::GetFileArray($arResult['PROPERTIES']['INSTRUCTION']['VALUE']);
    $arResult['PROPERTIES']['INSTRUCTION'] += $fileInf;
}

$arResult['BOTTOM_PROPS'] = [
    $arResult['PROPERTIES']['BARCODE'],
    $arResult['PROPERTIES']['CODE'],
    $arResult['PROPERTIES']['ARTICLE']
];

$this->__component->setResultCacheKeys([

]);