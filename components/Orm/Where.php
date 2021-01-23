<?php

namespace Components\Orm;

use Core\MyHelp;

class Where
{
    const AND_CONDITION = 'AND';
    const OR_CONDITION = 'OR';

    private $column;
    private $comparison = '=';
    private $condition;

    public function setColumn($column)
    {
        $this->column = $column;
    }

    public function setComparison($comparison)
    {
        $this->comparison = $comparison;
    }

    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    public function getWhere($type = self::AND_CONDITION)
    {
        $result = '';
        if(!empty($this->condition)) {
            $result .= ' WHERE ';
            if(is_array($this->condition)) {
                $count = count($this->column);
                for($i = 0; $i < $count; $i++) {
                    if($i == 0) $result .= $this->column[$i] . $this->comparison . $this->condition[$i];
                    else $result .= ' ' . $type . ' ' . $this->column[$i] . $this->comparison . '\'' . $this->condition[$i] . '\'';
                }
            } else {
                $result .= $this->column . $this->comparison . '\'' . $this->condition . '\'';
            }
        }
        return $result;
    }
}