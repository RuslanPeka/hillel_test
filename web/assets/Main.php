<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="/hillel_test/web/css/styles.css">
</head>
<body>
    <header class="lesson">
        <h1>Домашнее задание №8 - MVC. Controller. View</h1>
    </header>
    <section class="lesson">
        <nav id="main_menu">
            <ul>
                <li><a href="/hillel_test/web/index.php/">Main</a></li>
                <li class="li_indent"><a href="about">About</a></li>
                <li class="li_indent"><a href="gallery">Gallery</a></li>
            </ul>
        </nav>
        <div id="main">
            <?php
                require_once 'Main\\' . $page . '.php';
            ?>
        </div>
    </section>
</body>
</html>