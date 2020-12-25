<?php

namespace App\Models;

use App\Models\General\Model;

class Gallery extends Model
{
    private $data = [
        'Gallery1' => 'Звёздное небо',
        'Gallery2' => 'Необитаемые острова',
        'Gallery3' => 'Архитекстура'
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