<?php

namespace App\Controllers\Admin;

class MainAdminController extends Controller
{
    public function __construct()
    {
        $this->generate('Admin', 'MainAdmin');
    }
}