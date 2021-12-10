<?php

function maxSum($a = []) {
        $max = getSum($a[], 1, 1);
        for($i =1; $i<5;$i++) {
                for($j=1; $j<5; $j++) {
                        $sum = getSum($a[], $i, $j);
                        if($sum > $max) {
                                $max = $sum;
                        }
                }
        }
        return $sum;
}

function getSum($a = [], $i, $j) {
        return ([$i-1][$j-1] + [$i-1][$j]+ [$i-1][$j+1] +
                        [$i][$j] +
                        [$i+1][$j-1] + [$i+1][$j] + [$i+1][$j+1] ) ;
}
$a = [
        [9,-9,-9,1,1,1],
        [0,-9,0,4,3,2],
        [-9,-9,-9,1,2,3],
        [0,0,8,6,6,0],
        [0,0,0,-2,0,0],
        [0,0,1,2,4,0]
];

var_dump(maxSum($a));