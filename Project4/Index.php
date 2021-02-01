<?php
//session_start();
if(isset($_FILES['image'])){
    $errors=array();
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $expensions=array("jpeg","jpg","png");
    if($file_size>2097152){
        $errors[]='Фаил должен быть 2 мб';
    }
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"images/".$file_name);
        echo "Success";}
        else print $errors;

}
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
//echo readfile("lorem.txt");
//$lorem=fopen("lorem.txt","r") or die ("не удалось");
//echo fread($lorem,filesize("lorem.txt"));
//fclose($lorem);
//echo fgets($lorem,5)
//while (!feof($lorem)){
//    echo fgets($lorem,6);
//}
//$yep=fopen("yuy.txt","w");
//$text="hi";
//fwrite($yep,$text);
//fclose($yep);
// phpinfo();
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
    <ul>
        <li>Sent file:<?php echo $_FILES['image']['name']?></li>
        <li>File size:<?php echo $_FILES['image']['size']?></li>
        <li>File type:<?php echo $_FILES['image']['type']?></li>
    </ul>
</form>
</body>
</html>


