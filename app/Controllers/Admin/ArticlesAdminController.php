<?php

namespace App\Controllers\Admin;

class ArticlesAdminController extends Controller
{
    public function __construct()
    {
        $this->generate('Admin', 'ArticlesAdmin');
    }
}