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





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <table>

<th>ID</th>
<th>NAME</th>
<th>IMAGE</th>
<th>PRICE</th>



<tbody>
<?php
                        
                        
foreach ($products as $key=> $value)
{

echo"
<tr>
<td>$value[id]</td>
<td>$value[name]</td>
<td>$value[image]</td>
<td>$value[price]</td>
</tr>";
}


?>

</tbody>
</table>
</body>
</html>