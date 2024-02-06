<?php
if (!empty($arResult['SHOW_PROPERTIES'])) {
    foreach ($arResult['SHOW_PROPERTIES'] as $code => $property){
            $arCompare = [];
            foreach ($arResult["ITEMS"] as &$arElement) {
                $res = CIBlockSection::GetList([], ["ID" => $arElement['IBLOCK_SECTION_ID']], false, [], ['NAME']);
                if ($el = $res->GetNext()) {
                    $arElement['SECTION_NAME'] = $el['NAME'];
                }
                if (!isset($arElement["DISPLAY_PROPERTIES"][$code])) {
                    continue;
                }

                $arPropertyValue = $arElement["DISPLAY_PROPERTIES"][$code]["VALUE"];
                if (is_array($arPropertyValue)) {
                    sort($arPropertyValue);
                    $arPropertyValue = implode(" / ", $arPropertyValue);
                }
                $arCompare[] = $arPropertyValue;
            }

            if(!(count(array_unique($arCompare)) > 1)) {
                if($arResult['DIFFERENT']) unset($arResult['SHOW_PROPERTIES'][$code]);
                foreach ($arResult['ITEMS'] as &$item) {
                    if($arResult['DIFFERENT']) {
                        unset($item['DISPLAY_PROPERTIES'][$code]);
                    }
                    else {
                        $item['DISPLAY_PROPERTIES'][$code]['DIF'] = true;
                    }
                }
            }
    }
}
