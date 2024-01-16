<?php

if (file_exists(__DIR__.'/include/constants.php')) require_once __DIR__.'/include/constants.php';

if (file_exists(__DIR__.'/include/functions.php')) require_once __DIR__.'/include/functions.php';

//AddEventHandler("main", "OnBeforeUserLogin", "DoBeforeUserLoginHandler");
//function DoBeforeUserLoginHandler(&$arFields)
//{
//    $userLogin = $_POST["USER_LOGIN"];
//    if (isset($userLogin))
//    {
//        $isEmail = strpos($userLogin,"@");
//        if ($isEmail>0)
//        {
//            $arFilter = Array("EMAIL"=>$userLogin);
//            $rsUsers = CUser::GetList(($by="id"), ($order="desc"), $arFilter);
//            if($res = $rsUsers->Fetch())
//            {
//                if($res["EMAIL"]==$arFields["LOGIN"])
//                    $arFields["LOGIN"] = $res["LOGIN"];
//            }
//        } else {
//            $arFields["LOGIN"] = "";
//        }
//    }
//}
//
//AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");
//function OnBeforeUserRegisterHandler(&$args)
//{
//        $args['LOGIN'] = $args['EMAIL'];
//}