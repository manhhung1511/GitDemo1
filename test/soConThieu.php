<?php

function soConThieu(array $a, array $b) {
    return array_diff($a, $b);
}

$b = [3, 1, 5, 2, 1];
$a = [6, 2, 3, 0, 11, 3, 3];

print_r(soConThieu($a, $b));