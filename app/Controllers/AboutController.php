<?php

namespace App\Controllers;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->generate('Main', 'About');
    }
}