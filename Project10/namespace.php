<?php
require_once 'index.php';
$obj=new \Home\User("Alexey","1323217888","qwe123@gmail.com","Krasnodar");
echo $obj->getInfo();
?>