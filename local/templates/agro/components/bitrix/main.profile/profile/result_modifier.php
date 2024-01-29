<?php
if($arResult["arUser"]['UF_TYPE'] == 4) {
    $arResult['arUserNew'] = [
        'NAME' => $arResult["arUser"]['NAME'],
        'LAST_NAME' => $arResult['arUser']['LAST_NAME'],
        'SECOND_NAME' => $arResult['arUser']['SECOND_NAME'],
        'EMAIL' => $arResult["arUser"]['EMAIL'],
        'PERSONAL_PHONE' => $arResult["arUser"]['PERSONAL_PHONE'],
        'PERSONAL_BIRTHDAY' => $arResult["arUser"]['PERSONAL_BIRTHDAY'],
        'UF_ADDRESS' => $arResult["arUser"]['UF_ADDRESS'],
    ];
}

if($arResult["arUser"]['UF_TYPE'] == 5) {
    $arResult['arUserNew'] = [
        'WORK_COMPANY' => $arResult["arUser"]['WORK_COMPANY'],
        'WORK_WWW' => $arResult['arUser']['WORK_WWW'],
        'EMAIL' => $arResult["arUser"]['EMAIL'],
        'WORK_PHONE' => $arResult["arUser"]['PERSONAL_PHONE'],
        'UF_ADDRESS' => $arResult["arUser"]['UF_ADDRESS'],
        'UF_SCORE' => $arResult["arUser"]['UF_SCORE'],
    ];
}