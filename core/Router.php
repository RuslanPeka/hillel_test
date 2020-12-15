<?php

namespace Core;

class Router
{
    private $routingMap;
    private $requestPath;

    public function __construct()
    {
        $this -> routingMap = include_once '../app/Config/routingMap.php';
        $this -> requestPath = $_SERVER['PATH_INFO']??'/';
    }

    public function run()
    {
        // var_export($this -> routingMap);
        // var_export($_SERVER);
        if(in_array($this -> requestPath, array_keys($this -> routingMap))) {
            $classNamespace = 'App\\Controllers\\' . $this->routingMap[$this->requestPath] . 'Controller';
            $classObj = new $classNamespace;
        }
    }
}
