<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Функции</title>
</head>

<body>

<?php 

function square($a)
{
$result = $a*$a; //$result - локальная переменная
return $result;// возвращаем результат через переменную $result
}


$new = 120;

echo "Квадрат $new равен - ";

$h = square($new);//Здесь вызываем функцию, на выходе которой получаем квадрат числа

echo $h;


function reffer($link,$title)
{
echo "<a href='$link'>$title</a>";
}

Echo "<br>";

reffer('http://delfintimes.ru','Мой первый проект');


/*........ Ниже приведены функции, встроенные в php ......*/
/* count - считает количество элементов массива */
/* exit - останавливает работу Php и выводит то, что было до нее */
/* trim - убирает пробелы в переменной (для правильности ввода в поле авторизации необходимо использовать эту функцию)*/ 
/* list - вытаскивает значения из массива как отдельные переменные */

$name[] = "Александр";
$name[] = "Наполеон";
$name[] = "Джорж";
$w = " Ноутбук ";

$w = trim($w);
echo $w;

//exit("<p>Работа программы завершена на 49 строке</p>");
echo "<br>В массиве name найдено ".count($name)." элемента.";//Здесь выводим результат расчета количества элементво массива

$box = array ("Персик","Огурец");
list ($fruit,$vegetable) = $box; // то есть $fruit="Персик", а $vegetable="Огурец"

echo "<br>$fruit<br>$vegetable";



?>

</body>
</html>
