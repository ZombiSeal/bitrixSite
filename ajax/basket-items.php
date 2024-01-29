<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
//$basket = \Bitrix\Sale\Basket::loadItemsForFUser(\Bitrix\Sale\Fuser::getId(), \Bitrix\Main\Context::getCurrent()->getSite());
//foreach ($basket as $basketItem) {
//    if ($arResult['ITEM']['ID'] == $basketItem->getProductId()) {
//        $arResult['ITEM']['IN_BASKET'] = true;
//        break;
//    } else {
//        $arResult['ITEM']['IN_BASKET'] = false;
//    }
//}
use Bitrix\Sale\Basket;
Bitrix\Main\Loader::includeModule("sale");
if($_POST['ajax_basket'] == 'Y') {
    ob_end_clean();
    $basket = \Bitrix\Sale\Basket::loadItemsForFUser(\Bitrix\Sale\Fuser::getId(), \Bitrix\Main\Context::getCurrent()->getSite());
    foreach ($basket as $basketItem) {
        $basketIds[] = $basketItem->getProductId();
    }
    echo json_encode($basketIds);
    die();
}

?>
<!--<script>-->
<!--    document.addEventListener('DOMContentLoaded', e=> {-->
<!--        fetch('/ajax/basket-items.php', {-->
<!--                method:'POST',-->
<!--                body: new URLSearchParams({-->
<!--                    ajax_basket: 'Y',-->
<!--                }),-->
<!--                headers: {-->
<!--                    'X-Requested-With': 'XMLHttpRequest'-->
<!--                }-->
<!--            }-->
<!--        ).then(res => {-->
<!--            return res.json();-->
<!--        }).then(data => {-->
<!--            console.log(data);-->
<!--        }).catch((error) => console.log(error));-->
<!--    })-->
<!--</script>-->
