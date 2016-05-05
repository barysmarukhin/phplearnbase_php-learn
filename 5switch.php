<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Конструкция switch</title>
</head>

<body>


<?php //Пример для выбора одного из множества способов оплаты

$sposob = "";

switch ($sposob)
{
    case "Банк":
	echo "<p>Чтобы оплатить через Банк....";
	break;
	
	case "Почта":
	echo "<p>Чтобы оплатить через почту....";
	break;
	
	case "Western Union":
	echo "<p>Чтобы оплатить через Western Union....";
	break;
	
	default:
	echo "<p>Вы не выбрали способ оплаты";
	break;
	
}


?>

</body>
</html>
