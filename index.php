<!DOCTYPE html>
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