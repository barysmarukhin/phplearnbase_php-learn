<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Соединяемся с БД</title>
</head>

<body>

<?php 


$db = mysql_connect("localhost","root",""); //В переменную $db заносим результат соединения с mysql сервером(идентификатор)
mysql_select_db("firstbd",$db);//Выбираем базу, с которой работаем
//$result = mysql_query("SELECT lastname FROM firma",$db);//Поле lastname таблицы firma из БД firstbd попадает в виде матрицы в переменную $result
//$result = mysql_query("SELECT dol,lastname FROM firma WHERE id='3'",$db);//Поля dol и lastname таблицы firma из БД firstbd с id=2 попадают в виде матрицы в переменную $result
//$result = mysql_query("SELECT * FROM firma WHERE id='2'",$db);//Все поля таблицы firma из БД firstbd с id=2 попадают в виде матрицы в переменную $result
//$result = mysql_query("SELECT * FROM firma WHERE id='2' AND name='Александр'",$db);
//$result = mysql_query("SELECT * FROM firma WHERE id='2' OR name='Борис'",$db);
//$result = mysql_query("SELECT * FROM firma ORDER by name",$db);//Сортировка по полю name
//$result = mysql_query("SELECT * FROM firma ORDER by name DESK",$db);//Сортировка по полю name в обратном порядке
//$result = mysql_query("SELECT * FROM firma ORDER by name LIMIT 2",$db);//Сортировка по полю name, максимум 2 значения
$result = mysql_query("SELECT * FROM firma",$db);//Вся таблица из БД попадает в виде матрицы в переменную $result 
$myrow = mysql_fetch_array($result);//Заносим в переменную $myrow первую запись таблицы из БД в виде массива
//echo myrow["name"];//Выводим элемент name массива myrow(на экране появится поле name первой строчки таблицы)
//$myrow = mysql_fetch_array($result);//функция mysql_fetch_array ведет внутренний счетчик, и с каждым новым ее присвоением переменной myrow, увеличивает значение этого счетчика,переходя на следующий элемент таблицы
//echo myrow["name"];//Выводим элемент name массива myrow(на экране появится параметр name второй строчки таблицы)

/*функция printf состоит из двух частей("что именно выводим:текст+маркеры",значения маркеров) и выводит информацию на экран*/
do
{
printf ("Сотрудник N - %s<br>%s<br>%s<br>%s<br><br>",$myrow['id'],$myrow['name'],$myrow['lastname'],$myrow['dol']);

}
while ($myrow = mysql_fetch_array($result));
?>


</body>
</html>
