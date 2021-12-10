<?php 
    // function searchInsert($nums, $target) {
    //     for($i=0; $i<sizeof($nums); $i++){
    //         if ($target > $nums[$i]){
    //             continue;
    //         }elseif ($target <= $nums[$i]){
    //             return $i;
    //         }
    //     }
    //      return sizeof($nums);
    // }

    $nums = [1,3,5,6];
    var_dump(searchInsert($nums,0));

    function searchInsert($nums, $target) {
        $length = count($nums);
        if(end($nums) < $target) {
            return $length;
        } 
        for($i = 0; $i < $length; $i++) {
            if($nums[$i] >= $target) {
                return $i;
            }
        }
    }
    // function searchInsert($nums, $target) {

    //     $arrLen = count($nums);
    //     // Early return if target is larger than the last element (as the array is sorted)
    //     if ($nums[$arrLen-1] < $target) return $arrLen;
        
    //     for ($i=0; $i < $arrLen; $i++) {
    //         //if target === nums[i] then simple
    //         //or if nums[i] is bigger than target, then target would have been at that index
    //         if ($target <= $nums[$i]) {
    //             return $i;
    //         }
    //     }
    // }
?>