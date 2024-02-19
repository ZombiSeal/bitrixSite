<?php

//AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");
//\Bitrix\Main\EventManager::getInstance()->addEventHandler(
//    'main',
//    'OnBeforeUserRegister',
//    'my_module_id',
//    'MyClass',
//    'OnBeforeUserRegisterHandler'
//);

//AddEventHandler("main", "OnBeforeUserAdd", Array("MyClass", "OnBeforeUserAddHandler"));
//class MyClass
//{
//    // создаем обработчик события "OnBeforeUserAdd"
//    public static function OnBeforeUserAddHandler(&$arFields)
//    {
//        \Bitrix\Main\Diag\Debug::dumpToFile($arFields);
//    }
//}