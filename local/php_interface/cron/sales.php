<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use classes\Sales;

$sales = new Sales();
$sales->init();
