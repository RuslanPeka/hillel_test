<?php

namespace App\Controllers\Main;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->generate('Main', 'About');
    }
}