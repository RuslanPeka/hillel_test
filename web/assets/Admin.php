<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="/css/stylesAdmin.css">
</head>
<body>
    <header class="lesson">
        <h1>Админ-панель</h1>
    </header>
    <section class="lesson">
        <nav id="main_menu">
            <ul>
                <li><a href="/index.php/admin">Главная страница</a></li>
                <li class="li_indent"><a href="/index.php/admin/articlesAdmin">Статьи</a></li>
                <li class="li_indent"><a href="/index.php/admin/usersAdmin">Пользователи</a></li>
                <li class="li_indent"><a href="/index.php/">Сайт</a></li>
            </ul>
        </nav>
        <div id="main">
            <?php
                require_once 'Admin\\' . $page . '.php';
            ?>
        </div>
    </section>
</body>
</html>