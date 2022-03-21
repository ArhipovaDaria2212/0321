<?php
    // header('Content-type^ text/html; charset=utf-8');
    if (isset($_GET[a]) && isset($_GET[b]) && isset($_GET[d])) {
    $x = $_GET[a];
    $y = $_GET[b];
    $d = $_GET[d];
    $result = $x.$d.$y. '=';
    switch ($d) {
        case '-':
          $result .= $x - $y; break;
        case '+':
            $result .= $x + $y; break;
        case '*':
            $result .= $x * $y; break;
        case '/':
            $result .= $x / $y; break;
      }
    }
    
?>


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
        <span class="text">x = </span><input name="a" type="number"><br> <br>
        <span class="text">y = </span><input name="b" type="number"><br> <br>
        <span class="text">Действие </span>
        <select name="d" type="text">
            <option value="-" >-</option>
            <option value="+">+</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Ok">
    </form><br>
    <?php if (isset($_GET[a]) && isset($_GET[b]) && isset($_GET[d])) echo $result; ?>
</body>
</html>
