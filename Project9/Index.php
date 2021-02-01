<?php
namespace Home;

//class  user{
//    private $name;
//    private $city;
//    private $id;
//
//    function __construct($name,$city){
//        $this->name=$name;
//        $this->city=$city;
//    }
//    function setId($id){
//       $this->id=$id;
//    }
//    public function __clone(){
//$this->id=0;
//    }
//}
//$obj=new user("Alex","Kras");
//$obj->setId(5656);
//$obj2=clone $obj;
//var_dump($obj2);

//class GetSet{
//    private $number=1;
//    public function __get($name){
//        echo "You get {$name} ";
//    }
//    public function __set($name,$val){
//        echo "You set {$name} to {$val} ";
//    }
//}
//$obj=new GetSet();
//echo $obj->number;
//echo $obj->number=666;

class User{
    public $name;
    public $password;
    public $email;
    public $city;
function __construct($name, $password,$email,$city){
    $this->name=$name;
    $this->password=$password;
    $this->email=$email;
    $this->city=$city;
}
function getInfo(){
    $inf=   "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
    return $inf;
}
}
$user1=new User("Alex","132321","qwe@gmail.com","Kras");
echo $user1->getInfo();
?>


