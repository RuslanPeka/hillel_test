<?php

namespace Core;

class Help
{
    public function head($str)
    {
        echo "<b>$str</b>";
    }

    public function br() 
    {
        echo '<br><hr><br>';
    }
}