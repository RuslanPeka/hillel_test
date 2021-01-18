<?php

namespace Core;

use Core\ClassNamespace;
use Core\ActionName;

class Router
{
    private $routingMap;
    private $requestPath;
    private $action;

    public function __construct()
    {
        $this->routingMap = include_once 'app/Config/routingMap.php';
        $this->requestPath = $_SERVER['PATH_INFO'] ?? '/';
    }
    
    public function run()
    {
        $this->action = new ActionName();
        $this->action->getData();
        $classNamespace = ClassNamespace::createNamespace($this->action->getClassName());
        if(in_array($this->requestPath, array_keys($this->routingMap))) {
            $classNamespace .= $this->routingMap[$this->requestPath];
        } else {
            $classNamespace = 'App\\Controllers\\General\\Error404';
        }
        $classNamespace .= 'Controller';
        
        // Создаю экземпляр класса
        $this->classObj = new $classNamespace;

        // Получаю правильное имя экшена, в зависимости от введённого url в поисковую строку
        $actionName = $this->action->getActionName();

        MyHelp::export($actionName);    // Выводит имя экшена верно:   index()

        // Но при этом...
        $this->classObj->$actionName;   // Не срабатывает (!)
        $this->classObj->index();       // Срабатывает корректно
    }
}