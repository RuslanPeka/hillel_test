<?php

namespace Core;

use Core\MyHelp;

class ActionName
{
    private $url;
    private $className;
    private $actionName;
    private $actionMap;

    public function getData()
    {
        $this->actionMap = require_once 'app/Config/actionMap.php';
        $address = $_SERVER['REQUEST_URI'];
        $addressArr = explode('/', $address);
        $last = array_pop($addressArr);
        $actionMapArr = $this->actionMap;
        $isAction = 'no';

        foreach($actionMapArr as $v) {
            if($v == $last) {
                $isAction = 'yes';
                $this->actionName = $last;
            }
        }

        if($isAction == 'no') {
            $this->actionName = 'index';
            $this->className = $address;
        } elseif($isAction == 'yes') {
            $result = '';
            foreach($addressArr as $v) {
                if($v != $last) $result .= '/' . $v;
            }
            $this->className = $result;
        }
        $this->actionName .= '()';
    }

    public function getClassName()
    {
        return $this->className;
    }
    public function getActionName()
    {
        return $this->actionName;
    }
}