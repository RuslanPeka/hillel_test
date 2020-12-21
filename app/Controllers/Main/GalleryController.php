<?php

namespace App\Controllers\Main;

// use App\Controller;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->generate('Main', 'Gallery');
    }
}