<?php

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт,
который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.*/

echo "<h1>Задание 1</h1>";

$a = 5;
$b = 0;

if ($a >= 0 && $b >= 0){
    echo '$a и $b больше нуля'."<br>";
    echo ($a - $b);
} elseif ($a < 0 && $b < 0){
    echo '$a и $b меньше нуля'."<br>";
    echo ($a * $b);
} elseif ($a >= 0 && $b < 0 || $a < 0 && $b >= 0){
    echo '$a и $b разных знаков'."<br>";
    echo ($a + $b);
}

/*2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.*/

echo "<h1>Задание 2</h1>";

$a = random_int(0, 15);
//$a = 10;
echo "Переменная а = $a <br>";

switch ($a){
    case ($a == 0):
        echo "$a<br>";
        $a++;
    case ($a == 1):
        echo "$a<br>";
        $a++;
    case ($a == 2):
        echo "$a<br>";
        $a++;
    case ($a == 3):
        echo "$a<br>";
        $a++;
    case ($a == 4):
        echo "$a<br>";
        $a++;
    case ($a == 5):
        echo "$a<br>";
        $a++;
    case ($a == 6):
        echo "$a<br>";
        $a++;
    case ($a == 7):
        echo "$a<br>";
        $a++;
    case ($a == 8):
        echo "$a<br>";
        $a++;
    case ($a == 9):
        echo "$a<br>";
        $a++;
    case ($a == 10):
        echo "$a<br>";
        $a++;
    case ($a == 11):
        echo "$a<br>";
        $a++;
    case ($a == 12):
        echo "$a<br>";
        $a++;
    case ($a == 13):
        echo "$a<br>";
        $a++;
    case ($a == 14):
        echo "$a<br>";
        $a++;
    case ($a == 15):
        echo "$a<br>";
        $a++;
}

/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/
echo "<h1>Задание 3</h1>";

/*сложение*/
function addition($first, $second){
    return $first + $second;
};
/*вычитание*/
function subtraction($first, $second){
    return $first - $second;
};
/*умножение*/
function multiplication($first, $second){
    return $first * $second;
};
/*деление*/
function division($first, $second){
    return $first / $second;
};

$first = random_int(0, 100);
$second = random_int(0, 100);

echo "Вызов функций по очереди для чисел $first и $second<br>";
echo "Сложение: ".addition($first, $second)."<br>";
echo "Вычитание: ".subtraction($first,$second)."<br>";
echo "Умножение: ".multiplication($first, $second)."<br>";
echo "Деление: ".division($first, $second)."<br>";

/*4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1,
$arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции
выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/

echo "<h1>Задание 4</h1>";

echo "Переменные используются из задания 3.<br>
      Аргументы для передачи:<br>
      Сложение - add<br>
      Вычитаение - sub<br>
      Умножение - multi<br>
      Деление - div<br>";

function calculate($first, $second, $operation){
    switch ($operation){
        case ($operation == "add"):
            echo addition($first, $second);
            break;
        case ($operation == "sub"):
            echo subtraction($first, $second);
            break;
        case ($operation == "multi"):
            echo multiplication($first, $second);
            break;
        case ($operation == "div"):
            echo division($first, $second);
            break;
    }
}

echo "Вызываем по очереди:<br>";
echo "Сложение - add: ";
echo calculate($first, $second, "add")."<br>";
echo "Вычитаение - sub: ";
echo calculate($first, $second, "sub")."<br>";
echo "Умножение - multi: ";
echo calculate($first, $second, "multi")."<br>";
echo "Деление - div: ";
echo calculate($first, $second, "div")."<br>";

/*5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.*/

echo "<h1>Задание 5</h1>";

echo date("d.m.Y")."<br>";
echo date("H:i:s")."<br>";

/*6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/

echo "<h1>Задание 6</h1>";

$randNumber = random_int(1, 10);
$numberOfSquare = random_int(1, 10);

function sqr($randNumber, $n){
    if ($n != 1){
        return $randNumber * sqr($randNumber, $n - 1);
    } else{
        return $randNumber;
    }
}

echo "Число $randNumber в степени $numberOfSquare равно ";
echo sqr($randNumber, $numberOfSquare);

/*7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/

echo "<h1>Задание 7</h1>";

function getNumEnding($number, $endingArray)
{
    $number = $number % 100;
    if ($number>=11 && $number<=19) {
        $ending=$endingArray[2];
    }
    else {
        $i = $number % 10;
        switch ($i)
        {
            case (1):
                $ending = $endingArray[0];
                break;
            case (4):
                $ending = $endingArray[1];
                break;
            default:
                $ending=$endingArray[2];
        }
    }
    return $ending;
}
$hours = date('H');
$minutes = date('m');
$seconds = date('s');

echo 'Осталось '.$hours.' ' .getNumEnding($hours, array('час', 'часа', 'часов')).' '.
    $minutes . ' ' .getNumEnding($minutes, array('минута', 'минуты', 'минут')).' '.
    $seconds . ' '. getNumEnding($seconds, array('секунда', 'секунды', 'секунд'));