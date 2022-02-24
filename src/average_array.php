<?php
$temprature=array( 78, 60, 62,
                    68, 71, 68,
                    73, 85, 66,
                    64, 76, 63,
                    75, 76, 73, 
                    68, 62, 73, 
                    72, 65, 74, 
                    62, 62, 65, 
                    64, 68, 73, 
                    75, 79, 73);
                    $x=count($temprature);
                    $sum=array_sum($temprature);
                    $temprature_average=$sum / $x;
                    echo "Average Temperature is :   " .$temprature_average;
                    asort($temprature, SORT_NUMERIC);
                    $z=array_slice($temprature, 0, 5, true);
                    echo "<br>List of five lowest temperatures :   ";
                    foreach ($z as $key)
                    {
                        echo "  ".$key;
                    }
                    rsort($temprature, SORT_NUMERIC);
                    $k=array_slice($temprature, 0, 5, true);
                    $r=array_reverse($k);
                    echo "<br>List of five highest temperatures :   ";
                    foreach ($r as $key)
                    {
                        echo "  ".$key;
                    }
                    






?>