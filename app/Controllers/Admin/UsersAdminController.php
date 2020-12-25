<?php

namespace App\Controllers\Admin;

use App\Models\Users;
use App\Models\UserPermissions;
use Core\MyHelp;

use App\Controllers\General\Controller;

class UsersAdminController extends Controller
{
    public function go()
    {
        $objModel1 = new Users;
        $objModel2 = new UserPermissions;
        $modelData = [];
        $modelData = [MyHelp::className($objModel1) => $objModel1->getData()];
        $modelData += [MyHelp::className($objModel2) => $objModel2->getData()];
        $this->generate('Admin', 'UsersAdmin', $modelData);
    }
}