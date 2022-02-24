<?php
$products = array(
    array(
    "id" => 101,
    "name" => "Basket Ball",
    "image" => "basketball.png",
    "price" => 150
    ),
    array(
    "id" => 102,
    "name" => "Football",
    "image" => "football.png",
    "price" => 120
    ),
    array(
    "id" => 103,
    "name" => "Soccer",
    "image" => "soccer.png",
    "price" => 110
    ),
    array(
    "id" => 104,
    "name" => "Table Tennis",
    "image" => "table-tennis.png",
    "price" => 130
    ),
    array(
    "id" => 105,
    "name" => "Tennis",
    "image" => "tennis.png",
    "price" => 100
    )
    );
    
    if(isset($_POST['submit']))
    {
    $id1=$_POST['id'];

    foreach($products as $key=>$value)
    {
        if($id1==$value['id'])
        {
            $name1= $value['name'];
            $image1= $value['image'];
            $price1= $value['price'];
            
        }
    }
    $_SESSION['cart'][]=array('p_id'=> $id1,'p_name'=> $name1,'p_image'=> $image1,'p_price'=> $price1);
    foreach($_SESSION['cart'] as $key => $val)
    {
        echo $val['p_id']."<br>";
        echo $val['p_name']."<br>";
        echo $val['p_image']."<br>";
        echo $val['p_price']."<br>";
    }
}
    ?>

    




 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>
<body>
    <form action="products_array.php" method='POST'>
    <input type="text" name="id">
    <input type="submit" name="submit">


    </form>

</body>
</html>