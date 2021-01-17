<?php

namespace Components\Orm;

use Core\MyHelp;
use Components\Orm\Where;
use PDO;

class Update
{
    private $connect;
    private $table;
    private $column;
    private $whereColumn;
    private $comparison = '=';
    private $value;
    private $whereValue;

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function setColumn($column)
    {
        $this->column = $column;
    }

    public function setWhereColumn($whereColumn)
    {
        $this->whereColumn = $whereColumn;
    }

    public function setComparison($comparison)
    {
        $this->comparison = $comparison;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setWhereValue($whereValue)
    {
        $this->whereValue = $whereValue;
    }

    public function __construct()
    {
        $connector = new Connector();
        $this->connect = $connector->connect();
    }

    public function getUpdate()
    {
        $result = '';
        if(!empty($this->table) && !empty($this->column) && !empty($this->value)) {
            $result .= ' UPDATE ' . $this->table . ' SET ' . $this->column . $this->comparison .  '\'' . $this->value . '\'';
            $where = new Where;
            $where->setColumn($this->whereColumn);
            $where->setCondition($this->whereValue);
            $result .= $where->getWhere();
        }
        return $result;
    }

    public function execute()
    {
        $sql = $this->getUpdate();
        return $this->connect->query($sql);
    }
}