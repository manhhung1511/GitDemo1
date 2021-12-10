<?php
    // function twoSum($nums, $target) {
    //     $number1 = 0;
    //     $number2 = 0;
    //     for ($i=0; $i<count($nums); $i++) {
    //         $number1 = $nums[$i];
    //         echo " i= $i".PHP_EOL;
    //         for($j=0; $j<count($nums); $j++) {
    //             if($i == $j) {
    //                 continue;
    //             }
    //             echo $j;
    //             $number2 = $nums[$j];
    //             if(($number1 + $number2) === $target) {
    //                 break 2;
    //             }
    //         }
    //     }
    //     return [$i, $j];
    // }

    $a = [1,5,4,2,7];
    var_dump(twoSum($a, 12));

    function twoSum($nums, $target) {
        $count = count($nums);
        $map = [];
        
        for ($i = 0; $i < $count; $i++) {
            $search = $target - $nums[$i];
            if (isset($map[$search]) && $map[$search] != $i) {
                 return [$i, $map[$search]];
            } else {
                $map[$nums[$i]] = $i;
              
            }       
        }
    }
    // function twoSum(array $nums, int $target) {
	// 	$map = [];
    //     // Important to not have count($nums) in the `for` loop. Else it will get executed every iteration.
	// 	$size = count($nums);
	// 	for ($i = 0; $i < $size; $i++) {
	// 		$complement = $target - $nums[$i];
	// 		if ( array_key_exists($complement, $map) ) {
	// 			return ([ $i, $map[$complement] ]);
	// 		}
	// 		$map[ $nums[$i] ] = $i;
	// 	}
	// }
?>