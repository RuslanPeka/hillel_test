<?php

namespace Components\Orm;

class Where
{
    const AND_CONDITION = 'AND';
    const OR_CONDITION = 'OR';

    public $condition;

    public function setWhere($condition)
    {
        $this->condition = $condition;
    }

    public function getWhere($type = self::AND_CONDITION)
    {
        $result = '';
        if(is_array($this->condition)) {
            foreach($this->condition as $col => $condition) {
                if(empty($result)) {
                    $result = $col . '=' . $condition;
                } else {
                    $result .= ' ' . $type . ' ' . $col . '=' . $condition;
                }
            }
        } else {
            $result = $this->condition;
        }
        return $result;
    }
}