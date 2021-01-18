<?php

namespace App\Controllers\Admin;

use App\Models\UserPermissions;
use App\Models\Users;
use Core\MyHelp;

use App\Controllers\General\Controller;

class UsersAdminController extends Controller
{
    // Добавление с урока №12
    // public function indexAction()
    // {
    //     $objUsers = new Users();
    //     $data = $objUsers->all();
    //     parent::generate('Admin', 'Index', $data);
    // }

    public function index()
    {
        $objUsers = new Users();
        $data = $objUsers->all();
        parent::generate('Admin', 'UsersAdmin', $data);

        // $objUsers = new Users;
        // $objUsers->setData();
        // $objUserPermis = new UserPermissions;
        // $objUserPermis->setData();
        // $modelData = [];
        // $modelData = [MyHelp::className($objUsers) => $objUsers->getData()];
        // $modelData += [MyHelp::className($objUserPermis) => $objUserPermis->getData()];
        // $this->generate('Admin', 'UsersAdmin', $modelData);
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