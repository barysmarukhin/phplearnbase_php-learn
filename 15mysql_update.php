<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Соединяемся с БД</title>
</head>

<body>

<?php 

$db = mysql_connect("localhost","root","");
mysql_select_db("firstbd",$db);

$result = mysql_query ("UPDATE firma SET name='Егор', lastname='Егоров', dol='Логист' WHERE id='6'");

if ($result == 'true')
{
echo "Информация в базе обновлена успешно!";

}
else 
{
echo "Информация в базе не обновлена!";
}


?>


</body>
</html>
