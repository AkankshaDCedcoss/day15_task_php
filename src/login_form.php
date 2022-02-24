<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
    <form action="login_form2.php" method="POST">
E-Mail:   <input type="email" name="email"><br><br>
Password:   <input type="password" name="password"><br><br>
<input type="submit" name="login" value="Login">
<input type="submit" name="logout" value="Logout">





    </form>
    <?php
    $_SESSION['name1']=$_POST['email'];
    $_SESSION['name2']=$_POST['password'];
    
    
    
    ?>
</body>
</html>