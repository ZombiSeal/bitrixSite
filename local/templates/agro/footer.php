<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div>
                <div class="footer-logo"><a
                            href="/" <?php if ($APPLICATION->GetCurPage() == '/'): ?> onclick="return false;" <?php endif; ?>>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo2.svg">
                    </a></div>
                <div class="footer-copyright">
                    <span>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/footer_txt2.php",
                                "AREA_FILE_RECURSIVE" => "Y",
                                "EDIT_TEMPLATE" => "standard.php",
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                            false
                        ); ?>
                    </span>
                    <span>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/footer_txt3.php",
                                "AREA_FILE_RECURSIVE" => "Y",
                                "EDIT_TEMPLATE" => "standard.php",
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                            false
                        ); ?>
                    </span>
                </div>
            </div>
            <div class="footer-footersite">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/footer_txt4.php",
                        "AREA_FILE_RECURSIVE" => "Y",
                        "EDIT_TEMPLATE" => "standard.php",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                ); ?>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer__text">
                <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/footer_txt.php",
                        "AREA_FILE_RECURSIVE" => "Y",
                        "EDIT_TEMPLATE" => "standard.php"
                    )
                ); ?>
            </div>
            <div class="footer__img">
                <div class="img"><img class="lazy"
                                      src="data:image/gif;base64,R0lGODlhCgAIAIABAN3d3f///yH5BAEAAAEALAAAAAAKAAgAAAINjAOnyJv2oJOrVXrzKQA7"
                                      data-src="<?= SITE_TEMPLATE_PATH ?>/images/pay/0.svg"></div>
                <div class="img"><img class="lazy"
                                      src="data:image/gif;base64,R0lGODlhCgAIAIABAN3d3f///yH5BAEAAAEALAAAAAAKAAgAAAINjAOnyJv2oJOrVXrzKQA7"
                                      data-src="<?= SITE_TEMPLATE_PATH ?>/images/pay/1.svg"></div>
                <div class="img"><img class="lazy"
                                      src="data:image/gif;base64,R0lGODlhCgAIAIABAN3d3f///yH5BAEAAAEALAAAAAAKAAgAAAINjAOnyJv2oJOrVXrzKQA7"
                                      data-src="<?= SITE_TEMPLATE_PATH ?>/images/pay/2.svg"></div>
                <div class="img"><img class="lazy"
                                      src="data:image/gif;base64,R0lGODlhCgAIAIABAN3d3f///yH5BAEAAAEALAAAAAAKAAgAAAINjAOnyJv2oJOrVXrzKQA7"
                                      data-src="<?= SITE_TEMPLATE_PATH ?>/images/pay/3.svg"></div>
                <div class="img"><img class="lazy"
                                      src="data:image/gif;base64,R0lGODlhCgAIAIABAN3d3f///yH5BAEAAAEALAAAAAAKAAgAAAINjAOnyJv2oJOrVXrzKQA7"
                                      data-src="<?= SITE_TEMPLATE_PATH ?>/images/pay/4.svg"></div>
                <div class="img"><img class="lazy"
                                      src="data:image/gif;base64,R0lGODlhCgAIAIABAN3d3f///yH5BAEAAAEALAAAAAAKAAgAAAINjAOnyJv2oJOrVXrzKQA7"
                                      data-src="<?= SITE_TEMPLATE_PATH ?>/images/pay/5.svg"></div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
