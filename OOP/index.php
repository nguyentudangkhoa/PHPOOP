<?php
    declare(strict_types=1);// kiểm tra kiểu dữ liệu
    require_once "includes/autoLoad.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    // $person = new Person("Khoa", 12); // call new object
    // echo $person->getName() . ' is ' . $person->getAge() . ' year old  <br/>';
   
    // $className = new className\className("16dth1a",16);// call new object if the class inside the folder
    // echo 'Study as '.$className->getName() . ', index: ' . $className->getNumber();

    $student = new Student();
    try{
        echo $student->setName("khoa").$student->getName();
    }catch(TypeError $e){
        echo 'Error' .$e->getMessage();
    }
    ?>
</body>

</html>