<?php

namespace web;
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
class BuyOneclick extends \CBitrixComponent
{

    public function executeComponent()
    {

        $this->includeComponentTemplate();
    }
}