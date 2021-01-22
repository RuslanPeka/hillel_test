<?php

namespace App\Models;

use App\Models\General\Model;
use Components\Orm\Select;
use PDO;
use Core\MyHelp;

class Articles extends Model
{
    protected $tableName = 'articles';

    public function all() {
        $select = $this->select();
        $select->setTableName($this->tableName);
        $select->setJoinTable('users');
        $select->setJoinLastTable($this->tableName);
        $select->setJoinMainColumn('id');
        $select->setJoinColumn('id_author');
        return $select->execute();
    }

    public function deleteRow() 
    {
        if(!empty($_GET['id_article'])) {
            $delete = $this->delete();
            $delete->setTable($this->tableName);
            $delete->setColumn('id_article');
            $delete->setValue($_GET['id_article']);
            return $delete->execute();
        } else {
            $this->all();
        }
    }

    public function insertArticle()
    {
        if(!empty($_POST)) {
            $insert = $this->insert();
            $insert->setTable($this->tableName);
            $columns = [];
            $values = [];
            foreach($_POST as $k => $v) {
                $columns[] = $k;
                $values[] = $v;
            }
            $insert->setColumns($columns);
            $insert->setValues($values);
            return $insert->execute();
        }
    }
}