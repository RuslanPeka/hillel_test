<?php

namespace App\Models;

use App\Models\General\Model;
use PDO;
use Core\MyHelp;

class Users extends Model
{
    protected $tableName = 'users';

    public function all() 
    {
        $select = $this->select();
        $select->setTableName($this->tableName);
        $select->setJoinTable('user_permissions');
        $select->setJoinLastTable($this->tableName);
        $select->setJoinMainColumn('id_permission');
        $select->setJoinColumn('id_user_permission');
        return $select->execute();
    }

    public function deleteRow() 
    {
        if(!empty($_GET['id'])) {
            $delete = $this->delete();
            $delete->setTable($this->tableName);
            $delete->setColumn('id');
            $delete->setValue($_GET['id']);
            return $delete->execute();
        } else {
            $this->all();
        }
    }

    public function insertUser()
    {
        if(!empty($_POST)) {
            $insert = $this->insert();
            $insert->setTable($this->tableName);
            $columns = [];
            $values = [];
            foreach($_POST as $k => $v) {
                $columns[] = $k;
                $values[] = $v;
            }
            $insert->setColumns($columns);
            $insert->setValues($values);
            return $insert->execute();
        }
    }
}