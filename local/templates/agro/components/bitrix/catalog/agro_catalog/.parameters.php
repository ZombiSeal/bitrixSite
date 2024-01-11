<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


$arTemplateParameters["SEF_MODE"] = array(
    "sections" => array(
        "NAME" => GetMessage("SECTIONS_TOP_PAGE"),
        "DEFAULT" => "",
        "VARIABLES" => array(
        ),
    ),
    "section" => array(
        "NAME" => GetMessage("SECTION_PAGE"),
        "DEFAULT" => "#SECTION_ID#/",
        "VARIABLES" => array(
            "SECTION_ID",
            "SECTION_CODE",
            "SECTION_CODE_PATH",
        ),
    ),
    "element" => array(
        "NAME" => GetMessage("DETAIL_PAGE"),
        "DEFAULT" => "#SECTION_ID#/#ELEMENT_ID#/",
        "VARIABLES" => array(
            "ELEMENT_ID",
            "ELEMENT_CODE",
            "SECTION_ID",
            "SECTION_CODE",
            "SECTION_CODE_PATH",
        ),
    ),
    "compare" => array(
        "NAME" => GetMessage("COMPARE_PAGE"),
        "DEFAULT" => "compare.php?action=#ACTION_CODE#",
        "VARIABLES" => array(
            "action",
        ),
    ),
    "search" => array(
        "NAME" => 'Поиск',
        "DEFAULT" => "search/",
    ),

    "brand" => array(
        "NAME" => 'Бренд',
        "DEFAULT" => "brands/#SECTION_CODE#/#ELEMENT_CODE#/",
    ),

    "brands" => array(
        "NAME" => 'Бренды',
        "DEFAULT" => "brands/",
    )
);