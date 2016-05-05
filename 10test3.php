<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Передача переменных методом POST</title>
</head>

<body>

<?php 

$name = $_POST['name'];
$lastname = $_POST['lastname'];


echo "Имя введенное на предыдущей странице: $name и фамилия: $lastname";

?>

</body>
</html>
