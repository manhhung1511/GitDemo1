<?php

function insertionSort($data)
{
    $n = count($data);
    $next = null;
    for($i=1; $i < $n; $i++)
    {
        $next = $data[$i];
        for($j = $i-1; $j>=0; $j--) {
           if($data[$j] > $next) {
              $data[$j+1] = $data[$j]; //dichj sang phai 
           } else {
               break;
           }
        }
        $data[$j+1] = $next; //sau do dich phai sang trai
    }
    return $data;
}       
$data = [43,23];
echo implode(',',insertionSort($data));