<?php

namespace Core;

class Router
{
    public $number = 10;
    public $string = 'Text';

    public function run()
    {
        $class_vars = get_class_vars(Router::class);
        return var_export($class_vars);
    }
}
