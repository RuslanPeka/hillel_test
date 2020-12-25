<?php

namespace App\Models;

use App\Models\General\Model;

class UserPermissions extends Model
{
    private $data = [
        'UserPermission1' => 'Доступ открыт',
        'UserPermission2' => 'Доступ ограничен',
        'UserPermission3' => 'Доступ закрыт'
    ];

    public function getData()
    {
        return $this->data;
    }

    public function setData($val)
    {
        $this->data = $val;
    }
}