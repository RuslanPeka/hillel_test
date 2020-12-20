<?php
    use Core\View;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header class="lesson">
        <h1>Домашнее задание №8 - MVC. Controller. View</h1>
    </header>
    <section class="lesson">
        <nav id="main_menu">
            <ul>
                <li><a href="/">Main</a></li>
                <li class="li_indent"><a href="about">About</a></li>
                <li class="li_indent"><a href="gallery">Gallery</a></li>
            </ul>
            <?php
                require_once $page;
            ?>
        </nav>
        <div id="main">
        </div>
    </section>
</body>
</html>