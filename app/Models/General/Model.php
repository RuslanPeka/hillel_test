<?php

namespace App\Models\General;
use Components\Orm\Select;
use Components\Orm\Update;
use Components\Orm\Insert;
use Components\Orm\Delete;

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