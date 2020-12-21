<?php

namespace App\Controllers\Admin;

class UsersAdminController extends Controller
{
    public function __construct()
    {
        $this->generate('Admin', 'UsersAdmin');
    }
}