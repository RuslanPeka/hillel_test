<?php

namespace Core;

class ClassNamespace
{
    public static function createNamespace()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        $address = 'App\\Controllers\\Main\\';
        foreach($url as $v) {
            if($v == 'admin') {
                $address = 'App\\Controllers\\Admin\\';
            }
        }
        return $address;
    }
}