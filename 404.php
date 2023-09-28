<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>

    <article>
        <section class="page404">
            <div class="container"><img src="<?=SITE_TEMPLATE_PATH?>/images/404-3.png">
                <div class="page404__text">
                    <p>Что-то пошло не так. Страница, которую вы ищите удалена или её не существует.</p><a class="sbmt--red-border" href="/">Вернуться на главную</a>
                </div>
            </div>
        </section>
    </article>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>