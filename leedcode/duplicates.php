<?php
    // function removeDuplicates(&$nums) {
        
    //     $nums = array_unique($nums);
    //     $k = count(array_unique($nums));
    //     return $k;
        
    // }
    $nums = [10, 9, 8,8];
    print(removeDuplicates($nums));
    // var_dump($nums);
    function removeDuplicates(&$nums) {
        $length = count($nums);
        for ($i = 0; $i < $length; $i++) {
            $next = next($nums);
            print_r($next);
            if ($nums[$i] === $next) {
                unset($nums[$i]);
            }
        }
    }
?>