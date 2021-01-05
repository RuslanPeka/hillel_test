<?php

namespace App\Models;

use App\Models\General\Model;
use Components\Orm\Select;
use PDO;
use Core\MyHelp;

class UserPermissions extends Model
{
    private $dataPermissions = [];

    public function getData()
    {
        return $this->dataPermissions;
    }

    public function setData($columns = "name", $tableName = 'user_permissions', $order = 'name', $group = 'name')
    {
        $set = new Select();
        $set->setColumns($columns);
        $set->setTableName($tableName);
        // $set->setOrder($order);
        // $set->setGroup($group);
        // $set->setLimit(2);
        // $set->setOffset(1);
        $result = $set->execute();
        while ($row = $result->fetch(PDO::FETCH_LAZY)) {
            $this->dataPermissions[] = $row->$columns;
        }
    }
}