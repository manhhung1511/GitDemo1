<?php
 function isPalindrome(int $x): bool
    {
        if ($x < 0 || $x > 2147483647 || $x < -2147483647) {
            return false;
        }
        $res = 0;
        $copiedX = $x;
        while ($copiedX > 0) {
            $res = ($res*10) + ($copiedX % 10);
            echo $res;
            $copiedX = floor($copiedX / 10);
        }
         return $res === $x;
    }
    echo (isPalindrome(121));
?>