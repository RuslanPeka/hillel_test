<?php

function export($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function br() 
{
    echo '<br><hr><br>';
}

function head($str)
{
    echo "<b>$str</b>";
}