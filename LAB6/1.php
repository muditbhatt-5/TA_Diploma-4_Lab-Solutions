<?php
    function sum($n) {
        if ($n == 0) {
            return 0;
        }
        return $n + sum($n - 1);
    } 

    $n = 5;
    $result = sum($n);
    echo "The sum of the first $n numbers is: $result";
?>
