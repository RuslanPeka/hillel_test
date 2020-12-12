<?php

require_once "../vendor/autoload.php";
require_once "func.php";
// require_once "Child.php";

// spl_autoload - старый вариант: folder1_foldern_className
// Сейчас актуальная конструкция namespace

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
            
            /*
            // Повтор материала
            // Родительский класс
            class Par
            {
                protected $var = 10;
                protected $var1 = 20;

                public function getVar()
                {
                    return $this -> var;
                }

                public function getVar1()
                {
                    return $this -> var1;
                }

                public function setVar($val)
                {
                    $this -> var = $val;
                }

                public function setVar1($val)
                {
                    $this -> var1 = $val;
                }
            }

            // Класс наследник
            class Child extends Par
            {
                public function sum()
                {
                    return ($this -> var + $this -> var1);
                }
            }

            head("1) Состав класса Par:");
            $par = new Par;
            export($par);
            br();

            head("2) Состав класса-наследника Child:");
            $child = new Child;
            export($child);
            br();
            
            head("3) Работа со свойствами:");
            export($child -> sum());
            export($child -> getVar());
            export($child -> getVar1());
            br();
            */

            /*
            // Вопрос на следующий урок
            abstract class B
            {
                public function func()
                {
                    return 'String';
                }
            }

            $value = new B;
            */

            /*
            // Фича, ускоряющая работу программы - ищет реализацию сразу в ядре
            $var = \in_array($var, $arr);
            */

            // ========== Тема занятия: NameSpace ==========
            // Обычно, 1 класс -  1 файл
            // Средний класс состоит из 200-300 строк
            // Крупный класс состоит из 500-600 строк
            // Если в классе 4-5 тысяч строк - скорее всего имеется архитектурна ошибка
            // Команды для подключения файлов: include, include_once, require, require_once
            // СОВЕТ. Реализации подключаются там, где они нужны. Нежелательно пожключать все классы в index.php

            /*head("1) Файлы, подключённые из других файлов:");
            $par = new Par;
            $child = new Child;
            export($child -> getVar());
            // br();*/

            /*
                === Composer ===
                Основная задача - подключение готовых решений.
                Основные команды composer:
                    install
                    require
                    update
                    self-update
                    dump-aoutoload
            */

            // ========== Проект в MVC-формате ==========

            ?>
        </div>
    </section>
</body>
</html>