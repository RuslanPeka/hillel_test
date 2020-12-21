<?php

namespace App\Controllers\Main;

use App\Controllers\General\Controller;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->generate('Main', 'Gallery');
    }
}