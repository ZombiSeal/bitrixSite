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


if (!empty($arResult['PROPERTIES']['ADVANTAGES']['VALUE']))
{
        $filter = ["IBLOCK_ID" => CONTENT_IBLOCK_ID, "ID"=> $arResult['PROPERTIES']['ADVANTAGES']['VALUE']];
        $res = CIBlockElement::GetList([], $filter, false, false, ['PROPERTY_ICON', 'NAME']); // с помощью метода CIBlockElement::GetList вытаскиваем все значения из нужного элемента
        while($ob = $res->GetNext())
        {
            $arResult['PROPERTIES']['ADVANTAGES']['ELEMENTS'][] = $ob;
        }
}

if (!empty($arResult['PROPERTIES']['ADDITIONAL_PRODUCT']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['ADDITIONAL_PRODUCT']['VALUE'] as $product) {
        $arResult['ADDITIONAL_PRODUCT'][] = $product;
    }

    $this->__component->setResultCacheKeys([
        'ADDITIONAL_PRODUCT'
    ]);
}
