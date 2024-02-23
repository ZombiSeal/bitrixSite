<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");

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
        <div class="text-page clearfix container">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "table",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_RECURSIVE" => "Y",
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "text",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            ); ?>



        </div>
    </section>
</article>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

