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
    <link rel="shortcut icon" href="/web/files/img/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="lesson_header">
        <h1>Лучший в Мире Сайт</h1>
    </header>
    <section class="lesson">
        <nav class="main_menu">
            <ul>
                <li><a href="/">Главная</a></li><!--
                --><li class="li_indent"><a href="/about">О нас</a></li><!--
                --><li class="li_indent"><a href="/gallery">Галерея</a></li><!--
                --><li class="li_indent"><a href="/admin">Админ-панель</a></li>
            </ul>
        </nav>
        <div class="main">
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