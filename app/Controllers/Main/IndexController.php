<?php

namespace App\Controllers\Main;

use App\Controllers\General\Controller;
use App\Models\Index;

class IndexController extends Controller
{
    public function index()
    {
        $objModel = new Index;
        $modelData = $objModel->getData();
        $this->generate('Main', 'Main', $modelData);
    }

    public function update()
    {
        $objIndex = new Index;
        $objIndex->updateIndex();
    }

    public function delete()
    {
        $objIndex = new Index;
        $objIndex->deleteIndex();
    }

    public function insert()
    {
        $objIndex = new Index;
        $objIndex->insertIndex();
    }
}