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
        <span class="text">Введите градусы в Цельсиях </span><input name="a" type="text"> <br> <br>
        <input type="submit" value="Ok">
    </form><br>
    <?php  if (!empty($_GET['a'])) {$a = 9*$_GET['a']/5+32; echo 'В фаренгейтах это '.$a;}?>
</body>
</html>
