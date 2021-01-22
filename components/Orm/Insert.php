<?php

namespace Components\Orm;

use Core\MyHelp;
use Components\Orm\Where;
use PDO;

class Insert

{
    private $connect;
    private $table;
    private $columns;
    private $values;

    public function setTable($table)
    {
        $this->table = $table;
    }

    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    public function setValues($values)
    {
        $this->values = $values;
    }

    public function __construct()
    {
        $connector = new Connector();
        $this->connect = $connector->connect();
    }

    public function getInsert()
    {
        $result = '';
        if(!empty($this->table) && !empty($this->columns) && !empty($this->values)) {
            $result .= 'INSERT INTO ' . $this->table . '(';
            if(is_array($this->columns)) {
                $count = count($this->columns);
                for($i = 0; $i < $count; $i++) {
                    $result .= $this->columns[$i];
                    if($i != ($count - 1)) $result .= ', ';
                }
                $result .= ') VALUES(';
                for($i = 0; $i < $count; $i++) {
                    $result .= '\'' .  $this->values[$i] . '\'';
                    if($i != ($count - 1)) $result .= ', ';
                }
                $result .= ')';
            } else {
                $result .= $this->columns . ') VALUES(' . '\'' . $this->values . '\')';
            }
        }
        return $result;
    }

    public function execute()
    {
        $sql = $this->getInsert();
        return $this->connect->query($sql);
    }
}