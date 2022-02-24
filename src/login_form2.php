<?php
session_start();
if(isset($_POST['login'])){
$email1=$_POST['email'];
$password1=$_POST['password'];
echo $email1."<br>";
echo $password1;
}
if(isset($_POST['logout'])){
    session_destroy();
}
?>