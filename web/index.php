<?php
    use Core\Router;
    use Core\Help;
    require_once "../vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок №6</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="lesson">
        <h1>Урок №6 - Введение в MVC</h1>
    </header>
    <section class="lesson">
        <div id="main">
            <?php
                // ========== Проект в MVC-формате ==========
                $help = new Help;
                $help -> head("Домашнее задание №6");
                $obj = new Router;
                echo '<pre>';
                $obj -> run();
                echo '</pre>';
                $help -> br();
            ?>
        </div>
    </section>
</body>
</html>