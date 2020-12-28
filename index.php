<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок №4 - Hillel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="work_4">
    <header>
        <h1>Урок №4 - Работа с Функциями</h1>
    </header>
    <section>
<?php
    // ========== Проект в MVC-формате ==========
    use Core\Router;
    use Core\MyHelp;
    use Components\Orm\Connector;
    require_once "vendor/autoload.php";
      
    $router = new Router();
    $router->run();
?>

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
$arr = [
    '1' => 1,
    '2' => 2,
    '3' => [
        '1' => 3,
        '4' => 4
    ]
];

// Мой вариант
function myCounter(array $arr) 
{
    $counter1 = 0;
    $counter2 = 0;
    $result = [];
    foreach($arr as $v) {
        $counter1++;
        if(!is_array($v)) {
            if($counter1 == 2) $result[] += $v;
        } else {
            foreach($v as $val) {
                $counter2++;
                if($counter2 == 2) $result[] += $val;
            }
        }
    }
    echo '<pre>';
    print_r($result);
    echo '</pre><br><hr>';
}

echo '<hr><br>';
echo '<b>Задание №1 - Мой вариант</b><br>';
myCounter($arr);

// Вариант с рекурсией 1
function myCounter2(array $arr) 
{
    $counter = 1;
    foreach($arr as $key => $value) {
        if($counter == 2) {
            if(is_array($value)) {
                myCounter($value);
            } else {
                echo 'Значение: ';
                var_export($value);
                echo '<br>';
            }
        } elseif (($counter != 2) && (is_array($value))) {
            myCounter2($value);
        }
        $counter++;
    }
}

echo '<br>';
echo '<b>Задание №1 - Вариант с рекурсией №1</b><br>';
myCounter2($arr);
echo '<br><hr>';

// Вариант с рекурсией 2
function myCounter3(array $arr) 
{
    $counter = 1;
    foreach($arr as $key => $value) {
        if(is_array($value)) {
            myCounter3($value);
        } else {
            if($counter == 2) {
                echo 'Значение: ';
                var_export($value);
                echo '<br>';
            }
        }
        $counter++;
    }
}

echo '<br>';
echo '<b>Задание №1 - Вариант с рекурсией №2</b><br>';
myCounter3($arr);
echo '<br><hr>';


// Задание №2 - Работа с функциями, вызывающими друг друга

echo '<br><b>Задание №2 - Функции вызывающие друг друга. Мой вариант</b><br>';
$arr = [
    '1' => 10,
    '2' => [
        '1' => 20,
        '2' => 30,
        '3' => 10
    ],
    '3' => 20
];

function arSum(array $arr) : int
{
    return array_sum($arr);
}

function arrSum2(array $arr) : int
{
    $result = arSum($arr);
    foreach($arr as $v) {
        if(is_array($v)) {
            $result += arSum($v);
        }
    }
    return $result;
}

echo 'Сумма всех значений массива: ' . arrSum2($arr);
echo '<br><br><hr>';

echo '<br><b>Задание №2 - Функции вызывающие друг друга. Классный авриант (другой массив)</b><br>';
$arr = [
    '1' => 10,
    '2' => [
        '1' => 20,
        '2' => 30,
        '3' => 10,
        '4' => [
            '1' => 10,
            '2' => 20
        ]
    ],
    '3' => 20
];

function arSum_С(array $arr) : int
{
    return array_sum($arr);
}

function arrSumRec(array $arr) : int
{
    $sum = arSum($arr);
    foreach($arr as $v) {
        if(is_array($v)) {
            $sum += arrSumRec($v);
        }
    }
    return $sum;
}

echo 'Сумма всех значений массива: ' . arrSumRec($arr);
echo '<br><br><hr>';

// Задание №3
echo '<br><b>Задание №3 - Области видимости</b><br>';

function test($a = 10)
{
    return $a;
}

function test1($b)
{
    echo test($b);
}

test1(51);

echo '<br><br><hr>';

?>
    </section>
</div>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Сайт</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Решение задания на PHP №1<br>Вариант 1</h1>

<?php

$list = ['Число 1' => 1, 'Число 2' => 2, 'Число 3' => 3];
echo '<table>';
echo '<tr><th>Ключ</th><th>Значение</th></tr>';
foreach($list as $k => $v) {
    echo '<tr><td>' . $k . '</td><td>' . $v . '</td></tr>';
}
echo '</table>';

?>

<h1>Решение задания на PHP №1<br>Вариант 2</h1>

<?php

$arr = [0 => 'Значение 1', 1 => 'Значение 2', 3 => 'Значение 3'];
$end = false;
$current  = 1;
while(!$end) {
    if(empty($current)) {
        $end = true;
    }
    else {
        $current = array_pop($arr);
        echo '<h1>';
        if (!empty($current)) var_export($current);
        echo '</h1>';
    }
}

?>

<h1>Решение задания на PHP №1<br>Вариант 3</h1>

<?php


$a = ['Текст1', 'Текст2', 'Текст3'];
$b = ['K1' => 10, 'K2' => 20, 'K3' => 30];
var_export(array_merge($a, $b));

?>
</body>
</html>
