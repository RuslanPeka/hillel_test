<?php

namespace Components\Orm;

use Core\MyHelp;
use Components\Orm\Where;
use PDO;

class Delete
{
    private $connect;
    private $table;
    private $column;
    private $comparison = '=';
    private $value;

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function setColumn($column)
    {
        $this->column = $column;
    }

    public function setComparison($comparison)
    {
        $this->comparison = $comparison;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function __construct()
    {
        $connector = new Connector();
        $this->connect = $connector->connect();
    }

    public function getDel()
    {
        $result = '';
        if(!empty($this->table) && !empty($this->column) && !empty($this->value)) {
            $result .= ' DELETE FROM ';
            $result .= $this->table;
            $where = new Where;
            $where->setColumn($this->column);
            $where->setCondition($this->value);
            $result .= $where->getWhere();
        }
        return $result;
    }

    public function execute()
    {
        $sql = $this->getDel();
        return $this->connect->query($sql);
    }
}