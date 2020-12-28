<?php

namespace Core;

class ClassNamespace
{
    public static function createNamespace()
    {
        // Решил проблему дублирования кода заменой цикла на ветвление
        $address = 'App\\Controllers\\';
        if(mb_strstr($_SERVER['REQUEST_URI'], 'admin') != '') $address .= 'Admin\\';
        else $address .= 'Main\\';
        return $address;
    }
}