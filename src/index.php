<?php
session_start();
?>
<?php


$_SESSION['array2']=$myArray2;
$myArray2=array();
if($_POST['submit'])
{
foreach($_SESSION['array1'] as $x)
{
   if($x=='green')
   
    {
        $x='black';
    }
    echo $x."<br>";
    
}
echo "<br><br>VALUE UPDATED!!!";
}




?>