<?php
require_once 'includes/class-autoload.inc.php';
include 'classes/dbh.classes.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset/style.css">
</head>

<body align="center">
    <?php
    $test = new Test();
    $test->getUser();
    $test->getUserStmt("Nibba");
    if (isset($_POST['btnSub'])) {
        $userName = $_POST['txtUserName'];
        $pwd = $_POST['txtPassword'];
        if ($userName == "" && $pwd == "") {
            echo "user or password is empty";
        } else {
            $test->setUserstmt($userName, $pwd);
            echo "Sign up successfull";
        }
    }
    ?>
    <h1>Sign Up</h1>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td class="title">User name:</td>
                <td ><input type="text" class="text" name="txtUserName" id=""></td>
            </tr>
            <tr>
                <td class="title">Password:</td>
                <td><input type="password" class="text" name="txtPassword" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnSub" value="Sign up" class="button" id=""></td>
            </tr>
        </table>
    </form>
</body>

</html>