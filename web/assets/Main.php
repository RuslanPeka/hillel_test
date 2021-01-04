<?php
    use Core\MyHelp;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лучший Сайт</title>
    <link rel="stylesheet" href="/web/css/styles.css">
</head>
<body>
    <header class="lesson">
        <h1>Домашнее задание №11 - Работа с БД</h1>
    </header>
    <section class="lesson">
        <nav id="main_menu">
            <ul>
                <li><a href="/index.php/">Главная</a></li><!--
                --><li class="li_indent"><a href="about">О нас</a></li><!--
                --><li class="li_indent"><a href="gallery">Галерея</a></li><!--
                --><li class="li_indent"><a href="/index.php/admin">Админ-панель</a></li>
            </ul>
        </nav>
        <div id="main">
            <?php
                require_once 'Main\\' . $page . '.php';
                if(!empty($data)) {
                    echo '<br><b>Данные модели:</b>';
                    MyHelp::export($data);
                }
            ?>
        </div>
    </section>
</body>
</html>