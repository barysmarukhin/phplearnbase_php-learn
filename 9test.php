<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Передача переменных</title>
</head>

<body>

<?php 

$a = $_GET['a'];//извлекаем переменные из глобавльного массива $_GET
$b = $_GET['b'];//извлекаем переменные из глобального массива $_GET


$c = $a + $b;

echo "<br>Сумма переменных переданных через адресную строку: $c";


echo "<br><a href='9test.php?a=15&b=20'>Новые значения</a>";



?>

</body>
</html>
