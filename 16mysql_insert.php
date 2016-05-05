<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Соединяемся с БД</title>
</head>

<body>

<?php 

if (isset($_POST['name']))
{
$name = $_POST['name'];
}

if (isset($_POST['lastname']))
{
$lastname = $_POST['lastname'];
}

if (isset($_POST['dol']))
{
$dol = $_POST['dol'];
}

$db = mysql_connect("localhost","root","");
mysql_select_db("firstbd",$db);


$result = mysql_query ("INSERT INTO firma (name,lastname,dol) VALUES ('$name','$lastname','$dol')");

if ($result == 'true')
{
echo "Информация в базу добавлена успешно!";

}
else 
{
echo "Информация в базу не добавлена!";
}


?>


</body>
</html>
