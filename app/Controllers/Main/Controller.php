<?php

namespace App\Controllers\Main;

use Core\View;

class Controller
{
    protected function generate($template, $page, $data=[])
    {
        View::generate($template, $page, $data=[]);
    }
}