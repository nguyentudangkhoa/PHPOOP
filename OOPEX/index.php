<?php
    declare(strict_types = 1);
    require_once 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caculated</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <div class="calc">
    <h1>CALCULATOR</h1>
    <form action="includes/calc.inc.php" method="post">
        <input class="number" type="text" name="number1">
        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <input class="number" type="text" name="number2" id="">
        <input class="button" type="submit" name="submit" value="=">
    </form>
    </div>
</body>
</html>