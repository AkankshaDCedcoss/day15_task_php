<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lower = array_map('strtolower', $Color);
$upper = array_map('strtoupper', $Color);

print_r($lower);
echo "<br>";
print_r($upper);




?>