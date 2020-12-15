<?php
    // ========== Проект в MVC-формате ==========
    use Core\Router;
    use Core\MyHelp;
    require_once "../vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок №7</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="lesson">
        <h1>Урок №7 - Введение в MVC</h1>
    </header>
    <section class="lesson">
        <div id="main">
            <?php
                $router = new Router();

                MyHelp::head('1) Работа с маршрутизатором');
                echo '<pre>';
                $router -> run();
                echo '</pre>';
            ?>
        </div>
    </section>
</body>
</html>