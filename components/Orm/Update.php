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

    public function __construct()
    {
        $connector = new Connector();
        $this->connect = $connector->connect();
    }


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

    public function getUpdate()
    {
        $result = '';
        if(!empty($this->table) && !empty($this->column) && !empty($this->value)) {
            $result = 'UPDATE ' . $this->table . ' SET ';
            if(is_array($this->column)) {
                $count = count($this->column);
                for($i = 0; $i < $count; $i++) {
                    $result .= $this->column[$i] . $this->comparison .  '\'' . $this->value[$i] . '\'';
                    if($i != ($count - 1)) $result .= ', ';
                }
            } else {
                $result .= $this->column . $this->comparison .  '\'' . $this->value . '\'';
            }
            if(!empty($this->whereColumn) && !empty($this->whereValue)) {
                $where = new Where;
                $where->setColumn($this->whereColumn);
                $where->setCondition($this->whereValue);
                $result .= $where->getWhere();
            }
        }
        return $result;
    }

    public function execute()
    {
        $sql = $this->getUpdate();
        // MyHelp::export($sql);
        return $this->connect->query($sql);
    }
}