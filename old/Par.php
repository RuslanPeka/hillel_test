<?php

class Par
{
    protected $var = 10;
    protected $var1 = 20;

    public function getVar()
    {
        return $this -> var;
    }

    public function getVar1()
    {
        return $this -> var1;
    }

    public function setVar($val)
    {
        $this -> var = $val;
    }

    public function setVar1($val)
    {
        $this -> var1 = $val;
    }
}