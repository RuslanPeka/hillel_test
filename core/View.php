<?php

namespace Core;

class View
{
    public static function generate($template, $page, $data=[])
    {
        require_once '../web/assets/' . $template . '.php';
    }
}