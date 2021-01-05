<?php

namespace App\Models;

use App\Models\General\Model;
use Components\Orm\Select;
use PDO;
use Core\MyHelp;

class Users extends Model
{
    private $dataUsers = [];

    public function getData()
    {
        return $this->dataUsers;
    }

    public function setData($columns = 'first_name', $tableName = 'users')
    {
        $sel = new Select();
        $sel->setColumns($columns);
        $sel->setTableName($tableName);
        // $sel->setJoinTable('user_permissions');
        // $sel->setJoinMainColumn('id_user_permission');
        // $sel->setJoinColumn('id');
        $result = $sel->execute();
        while ($row = $result->fetch(PDO::FETCH_LAZY)) {
            $this->dataUsers[] = $row->$columns;
        }
    }
}