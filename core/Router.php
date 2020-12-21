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
        $uri = $_SERVER['REQUEST_URI'];
        $arr = explode('/', $uri);
        $classNamespace = 'App\\Controllers\\Main\\';
        foreach($arr as $v) {
            if($v == 'admin') {
                $classNamespace = 'App\\Controllers\\Admin\\';
            }
        }
        if(in_array($this -> requestPath, array_keys($this -> routingMap))) {
            $classNamespace .= $this->routingMap[$this->requestPath];
        } else {
            $classNamespace = 'App\\Controllers\\Error404';
        }
        $classNamespace .= 'Controller';
        $classObj = new $classNamespace;
    }
}