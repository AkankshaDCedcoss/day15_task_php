
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
    <table>
<thead>
                        
                        <th>COUNTRY</th>
                        <th>CAPITAL</th>
                       
                    </thead>
                    <tbody>
                    <?php
                    include 'redirect1_array.php';
                    foreach($ceu as $key=>$value)
                    {
                        echo"<tr>
                        <td>$key</td>
                        <td>$value</td>
                        </tr>";
                    }
                    ?>
</tbody>
</table>
    
</body>
</html>