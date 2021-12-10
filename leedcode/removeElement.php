<?php
// function removeElement(&$nums, $val) {
        
//     $nums = array_diff($nums, [$val]);
//     return count($nums);
    
// }

$nums = [3,2,2,3,4];
var_dump(removeElement($nums, 3));

function removeElement(&$nums, $val) {
    // $length = count($nums);
    // for($i = 0; $i < $length; $i++) {
    //     if(isset($val) && $nums[$i] == $val) {
    //         unset($nums[$i]);
    //     }
    // }
    foreach($nums as &$value) {
        if(isset($val) && $value == $val) {
            $value = $value *2;
        }
    }
    unset($value);
    return $nums;
}
?>