<?php

namespace Components\Orm;
use PDO;

class Select
{
    private $columns = '*';
    private $tableName;
    private $connect;

    public function __construct()
    {
        $connector = new Connector();
        $this->connect = $connector->connect();
    }

    public function setColumns($col)
    {
        $this->columns = $col;
    }

    public function setTableName($name)
    {
        $this->tableName = $name;
    }

    private function prepareColumns()
    {
        $result = '';
        if(is_array($this->columns)) {
            foreach($this->columns as $alias => $v) {
                $piece = '';
                if(is_int($alias)) $piece = $val;
                else $piece = $v . ' AS ' . $alias;

                if(empty($result)) $result = $piece;
                else $result .= ', ' . $piece;
            }
        } else {
            $result = $this->columns;
        }
        return $result;
    }

    private function prepareTable()
    {
        $result = '';
        if(is_array($this->tableName)) {
            foreach($this->tableName as $alias => $v) {
                $piece = '';
                if(is_int($alias)) $piece = $val;
                else $piece = $v . ' AS ' . $alias;

                if(empty($result)) $result = $piece;
                else $result .= ', ' . $piece;
            }
        } else {
            $result = $this->tableNames;
        }
        return $result;
    }

    private function createSql():string
    {
        $result = '';
        $result .= $this->sqlString = 'SELECT ';
        $result .= $this->prepareColumns();
        $result .= $this->sqlString .= ' FROM ';
        $result .= $this->prepareTable();
        return $result;
    }

    public function execute()
    {
        $sql = $this->createSql();
        return $this->connect->query($sql);
    }
}