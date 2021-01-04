<?php
    // ========== Проект в MVC-формате ==========
    use Core\Router;
    use Core\MyHelp;
    // use Components\Orm\Connector;
    require_once "vendor/autoload.php";

    // Подключение к БД
    // $connection = new Connector();
    // $db = $connection->connect();

    // Доказательсов работоспособности подключения
    // foreach($db->query('SELECT * from user_permissions') as $val)
    // {
    //     MyHelp::export($val);
    // }

    $router = new Router();
    $router->run();
?>