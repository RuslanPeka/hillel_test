<?php

namespace Core;

class MyHelp
{
    public static function head($str)
    {
        echo "<b>$str</b>";
    }

    public static function br() 
    {
        echo '<br><hr><br>';
    }

    public static function export($var)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }

    public static function className($name)
    {
        $url = get_class($name);
        $arr = explode('\\', $url);
        return end($arr);
    }
}