<?php

namespace App\Controllers\Admin;

use App\Controllers\General\Controller;

class ArticlesAdminController extends Controller
{
    public function __construct()
    {
        $this->generate('Admin', 'ArticlesAdmin');
    }
}