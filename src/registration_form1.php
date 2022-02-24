<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_Form</title>
</head>
<body>
    <h1>REGISTER HERE...</h1>
    <form action="registration_form2.php" method="POST">
    First Name : <input type="text" name='fname'><br><br>
    Last Name : <input type="text" name='lname'><br><br>
    contactNo: <input type="text" name='contact'><br><br>
    Address :   <input type="text" name='address'><br><br>
    City :<input type="text" name='city'><br><br>
    State:<input type="text" name='state'><br><br>
    Education :<input type="text" name='education'><br><br>
    <input type="submit" name='submit' value="Register">
</form>
<?php


setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
</body>
</html>