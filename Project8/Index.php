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
//class user{
////    public static $name;
////    public static function hello(){
////        echo "hello ".self::$name. " ";
////    }
////const SOME_CONST=314;
//}
////user::$name="Alex";
////echo user::$name;
////user::hello();
////echo user::SOME_CONST;

//abstract class User{
//    public $name;
//    public $status;
//
//  abstract  public function getStatus();
//
//}
//class  Admin extends User{
//    public function getStatus()
//    {
//        echo "Admin";
//    }
//}
//$user1=new Admin();
//$user1->getStatus();

//interface Interf{
//    public function getName();
//}
//interface Interf2{
//    public function getStatus();
//}
//interface Interf3 extends Interf,Interf2{
//
//}
//class Test implements Interf,Interf2{
//    public $name="Alex";
//public $status="Admin";
//    public function getName(){
//        echo $this->name;
//    }
//    public function getStatus(){
//        echo $this->status;
//    }
//}
//$user1=new Test();
//$user1->getStatus();
//$user1->getName();
//Class Base{
//    public function sayHello(){
//        echo "Hello ";
//    }
//}
trait Hello{
    public function sayHello(){
              echo "Hello ";
    }
}
trait sayWorld{
    //public function sayHello(){
        ///parent::sayHello();
        public function sayWorld(){
        echo "World";
    }
}
class mHW{ //extends Base{
    use Hello,sayWorld;
}
$obj=new mHW();
$obj->sayHello();
$obj->sayWorld();
?>

</body>
</html>


