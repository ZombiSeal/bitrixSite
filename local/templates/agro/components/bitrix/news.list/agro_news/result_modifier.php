<?php
//vr($arResult['ITEMS']);
if (empty($_GET['PAGEN_1']))
{
    if(!empty($arParams['PREVIEW']))
    {
        $ob=$arParams['PREVIEW'];
        $arFilter = ["IBLOCK_ID" => NEWS_IBLOCK_ID, "VALUE" => $ob['PROPERTY_TYPE_VALUE']];
        $rsEnums = CIBlockPropertyEnum::GetList([], $arFilter);
        if($arEnum = $rsEnums->GetNext()) {
            if($_GET['type'] === $arEnum['XML_ID'] || $_GET['type'] === 'all'){
                $editLink = "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=" . $ob['IBLOCK_ID'] . "&type=" . $ob['IBLOCK_TYPE_ID'] . "&ID=" . $ob['ID'];
                $deleteLink = "/bitrix/admin/iblock_element_delete.php?IBLOCK_ID=" . $ob['IBLOCK_ID'] . "&type=" . $ob['IBLOCK_TYPE_ID'] . "&ID=" . $ob['ID'];
                $elem = $ob;
                $elem['EDIT_LINK'] = $editLink;
                $elem['DELETE_LINK'] = $deleteLink;
                $elem['IS_PREVIEW'] = 'Y';

                array_splice($arResult['ITEMS'], 3, 0, [$elem]);
            }
        }
    }
}


