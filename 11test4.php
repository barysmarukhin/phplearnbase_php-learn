<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Суперглобальный массив SERVER</title>
</head>

<body>

<?php 

echo "Ваш ip адрес: ".$_SERVER['REMOTE_ADDR'];
echo "<br>Ваш браузер и операционка: ".$_SERVER['HTTP_USER_AGENT'];
if (isset($_SERVER['HTTP_REFERER']))
{
echo "<br>Вы пришли на данную страницу с адреса: ".$_SERVER['HTTP_REFERER'];
}
else
{
echo "<br>Вы попали на данную страницу напрямую!";
}
?>



</body>
</html>
