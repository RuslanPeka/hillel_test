<?php

namespace App\Models;

use App\Models\General\Model;

class Index extends Model
{
    private $data = [
        'Index1' => 'Индекс 1',
        'Index2' => 'Индекс 2',
        'Index3' => 'Индекс 3'
    ];

    public function getData()
    {
        return $this->data;
    }

    public function setData($val)
    {
        $this->data = $val;
    }

    public function updateIndex()
    {
        return header("Location: http://hilleltest/");
    }

    public function insertIndex()
    {
        return header("Location: http://hilleltest/");
    }

    public function deleteIndex()
    {
        return header("Location: http://hilleltest/");
    }
}