<?php
    // ========== Проект в MVC-формате ==========
    use Core\Router;
    use Core\MyHelp;
    use Components\Orm\Where;
    require_once "vendor/autoload.php";

    $router = new Router();
    $router->run();

    $where = new Where;
    $where->setWhere('name=ruslan');
    echo $where->getWhere();
    MyHelp::export($where);
?>