<?php

namespace App\Models;

use App\Models\General\Model;
use PDO;
use Core\MyHelp;

class Admin extends Model
{
    public function updateAdmin()
    {
        return header("Location: http://hilleltest/admin/");
    }

    public function insertAdmin()
    {
        return header("Location: http://hilleltest/admin/");
    }

    public function deleteAdmin()
    {
        return header("Location: http://hilleltest/admin/");
    }
}