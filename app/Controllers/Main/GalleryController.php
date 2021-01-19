<?php

namespace App\Controllers\Main;

use App\Controllers\General\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $objModel = new Gallery;
        $modelData = $objModel->getData();
        $this->generate('Main', 'Gallery', $modelData);
    }
}