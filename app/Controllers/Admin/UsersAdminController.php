<?php

namespace App\Controllers\Admin;

use App\Models\UserPermissions;
use App\Models\Users;
use Core\MyHelp;

use App\Controllers\General\Controller;

class UsersAdminController extends Controller
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Users();
    }

    public function index()
    {
        $data = $this->conn->all();
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
        $data = $this->conn->deleteRow();
        $data = $this->conn->all();
        parent::generate('Admin', 'UsersAdmin', $data);
    }

    public function insert()
    {
        $data = $this->conn->insertUser();
        $data = $this->conn->all();
        parent::generate('Admin', 'UsersAdmin', $data);
    }

    public function select()
    {
        $objUsers = new Users();
        $data = $objUsers->all();
        parent::generate('Admin', 'UsersAdmin', $data);
    }
}