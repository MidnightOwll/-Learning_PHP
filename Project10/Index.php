<?php
//$servername="localhost";
//$username="root";
//$password="root";
//

//$conn=new mysqli($servername,$username,$password);
//if ($conn->connect_error){
//    die ("Connection error".$conn->connect_error);
//}else echo "Connection successfully";

// процедурный подход
//$conn= mysqli_connect($servername,$username,$password);
//if (!$conn){
//    die ("Connection error".mysqli_connect_error());
//}else echo "Connection successfully";

//PDO
//try{
//    $conn=new PDO("mysql:host=$servername;dbname=newDB",$username,$password);
//    echo"Connection successfully";
//} catch (PDOException $e){
//    echo"Connection error".$e->getMessage();
//}

$servername="localhost";
$username="root";
$password="root";

//$conn =new mysqli($servername,$username,$password);
//if ($conn->connect_error) {
//    die ("Connection error" . $conn->connect_error);
//}
//$sql="CREATE DATABASE testDB";
//if($conn->query($sql)===TRUE){
//    echo "Database created";
//} else{
//    echo "Error".$conn->error;
//}

//
//$conn = mysqli_connect($servername,$username,$password);
//if ($conn->connect_error) {
//    die ("Connection error" . mysqli_connect_error());
//}
//$sql="CREATE DATABASE testDB";
//if(mysqli_query($conn,$sql)){
//    echo "Database created";
//} else{
//    echo "Error".mysqli_error($conn);
//}

try{
    $conn=new PDO("mysql:host=$servername;dbname=testDB",$username,$password);
    $sql="CREATE DATABASE testDB2";
    $conn->exec($sql);
    echo"Database created";
} catch (PDOException $e){
    echo$sql .$e->getMessage();
}
?>


