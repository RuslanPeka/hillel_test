<?php

namespace App\Controllers\Admin;

use App\Controllers\General\Controller;

class UsersAdminController extends Controller
{
    public function __construct()
    {
        $this->generate('Admin', 'UsersAdmin');
    }
}