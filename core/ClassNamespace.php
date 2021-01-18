<?php

namespace Core;
use Core\MyHelp;

class ClassNamespace
{
    public static function createNamespace($className)
    {
        $address = 'App\\Controllers\\';
        if(mb_strstr($className, 'admin') != '') $address .= 'Admin\\';
        else $address .= 'Main\\';
        return $address;
    }
}