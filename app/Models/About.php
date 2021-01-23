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

    public function updateAbout()
    {
        return header("Location: http://hilleltest/about");
    }

    public function insertAbout()
    {
        return header("Location: http://hilleltest/about");
    }

    public function deleteAbout()
    {
        return header("Location: http://hilleltest/about");
    }
}