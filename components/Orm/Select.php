<?php

namespace Components\Orm;

use Core\MyHelp;
use PDO;

class Select
{
    private $columns = '*';
    private $tableName;
    private $connect;
    private $order;
    private $group;
    private $limit;
    private $offset;
    private $joinTable;
    private $joinMainColumn;
    private $joinColumn;

    public function __construct()
    {
        $connector = new Connector();
        $this->connect = $connector->connect();
    }

    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    public function setOrder($order)
    {
        $this->order = $order;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    public function setJoinTable($joinTable)
    {
        $this->joinTable = $joinTable;
    }

    public function setJoinMainColumn($joinMainColumn)
    {
        $this->joinMainColumn = $joinMainColumn;
    }

    public function setJoinColumn($joinColumn)
    {
        $this->joinColumn = $joinColumn;
    }

    private function prepareJoin()
    {
        $result = '';
        if(is_array($this->joinTable)) {
            $count = count($this->joinTable);
            for($i = 0; $i <= $count; $i++) {
                if($i = 0) continue;
                if(!empty($this->joinTable) && !empty($this->joinMainColumn) && !empty($this->joinColumn)) $result .= ' INNER JOIN ' . $this->joinTable[$i-1] . ' ON ' . $this->joinTable[$i-1] . '.' . $this->joinColumn[$i-1] . ' = ' . $this->joinTable[$i] . '.' . $this->joinColumn[$i];
            }
        } else {
            if(!empty($this->joinTable) && !empty($this->joinMainColumn) && !empty($this->joinColumn)) $result .= ', ' . $this->joinTable . ' WHERE ' . $this->prepareTableName() . '.' . $this->joinMainColumn . ' = ' . $this->joinTable . '.' . $this->joinColumn;
        }
        return $result;
    }

    private function prepareColumns()
    {
        $result = '';
        if(is_array($this->columns)) {
            foreach($this->columns as $alias => $val) {
                $piece = '';
                if(is_int($alias)) $piece = $val;
                else $piece = $val . ' AS ' . $alias;

                if(empty($result)) $result = $piece;
                else $result .= ', ' . $piece;
            }
        } else {
            $result = $this->columns;
        }
        return $result;
    }

    private function prepareTableName()
    {
        $result = '';
        if(is_array($this->tableName)) {
            foreach($this->tableName as $alias => $val) {
                $piece = '';
                if(is_int($alias)) $piece = $val;
                else $piece = $val . ' AS ' . $alias;

                if(empty($result)) $result = $piece;
                else $result .= ', ' . $piece;
            }
        } else {
            $result = $this->tableName;
        }
        return $result;
    }

    private function createSql():string
    {
        $result = '';
        $result .= 'SELECT ';
        $result .= $this->prepareColumns();
        $result .= ' FROM ';
        $result .= $this->prepareTableName();
        if(!empty($this->joinTable) && !empty($this->joinMainColumn) && !empty($this->joinColumn)) $result .= $this->prepareJoin();
        if(!empty($this->order)) $result .= ' GROUP BY ' . $this->group;
        if(!empty($this->order)) $result .= ' ORDER BY ' . $this->order;
        if(!empty($this->limit) && empty($this->offset)) $result .= ' LIMIT ' . $this->limit;
        if(!empty($this->limit) && !empty($this->offset)) $result .= ' LIMIT ' . $this->limit . ' OFFSET ' . $this->offset;
        // MyHelp::export($result);
        return $result;
    }

    public function execute()
    {
        $sql = $this->createSql();
        return $this->connect->query($sql);
    }
}