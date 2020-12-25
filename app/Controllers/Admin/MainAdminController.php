<?php

namespace App\Controllers\Admin;

use App\Controllers\General\Controller;

class MainAdminController extends Controller
{
    public function go()
    {
        $this->generate('Admin', 'MainAdmin');
    }
}