<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Конструкция if-else</title>
</head>

<body>

<?php 

$a = 2;
$b = 2;
$c = 7;
$d = 7;
$cat = "juli";
$dog = "hart";

//if ($a == $b){} // Равно
//if ($a != $b){} // Не равно
//if ($a > $b){} // Больше
//if ($a < $b){} // Меньше
//if ($a => $b){} // Больше или равно
//if ($a <= $b){} // Меньше или равно
//if ($a == $b or $c == $d) // Пример двойного условия, вместо "or" можно использовать "||"

if ($a == $b and $c == $d)//Пример двойного условия, вместо "and" можно использовать "&&"
{
//Ниже приведен вывод большого куска кода с множеством кавычек, используя маркер (HERE) и не беспокоясь об экранировании
echo <<<HERE
<table width="300" align="center" cellpadding="10" bgcolor="#f6f6f6" style="border:1px solid gray;">
  <tr>
    <td valign="top"><p>Большинство из нас полагают, что <a href="http://www.sc.ru" target="_blank">счастье</a> – это нечто, что или потеряно в прошлом, или придет в некотором неопределенном будущем. (Я буду счастлив, как только...) Мало кто понимает, что счастье можно испытать только в настоящий момент. $a </p></td>
  </tr>
  <tr>
    <td>Да, конечно, подобно всем хорошим вещам, счастье часто неуловимо. Но я уверяю Вас, нет ничего невозможного в том, чтобы поймать его.</td>
  </tr>
  <tr>
    <td valign="top"><a href="http://www.sc.ru" target="_blank">Подробнее</a></td>
  </tr>
</table>

HERE;

	if ($cat != $dog)
	{ 
	echo "В переменных cat и dog содержатся разные имена";
	}



}
else
{
echo "Переменные не равны!";
}

?>
<br>
<a href="11test4.php" target="_blank">Страница test4.php</a>

</body>
</html>
