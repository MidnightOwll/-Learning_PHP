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

    $inform="{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
    return $inform;
}
}
$user1=new User("Alex","132321","qwe@gmail.com","Kras");
//echo $user1->getInfo();
class Moderator extends User{
    protected $info;
    public $rights;
public function __construct($name, $password, $email, $city,$info,$rights)
{
    parent::__construct($name, $password, $email, $city);
    $this->info=$info;
    $this->rights=$rights;
}
    function getInfo(){
        $inform=parent::getInfo();
        $inform.="{$this->info}"."{$this->rights}";
        return $inform;
    }
}
$moder=new Moderator("Xia ","9999999 ","zxc@gmail.com ","Ural ","Moderator ","True");
echo $moder->getInfo();

?>

</body>
</html>


