<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) { die();}
$APPLICATION->AddChainItem("Программа лояльности");
$APPLICATION->SetTitle("Программа лояльности");
require "template.php";
?>

<div class="lc-content">
    <div class="lc-program">
        <div class="lc-program__block">
            <div class="lc-program__block-status">Вы находитесь на старте</div>
            <div class="lc-program__block-action"><span class="red">Для получения скидки в 3%</span> совершите покупку на сумму 150 рублей (Сейчас ОПЛАЧЕННЫХ покупок совершено на 20 рублей)</div>
        </div>
        <div class="lc-program__block">
            <div class="lc-program__block-bar">
                <div class="lc-program__block-step active"><span>Старт</span></div>
                <div class="lc-program__block-step"><span>Ваша скидка в 3%</span></div>
                <div class="lc-program__block-step"><span>Ваша скидка в 5%</span></div>
                <div class="lc-program__block-step"></div>
            </div>
        </div>
        <div class="lc-program__block">
            <div class="lc-program__block-list">
                <ul>
                    <li>Программа лояльности от НОРМ САЙТ — это бонусная программа, которая делает покупки приятнее!</li>
                    <li>Совершите<strong>покупкок на сумму 150 рублей и получите скидку в 3%</strong> на следующие покупку.</li>
                    <li>Совершите<strong>покупкок на сумму 750 рублей и получите скидку в 5%</strong> на следующие покупку</li>
                </ul>
            </div>
        </div>
    </div>
</div>