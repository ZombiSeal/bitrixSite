<?php
$mainFields = array_splice($arResult['SHOW_FIELDS'],0, 4);
$arResult['SHOW_FIELDS'] = array_merge($arResult['SHOW_FIELDS'], $mainFields);