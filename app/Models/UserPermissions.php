<?php

namespace App\Models;

use App\Models\General\Model;
use PDO;
use Core\MyHelp;

class UserPermissions extends Model
{
    protected $tableName = 'user_permissions';
    private $conn;

    public function all() 
    {
        $this->conn = $this->select();
        $this->conn->setTableName($this->tableName);
        return $this->conn->execute();
    }

    public function deleteRow() 
    {
        if(!empty($_GET['id'])) {
            $this->conn = $this->delete();
            $this->conn->setTable($this->tableName);
            $this->conn->setColumn('id');
            $this->conn->setValue($_GET['id']);
            return $this->conn->execute();
        } else {
            $this->all();
        }
    }

    public function insertPermission()
    {
        if(!empty($_POST)) {
            $this->conn = $this->insert();
            $this->conn->setTable($this->tableName);
            $columns = [];
            $values = [];
            foreach($_POST as $k => $v) {
                $columns[] = $k;
                $values[] = $v;
            }
            $this->conn->setColumns($columns);
            $this->conn->setValues($values);
            return $this->conn->execute();
        }
    }
}