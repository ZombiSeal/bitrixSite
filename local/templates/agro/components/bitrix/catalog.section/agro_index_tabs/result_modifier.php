<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

if(!empty($arParams['TABS']) && !empty($arResult['ITEMS']))
{
    foreach ($arParams['TABS'] as $tab)
    {
        $arResult['TABS_MY'][$tab['EXTERNAL_ID']] = $tab;
        foreach ($arResult['ITEMS'] as $item)
        {
            if(in_array($tab['VALUE'], $item['PROPERTIES']['TABS']['VALUE']))
            {
                $arResult['TABS_MY'][$tab['EXTERNAL_ID']]['ELEMENTS'][] = $item;
            }
        }
    }
}
