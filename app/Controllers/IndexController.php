<?php

namespace App\Controllers;

class IndexController extends Controller
{
    public function __construct()
    {
        echo 'Контроллер Index';
        $this->generate('Main', 'Main');
    }
}