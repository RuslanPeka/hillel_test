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
}