<?php
    use Core\MyHelp;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="/web/css/stylesAdmin.css">
    <link rel="shortcut icon" href="/web/files/img/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="lesson_header">
        <h1>Админ-панель</h1>
    </header>
    <section class="lesson">
        <nav class="main_menu">
            <ul>
                <li><a href="/admin">Главная страница</a></li><!--
                --><li class="li_indent"><a href="/admin/articlesAdmin">Статьи</a></li><!--
                --><li class="li_indent"><a href="/admin/usersAdmin">Пользователи</a></li><!--
                --><li class="li_indent"><a href="/">Сайт</a></li>
            </ul>
        </nav>
        <div class="main">
            <?php
                require_once 'Admin\\' . $page . '.php';
                // if(!empty($data)) {
                //     echo '<br><b>Данные модели:</b>';
                //     MyHelp::export($data);
                // }
            ?>
        </div>
    </section>
</body>
</html>