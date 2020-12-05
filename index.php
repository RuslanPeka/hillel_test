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

?>
    </section>
</div>
</body>
</html>