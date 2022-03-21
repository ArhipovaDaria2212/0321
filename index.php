<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<?php if (empty($_GET)) {
?>
    <form action="index.php" method="GET">
        <span class="text">Как вас зовут? </span><input name="a" type="text"><br> <br>
        <input type="submit" value="Ok">
    </form><br>
<?php
	} else {
		echo 'Здравствуйте, '.$_GET['a'];
	}
?>
</body>
</html>
