<div class="search-block header-bottom__btn-block">
    <form action="<?echo $arResult["FORM_ACTION"]?>">
        <input name="q" type="text" placeholder="Введите ваш поисковый запрос">
        <button class="close">
            <svg class="sprite-svg">
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/images/sprite/sprite.svg#close"></use>
            </svg>
        </button>
        <input class="ico-search" type="submit">
    </form>
</div>