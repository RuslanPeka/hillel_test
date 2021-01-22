<?php

namespace App\Controllers\Main;

use App\Controllers\General\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $objGallery = new Gallery;
        $data = $objGallery->getData();
        $this->generate('Main', 'Gallery', $data);
    }

    public function update()
    {
        $objGallery = new Gallery;
        $objGallery->updateGallery();
    }

    public function delete()
    {
        $objGallery = new Gallery;
        $objGallery->deleteGallery();
    }

    public function insert()
    {
        $objGallery = new Gallery;
        $objGallery->insertGallery();
    }
}