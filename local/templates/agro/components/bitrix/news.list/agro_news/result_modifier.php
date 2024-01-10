<?php
//vr($arResult['ITEMS']);
if ($arParams['TAB'] === 'all') {
    $arFilter = Array("IBLOCK_ID"=>NEWS_IBLOCK_ID, "ACTIVE"=>"Y", "PROPERTY_PREVIEW" => 43);
    $res = CIBlockElement::GetList(["DATE_ACTIVE_FROM" => 'desc'], $arFilter, false, ["nTopCount" => 1], []);
    $elem = [];
    while($ob = $res->GetNext())
    {
        $editLink = "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=" . $ob['IBLOCK_ID'] . "&type=" . $ob['IBLOCK_TYPE_ID'] . "&ID=" . $ob['ID'];
        $deleteLink = "/bitrix/admin/iblock_element_delete.php?IBLOCK_ID=" . $ob['IBLOCK_ID'] . "&type=" . $ob['IBLOCK_TYPE_ID'] . "&ID=" . $ob['ID'];

        $elem = $ob;
        $elem['EDIT_LINK'] = $editLink;
        $elem['DELETE_LINK'] = $deleteLink;

    }
    array_splice($arResult['ITEMS'], 3, 0, [$elem]);

}


