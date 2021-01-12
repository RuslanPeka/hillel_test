<?php

namespace App\Models\General;
use Components\Orm\Select;

class Model
{
    protected function select()
    {
        return new Select();
    }

    protected function insert()
    {
        return new Insert();
    }

    protected function update()
    {
        return new Update();
    }

    protected function delete()
    {
        return new Delete();
    }
}