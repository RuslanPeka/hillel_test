<?php

namespace App\Controllers\Admin;

use Core\View;

class Controller
{
    protected function generate($template, $page, $data=[])
    {
        View::generate($template, $page, $data=[]);
    }
}