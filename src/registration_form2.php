<?php
if(isset($_POST['submit'])){
    $cookie_fname=$_POST['fname'];
    $cookie_lname=$_POST['lname'];
    $cookie_cnumber=$_POST['contact'];
    $cookie_address=$_POST['address'];
    $cookie_city=$_POST['city'];
    $cookie_state=$_POST['state'];
    $cookie_education=$_POST['education'];
    echo "First Name :".$cookie_fname."<br>";
    echo "Last Name :".$cookie_lname."<br>";
    echo "Contact Number :".$cookie_cnumber."<br>";
    echo "Address :".$cookie_address."<br>";
    echo "City :". $cookie_city."<br>";
    echo "State :".$cookie_state."<br>";
    echo "Education :".$cookie_education."<br>";
  
}
?>