<?php
    // ========== Проект в MVC-формате ==========
    use Core\Router;
    use Core\MyHelp;
    require_once "vendor/autoload.php";

    $router = new Router();
    $router->run();
?>


<!-- 
    *** Альтернативный вариант файла .htaccess ***
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]

RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?$1 [L,QSA]
 -->