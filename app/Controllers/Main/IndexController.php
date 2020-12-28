<?php

namespace App\Controllers\Main;

use App\Controllers\General\Controller;
use App\Models\Index;

class IndexController extends Controller
{
    public function go()
    {
        $objModel = new Index;
        $modelData = $objModel->getData();
        $this->generate('Main', 'Main', $modelData);
    }
}