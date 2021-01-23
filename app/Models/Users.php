<?php

namespace App\Models;

use App\Models\General\Model;
use PDO;
use Core\MyHelp;

class Users extends Model
{
    protected $tableName = 'users';
    private $conn;

    public function all() 
    {
        $this->conn = $this->select();
        $this->conn->setTableName($this->tableName);
        $this->conn->setJoinTable('user_permissions');
        $this->conn->setJoinLastTable($this->tableName);
        $this->conn->setJoinMainColumn('id_permission');
        $this->conn->setJoinColumn('id_user_permission');
        return $this->conn->execute();
    }

    public function deleteRow() 
    {
        if(!empty($_GET['id'])) {
            $this->conn = $this->delete();
            $this->conn->setTable($this->tableName);
            $this->conn->setColumn('id');
            $this->conn->setValue((int) $_GET['id']);
            return $this->conn->execute();
        } else {
            $this->all();
        }
    }

    public function insertUser()
    {
        if(!empty($_POST)) {
            $this->conn = $this->insert();
            $this->conn->setTable($this->tableName);
            $columns = [];
            $values = [];
            foreach($_POST as $k => $v) {
                if($k != 'id') {
                    $columns[] = MyHelp::validString($k);
                    $values[] = MyHelp::validString($v);
                    if($k == 'e_mail') $values[$k] = filter_var($v, FILTER_VALIDATE_EMAIL);
                }
            }
            $this->conn->setColumns($columns);
            $this->conn->setValues($values);
            return $this->conn->execute();
        }
    }

    public function selectRow() {
        $this->conn = $this->select();
        $this->conn->setTableName($this->tableName);
        $this->conn->setJoinTable('user_permissions');
        $this->conn->setJoinLastTable($this->tableName);
        $this->conn->setJoinMainColumn('id_permission');
        $this->conn->setJoinColumn('id_user_permission');
        $this->conn->setWhereColumn('id');
        $this->conn->setWhereCondition((int) $_GET['id']);
        return $this->conn->execute();
    }

    public function updateRow() {
        if(!empty($_POST)) {
            $this->conn = $this->update();
            $this->conn->setTable($this->tableName);
            $keys = [];
            $values = [];
            foreach($_POST as $k => $v) {
                $keys[] = MyHelp::validString($k);
                $values[] = MyHelp::validString($v);
                if($k == 'e_mail') $values[$k] = filter_var($v, FILTER_VALIDATE_EMAIL);
            }
            $this->conn->setColumn($keys);
            $this->conn->setValue($values);
            $this->conn->setWhereColumn('id');
            $this->conn->setWhereValue((int) $_POST['id']);
            return $this->conn->execute();
        }
    }
}