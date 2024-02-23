<?php

\Bitrix\Main\Loader::registerAutoLoadClasses(null, [
    'classes\Sales' => '/local/php_interface/classes/Sales.php'
]);

if (file_exists(__DIR__.'/include/constants.php')) require_once __DIR__.'/include/constants.php';

if (file_exists(__DIR__.'/include/functions.php')) require_once __DIR__.'/include/functions.php';

if (file_exists(__DIR__.'/include/events.php')) require_once __DIR__.'/include/events.php';
