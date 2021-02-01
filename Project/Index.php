<<<<<<< HEAD
<!doctype html>
<html lang="ru">
=======

<!doctype html>
<html lang="en">
>>>>>>> b14a54f... prj
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link  rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>PHP web сайт</title>
</head>
<body>
<?php require_once "blocks/header.php"?>
<div class="container mt-5">
    <h3 class="mb-5">Статья</h3>
    <div class="d-flex flex-wrap">
    <?php
   for($i=0;$i<5;$i++):
      ?>
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
        <h4 class="my-0 font-weight-normal">Текст</h4>
        </div>
        <div class="card-body">
            <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">
                       <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
         </div>
        </div>
    <?php endfor;?>
    </div>
    <?php require_once "blocks/footer.php"?>
</body>
</html>
=======
    <title>lol</title>
</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <legend>Выберите вариант</legend>
        <label for="dog"></label>
        <input type="checkbox" id="dog" name="animal[]" value="собака">
        собака</label>
        <label for="cat"></label>
        <input type="checkbox" id="cat" name="animal[]" value="кот">кот
        </label>
        <label for="fox"></label>
        <input type="checkbox" id="fox" name="animal[]" value="лиса">лиса
        </label>
        <label for="tiger"></label>
        <input type="checkbox" id="tiger" name="animal[]" value="тигр">тигр
        </label>
    </fieldset>
    <input type="submit" value="отправить">

</form>
<?php

require "head.html";

require_once "footer.html";
//echo "данные из адресной строки: {$_SERVER['QUERY_STRING']}";
$animal=isset($_POST['animal']) ? $_POST['animal']:'';
if(!empty($animal)){
    echo '<br><br> Выбраны:';
    foreach ($animal as $a){
        echo "<span style=\"color:green\">".htmlentities($a)."</span>";
    }
}
?>
</body>
</html>


>>>>>>> b14a54f... prj
