<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Цикл while</title>
</head>

<body>

<?php 

$a = 0;


while ($a <= 10)
{
echo "$a<br>";
$a++;
}

$sum = 0;
$i = 1;

do
{
$sum = $sum + $i;
$i++;
}
while ($i <= 1000);

echo "Сумма всех чисел от 1 до 1000 равна - $sum";

?>

</body>
</html>
