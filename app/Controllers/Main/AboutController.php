<?php

namespace App\Controllers\Main;

use App\Controllers\General\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $objAbout = new About;
        $data = $objAbout->getData();
        $this->generate('Main', 'About', $data);
    }

    public function update()
    {
        $objAbout = new About;
        return $objAbout->updateAbout();
    }

    public function delete()
    {
        $objAbout = new About;
        return $objAbout->deleteAbout();
    }

    public function insert()
    {
        $objAbout = new About;
        return $objAbout->insertAbout();
    }
}