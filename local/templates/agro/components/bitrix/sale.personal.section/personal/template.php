<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$availablePages = [];
if ($arParams['SHOW_ORDER_PAGE'] === 'Y')
{

    $delimeter = ($arParams['SEF_MODE'] === 'Y') ? "?" : "&";
    $availablePages[] = array(
        "path" => $arResult['PATH_TO_ORDERS'].$delimeter."filter_history=Y",
        "name" => GetMessage("SPS_ORDER_PAGE_HISTORY"),
        "icon" => SITE_TEMPLATE_PATH . '/images/sprite/sprite.svg#shopping-bag'
    );
}

if ($arParams['SHOW_PRIVATE_PAGE'] === 'Y')
{
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_PRIVATE'],
		"name" => GetMessage("SPS_PERSONAL_PAGE_NAME"),
		"icon" => SITE_TEMPLATE_PATH . '/images/sprite/sprite.svg#avatar'
	);
}

if ($arParams['SHOW_LOYALTY_PAGE'] === 'Y')
{
    $availablePages[] = array(
        "path" => $arResult['PATH_TO_LOYALTY'],
        "name" => GetMessage("SPS_LOYALTY_PAGE_NAME"),
        "icon" => SITE_TEMPLATE_PATH . '/images/sprite/sprite.svg#crown'
    );
}
?>

<?php if(!empty($availablePages)):?>
<div class="lc-menu">
    <ul>
    <?php foreach ($availablePages as $blockElement):?>
        <li class='<?=($_SERVER["REQUEST_URI"] === htmlspecialcharsbx($blockElement['path'])) ? "active" : ""?>'>
            <a href="<?=htmlspecialcharsbx($blockElement['path'])?>">
                <svg class="sprite-svg">
                    <use xlink:href="<?=$blockElement['icon']?>"></use>
                </svg>
                <?=$blockElement['name']?>
            </a>
        </li>
    <?php endforeach;?><?php if($USER->IsAuthorized()):?>
        <li>
            <a href="/?logout=yes&<?=bitrix_sessid_get()?>">Выйти</a>
        </li>
<?endif;?>
    </ul>
</div>
<?php endif;?>
