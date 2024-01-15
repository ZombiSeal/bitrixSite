<?php
if (!empty($arResult['ERRORS'])) {
    ob_end_clean();
    echo true;
    die();
}
