<?php

namespace App\Controllers\Admin;

use App\Controllers\General\Controller;
use App\Models\Admin;

class MainAdminController extends Controller
{
    private $conn;

    public function index()
    {
        $this->generate('Admin', 'MainAdmin');
    }

    public function update()
    {
        $this->conn = new Admin;
        $this->conn->updateAdmin();
    }

    public function delete()
    {
        $this->conn = new Admin;
        $this->conn->deleteAdmin();
    }

    public function insert()
    {
        $this->conn = new Admin;
        $this->conn->insertAdmin();
    }
}