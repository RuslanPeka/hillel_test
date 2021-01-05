<?php

namespace App\Controllers\Admin;

use App\Models\UserPermissions;
use App\Models\Users;
use Core\MyHelp;

use App\Controllers\General\Controller;

class UsersAdminController extends Controller
{
    public function go()
    {
        $objUsers = new Users;
        $objUsers->setData();
        $objUserPermis = new UserPermissions;
        $objUserPermis->setData();
        $modelData = [];
        $modelData = [MyHelp::className($objUsers) => $objUsers->getData()];
        $modelData += [MyHelp::className($objUserPermis) => $objUserPermis->getData()];
        $this->generate('Admin', 'UsersAdmin', $modelData);
    }
}