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
        <span class="text">Введите год </span><input name="a" type="text" value="<?php if (isset($_GET['a'])) echo $_GET['a']; else echo '2022'; ?>"> <br> <br>
        <input type="submit" value="Ok">
    </form><br>
    <?php if ($_GET['a'] % 4 == 0) echo ' Год високосный'; else echo ' Год не високосный';?>
</body>
</html>
