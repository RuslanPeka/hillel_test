<?php

namespace App\Controllers\Admin;

use App\Controllers\General\Controller;

class MainAdminController extends Controller
{
    public function index()
    {
        $this->generate('Admin', 'MainAdmin');
    }
}