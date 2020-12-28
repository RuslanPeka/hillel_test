<?php

namespace App\Models;

use App\Models\General\Model;

class About extends Model
{
    private $data = [
        'About1' => 'Компания',
        'About2' => 'Адрес',
        'About3' => 'Номер телефона'
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