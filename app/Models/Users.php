<?php

namespace App\Models;

use App\Models\General\Model;

class Users extends Model
{
    private $data = [
        'User1' => 'Энакин Скайвокер',
        'User2' => 'Оби-Ван Кеноби',
        'User3' => 'Магистр Йода'
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