<?php
    // ========== Проект в MVC-формате ==========
    use Core\Router;
    use Core\MyHelp;
    require_once "../vendor/autoload.php";

    $router = new Router();
    $router->run();
?>
