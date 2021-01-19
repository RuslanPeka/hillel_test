<?php

namespace App\Controllers\Admin;

use App\Models\UserPermissions;
use App\Models\Users;
use Core\MyHelp;

use App\Controllers\General\Controller;

class UsersAdminController extends Controller
{
    public function index()
    {
        $objUsers = new Users();
        $data = $objUsers->all();
        parent::generate('Admin', 'UsersAdmin', $data);
    }

    public function update()
    {
        $objUsers = new Users();
        $data = $objUsers->all();
        parent::generate('Admin', 'UsersAdmin', $data);
    }

    public function delete()
    {
        $objUsers = new Users();
        $data = $objUsers->all();
        parent::generate('Admin', 'UsersAdmin', $data);
    }

    public function insert()
    {
        $objUsers = new Users();
        $data = $objUsers->all();
        parent::generate('Admin', 'UsersAdmin', $data);
    }

    public function select()
    {
        $objUsers = new Users();
        $data = $objUsers->all();
        parent::generate('Admin', 'UsersAdmin', $data);
    }
}