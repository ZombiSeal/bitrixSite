<?php

namespace classes;

use Bitrix\Main\Loader;
use Bitrix\Sale\Internals\DiscountTable;
use CCatalogProduct;

Loader::includeModule('sale');
class Sales
{
    public function init() : void
    {
        $iblockClass = \Bitrix\Iblock\Iblock::wakeUp(CATALOG_IBLOCK_ID)->getEntityDataClass();
        $elements = $iblockClass::getList([
            'select' => ['ID', 'SALE'],
            'filter' => ['=ACTIVE' => 'Y']
        ])->fetchCollection();

        if(!empty($elements)) {
            foreach ($elements as $elem) {
                $res = CCatalogProduct::GetOptimalPrice($elem->getId());
                if(!empty($res['DISCOUNT'])) {
                    $elem->setSale($res['DISCOUNT_PRICE']);
                } else {
                    $elem->setSale('');
                }
            }
            $elements->save();
        }
    }
}