<?php
session_start();
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
    <form action="index.php" method="POST">
        <input type="submit" name="submit" value="update">
    </form>
</body>
</html><?php

$myArray1=array('red','green','blue','yellow');
$_SESSION['array1']=$myArray1;
$_SESSION['array2']=$myArray2;


foreach($myArray1 as $val)
{
    echo $val."<br>";
}


    




 
?>