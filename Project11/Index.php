<?php


$servername="localhost";
$username="root";
$password="root";
$dbname="testDB";

//$conn= new mysqli($servername,$username,$password,$dbname);
//if($conn->connect_error){
//    die("Connection failed: ".$conn->connect_error);
//}
//$sql="CREATE TABLE users2(
//name VARCHAR(30) NOT NULL,
//surname VARCHAR(30) NOT NULL PRIMARY KEY ,
//password VARCHAR(30) NOT NULL)";
//if($conn->query($sql)===TRUE){
//    echo "Table users2 created";}
//else{echo "Error".$conn->error;}
try{
$conn= new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="CREATE TABLE users3( 
name VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL PRIMARY KEY ,
password VARCHAR(30) NOT NULL)";

$conn->exec($sql);

}
catch(PDOException $e){
echo $sql.$e->getMessage();
}
$conn=null;
?>