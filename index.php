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
        <span class="text">В какой стране вы живете? </span><input name="a" type="text" value="<?php if (isset($_GET['a'])) echo $_GET['a'] ?>"> <br> <br>
        <span class="text">А в каком городе? </span><input name="b" type="text" value="<?php if (isset($_GET['b'])) echo $_GET['b'] ?>"><br> <br>
        <input type="submit" value="Ok">
    </form><br>
    <?php echo $_GET[a]. ' '. $_GET[b] ?>
</body>
</html>
