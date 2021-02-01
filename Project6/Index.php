<?php

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
<?php
//Class ShoppingCard{
//
//}
//$product1=new ShoppingCard();
//$product2=new ShoppingCard();
//$product3=new ShoppingCard();
//var_dump($product1 instanceof ShoppingCard);
//var_dump($product2);
//var_dump($product3);

//class Shop{
//    Private $name;
//    public function  naming(){
//        $this->name="Apple";
//        echo $this->name;
//    }
//}
//$product=new Shop;
//$product->naming();

//class User{
//    public $name="Имя";
//    public  $password="Пароль";
//    public $email="Почта";
//    public $city="Город";
////    public function Hello(){
////        echo "Hello $this->name";
////    }
//function getInfo(){
//    return "{$this->name}". "{$this->surname}";
//}
//}
//$admin=new User();
//$admin->name="Alex";
//$admin->surname="Pich";
////$admin->Hello();
//echo "Пользователь: {$admin->getInfo()}"
//
//$user1=new User();
//$admin->name="Alex";
//$user1->name="End";
//echo $admin->name;
//echo $user1->name;

//class User{
//    public $name;
//    public $password;
//    public $email;
//    public $city;
//function __construct($name, $password,$email,$city){
//    $this->name=$name;
//    $this->password=$password;
//    $this->email=$email;
//    $this->city=$city;
//}
//function getInfo(){
//    return "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
//}
//}
//$user1=new User("Alex","132321","qwe@gmail.com","Kras");
//echo $user1->getInfo();

class User
{
//    public $name;
//    public $password;
//    public $email;
//    public $city;

//    public  function getName(){
//        echo $this->name;
//        $this->test();
//    }
//    public function test(){
//        echo 'Test';
//    }
private static $name;
public static function setName($name1){
    self::$name=$name1;
}
public static function getName(){
    return self::$name;
}
}
User::setName('Alex');
echo User::getName()
//$user1=new User();
//$user1->name="Alex";
//$user1->getName();
//
//$user2=new User();
//$user2->name="Lia";
//$user2->getName();


?>

</body>
</html>


