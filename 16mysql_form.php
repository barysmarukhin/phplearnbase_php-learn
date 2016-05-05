<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Добавление сотрудника</title>
</head>

<body>

<form action="16mysql_insert.php" method="post" name="form">
<p>Введите имя сотрудника: <br><input name="name" type="text" size="20" maxlength="40"></p>
<p>Введите фамилию: <br><input name="lastname" type="text" size="20" maxlength="40"></p>
<p>Должность: <br><input name="dol" type="text" size="20" maxlength="40"></p>
<p><input name="submit" type="submit" value="Занести нового сотрудника в базу"></p>

</form>

</body>
</html>
