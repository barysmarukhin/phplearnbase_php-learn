<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Цикл for</title>
</head>

<body>

<?php 


for ($i=0, $sum=0; $i <= 1000; $i++)
{
$sum = $sum + $i;
}


echo "Сумма всех чисел от 1 до 1000 равна - $sum";


?>

</body>
</html>
