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
        $users = new Users();
        $data = [
            $users->all(),
            ''
        ];
        parent::generate('Admin', 'UsersAdmin', $data);
    }

    public function update()
    {
        $users = new Users();
        $users->updateRow();
        $data = [
            $users->all(),
            $users->selectRow()
        ];
        parent::generate('Admin', 'UsersAdmin', $data);
    }

    public function delete()
    {
        $users = new Users();
        $users->deleteRow();
        return header("Location: http://hilleltest/admin/usersAdmin");
    }

    public function insert()
    {
        $users = new Users();
        $users->insertUser();
        return header("Location: http://hilleltest/admin/usersAdmin");
    }
}