<?php
    function fibonacci($n) {
        $a = 0;
        $b = 1;
        if($n == 0 || $n==1)
        {
            echo "Your value is =".$n;
        }
        else
        {
            for ($i = 2; $i < $n; $i++) {
                echo $a . " ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
            }
        }
    }

    $n = 10;
    fibonacci($n);
?>
