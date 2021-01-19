<?php

namespace App\Controllers\Admin;

use App\Controllers\General\Controller;

class ArticlesAdminController extends Controller
{
    public function index()
    {
        $this->generate('Admin', 'ArticlesAdmin');
    }
}