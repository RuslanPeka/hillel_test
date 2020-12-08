<?php

function export($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function br() {
    echo '<br><hr><br>';
}

class A
{
    // Свойства
    public $str = 'Свойство';
    protected $int = 10;
    private $private = 'Don\'t touch';

    // Методы
    public function getPrivate() {
        return $this -> private;
    }

    public function setPrivate($str)
    {
        $this -> private = $str;
    }
}

// Наследование

class C extends A
{
    protected $private = 20;

    public function getInt()
    {
        return $this -> int;
    }
}

class D extends C
{
    public function getPrivate() {
        return $this -> private;
    }
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок №5 - Классы</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="lesson">
        <h1>Урок №5 - Классы</h1>
    </header>
    <section class="lesson">
    <div id="main">
        <?php
        $objA = new A;

        echo '<b>1. Состав класса A:</b><br>';
        export($objA);
        br();
        echo '<b>2. Доступ к свойству класса A:</b><br>';
        echo $objA -> str;
        echo '<br>';
        br();
        echo '<b>3. Доступ к <u>приватному</u> свойству класса A:</b><br>';
        echo $objA -> getPrivate();
        echo '<br>';
        br();
        echo '<b>4. Изменение значения приватного свойства класса A:</b><br>';
        $objA -> setPrivate('Cool!');
        echo $objA -> getPrivate();

        $objB = new A;

        echo '<br>';
        br();
        echo '<b>5. Доступ к приватному свойству класса A:</b><br>';
        echo $objB -> getPrivate();
        echo '<br>';

        $objC = new C;

        br();
        echo '<b>6. Доступ к приватному свойству <u>наследованного</u> класса C:</b><br>';
        echo $objC -> getPrivate();
        echo '<br>';

        br();
        echo '<b>7. Доступ к <u>защищённому</u> свойству наследованного класса C:</b><br>';
        echo $objC -> getInt();
        echo '<br>';

        $objD = new D;

        br();
        echo '<b>8. Доступ к защищённому свойству наследованного <u>класса D</u>:</b><br>';
        echo $objD -> getPrivate();
        echo '<br>';
        ?>

        <!-- Задача №1 -->

        <?php
        
        class One
        {
            private $a = 10;

            public function getA()
            {
                return $this -> a;
            }
        }

        br();
        echo '<b>9. Решение задачи в группе:</b><br>';
        class Two extends One
        {
            private $b = 40;

            public function getB()
            {
                return $this -> b;
            }
        }


        class Math extends Two
        {
            public function sum()
            {
                return ($this -> getA() + $this -> getB());
            }
        }
        
        $var = new Math;
        export($var -> sum());

        ?>
    </div>
    </section>
</body>
</html>