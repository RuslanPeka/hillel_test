<?php

namespace Core;

use Core\ClassNamespace;

class Router
{
    private $routingMap;
    private $requestPath;

    public function __construct()
    {
        $this->routingMap = include_once 'app/Config/routingMap.php';
        $this->requestPath = $_SERVER['PATH_INFO'] ?? '/';
    }
    
    public function run()
    {
        $classNamespace = ClassNamespace::createNamespace();
        if(in_array($this->requestPath, array_keys($this->routingMap))) {
            $classNamespace .= $this->routingMap[$this->requestPath];
        } else {
            $classNamespace = 'App\\Controllers\\General\\Error404';
        }
        $classNamespace .= 'Controller';
        $this->classObj = new $classNamespace;
        $this->classObj->go();
    }
}