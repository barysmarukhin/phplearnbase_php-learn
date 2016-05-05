<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Массивы</title>
</head>

<body>

<?php 
/* Массив - это переменная, которая хранит несколько значений  */
/* Первый способ создания массива  */
$name[0] = "Саша";
$name[1] = "Маша";
$name[2] = "Ваня";
$name[3] = "Аня";
$name[4] = "Костя";

echo $name[4];

/* Второй способ создания массива  */

$name = array(0 => "Саша", 1 => "Маша", 2 => "Ваня", 3 => "Аня", 4 => "Костя");

/* Пример ассоциативного массива  */
$capital ["Russia"] = "Москва";
$capital ["USA"] = "Вашингтон";
$capital ["France"] = "Париж";
$capital ["Ukraine"] = "Киев";
$capital ["Italy"] = "Рим";


echo "<br>";

echo $capital["Italy"]; //Выведет что? "РИМ"!

$naselenie = array ("Russia" => "150", "USA" => "250", "France" => "40", "Ukraine" => "30", "Italy" => "35");

echo "<br>";

echo "Столица России - ".$capital["Russia"].". Население России - ".$naselenie["Russia"]." млн. человек.";

echo "Столица России $capital[Russia]. Население России - $naselenie[Russia] млн. человек.";

/* Пример многомерного массива  */
$auto["bmw"] = array ("color" => "Белый", "year" => "2005", "pr" => "2000");
$auto["audi"] = array ("color" => "Синий", "year" => "2003", "pr" => "2200");

echo "<br>Год AUDI - ".$auto["audi"]["year"];


?>

</body>
</html>
