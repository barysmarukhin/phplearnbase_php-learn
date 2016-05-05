<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Удаление из БД</title>
</head>

<body>

<?php 

$db = mysql_connect("localhost","root","");
mysql_select_db("firstbd",$db);

$result = mysql_query ("DELETE FROM firma WHERE id='7'");

if ($result == 'true')
{
echo "Информация из базы удалена!";

}
else 
{
echo "Информация из базы не удалена!";
}


?>


</body>
</html>
