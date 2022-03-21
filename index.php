<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="index.php" method="GET">
        <span class="text">Введите число </span><input name="a" type="number"> <br> <br>
        <input type="submit" value="Ok">
    </form><br>
    <?php  if (!empty($_GET['a'])) { $res = 1;
        for ($i = 1; $i <= $_GET['a']; $i++) {
            $res = $res * $i;
        }
        echo 'Факториал числа '.$res;
    }?>
</body>
</html>
