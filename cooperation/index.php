<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сотрудничество");

?>
<article>
    <section>
        <div class="container">
            <div class="breadcrumbs">
                <div class="bx-breadcrumb">
                    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","agro_breadcrumb",Array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => "s1"
                        )
                    );?>
                </div>
            </div>
            <div class="zag_main">
                <h1><?=$APPLICATION->GetTitle()?></h1>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "subtitle",
                        "EDIT_TEMPLATE" => "standard.php"
                    )
                ); ?>

            </div>
        </div>
    </section>
    <section>
        <div class="container text-page clearfix">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text1",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <h3>Карты рассрочки:</h3><br>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text2",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text3",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text4",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text5",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text6",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text7",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text8",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text9",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

        </div>
    </section>
</article>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
