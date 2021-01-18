<?php

namespace App\Controllers\Main;

use App\Controllers\General\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $objModel = new About;
        $modelData = $objModel->getData();
        $this->generate('Main', 'About', $modelData);
    }
}