<?php

namespace Components\Orm;

use Components\Orm\Where;
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
    private $joinLastTable;
    private $joinMainColumn;
    private $joinColumn;
    private $joinComparison = '=';

    private $whereColumn;
    private $whereCondition;

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

    public function setJoinLastTable($joinLastTable)
    {
        $this->joinLastTable = $joinLastTable;
    }

    public function setJoinMainColumn($joinMainColumn)
    {
        $this->joinMainColumn = $joinMainColumn;
    }

    public function setJoinColumn($joinColumn)
    {
        $this->joinColumn = $joinColumn;
    }

    public function setJoinComparison($joinComparison)
    {
        $this->joinComparison = $joinComparison;
    }

    public function setWhereColumn($whereColumn)
    {
        $this->whereColumn = $whereColumn; 
    }

    public function setWhereCondition($whereCondition)
    {
        $this->whereCondition = $whereCondition; 
    }

    public function prepareColumns()
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

    public function prepareTableName()
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

    public function prepareJoin()
    {
        $result = '';
        if(!empty($this->joinTable) && !empty($this->joinMainColumn) && !empty($this->joinColumn)) {
            if(is_array($this->joinTable)) {
                foreach($this->joinTable as $k => $v) {
                    $result .= ' INNER JOIN ' . $v . ' ON ' . $v . '.' . $this->joinMainColumn[$i] . ' ' . $this->joinComparison . ' ' . $this->joinLastTable[$i] . '.' . $this->joinColumn[$i];
                }
            } else {
                $result .= ' INNER JOIN ' . $this->joinTable . ' ON ' . $this->joinTable . '.' . $this->joinMainColumn . ' ' . $this->joinComparison . ' ' . $this->joinLastTable . '.' . $this->joinColumn;
            }
        }
        // MyHelp::export($result);
        return $result;
    }

    public function prepareWhere() {
        $result = '';
        if(!empty($this->whereColumn) && !empty($this->whereCondition)) {
            $where = new Where;
            $where->setColumn($this->whereColumn);
            $where->setCondition($this->whereCondition);
            $result .= $where->getWhere();
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
        $result .= $this->prepareWhere();
        return $result;
    }

    public function execute()
    {
        $sql = $this->createSql();
        // MyHelp::export($sql);
        return $this->connect->query($sql);
    }
}