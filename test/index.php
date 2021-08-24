<?php

function maximumFoods($a=[], $k) {
    $count = 0;
    sort($a);
    $sum = 0;
    foreach($a as $b) {
        $sum+=$b;
        $count++;
        if($sum > $k) {
            $count --;
            break;
        }
    }
    return $count;
}

$a=[3, 2, 5, 4, 8];
$k=10;
echo(maximumFoods($a, $k));