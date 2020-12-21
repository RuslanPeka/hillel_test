<?php

namespace App\Controllers\Main;

// use App\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->generate('Main', 'Main');
    }
}