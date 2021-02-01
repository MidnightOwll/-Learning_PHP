<?php
//$cookie_name="user";
//$cookie_value="cookie user";
//setcookie($cookie_name,$cookie_value,time ()+86400);// для удаление ввести время с отрицательным значением
$counter = isset($_COOKIE['counter'])?$_COOKIE['counter']:0;
$counter++;
setcookie("counter",$counter);
echo $counter;
require_once "head.html";
require_once "footer.html";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lol</title>
</head>
<body>
<!--?php-->
<!--if(!isset($_COOKIE[$cookie_name])){-->
<!--//    echo "cookie named $cookie_name";-->
<!--//    echo "cookie value $cookie_value";-->
<!--//}-->
<!--if (count($_COOKIE)>0)-->
<!--    echo "cookie доступны";-->
<!--else echo "cookie не доступны";-->
<!--?>-->
</body>
</html>


