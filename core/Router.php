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
        $classNamespace = 'App\\Controllers\\';
        if(in_array($this -> requestPath, array_keys($this -> routingMap))) {
            $classNamespace .= $this->routingMap[$this->requestPath];
        } else {
            $classNamespace .= 'Error404';
        }
        $classNamespace .= 'Controller';
        $classObj = new $classNamespace;
    }
}