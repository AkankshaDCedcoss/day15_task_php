<?php


$array1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
$array2 = array('c2', 'c4');
$result = array_diff_key( $array1, array_flip( $array2));
print_r($result);


?>