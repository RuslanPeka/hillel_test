<?php

require_once "Par.php";

class Child extends Par
{
    public function sum()
    {
        return ($this -> var + $this -> var1);
    }
}