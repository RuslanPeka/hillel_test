<?php

namespace App\Controllers\Main;

use App\Controllers\General\Controller;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->generate('Main', 'About');
    }
}