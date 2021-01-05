<?php

namespace App\Models;

use App\Models\General\Model;
use Components\Orm\Select;
use PDO;
use Core\MyHelp;

class Users extends Model
{
    // Добавка с урока №12
    protected $tableName = 'users';

    private $dataUsers = [];

    public function getData()
    {
        return $this->dataUsers;
    }

    // Добавление с урока №12
    public function all() {
        $select = $this->select();
        $select->setTableName($this->tableName);
        return $select->execute();
    }

    public function setData($columns = 'first_name', $tableName = 'users')
    {
        $sel = new Select();
        $sel->setColumns($columns);
        $sel->setTableName($tableName);
        $result = $sel->execute();
        while ($row = $result->fetch(PDO::FETCH_LAZY)) {
            $this->dataUsers[] = $row->$columns;
        }
    }
}