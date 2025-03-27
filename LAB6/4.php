
    <?php
    function fact($n){
        if ($n<=1) {
            return 1;
        }
        else{
            return $n * fact($n-1);
        }
    }

    $n = 5;
    $result = fact($n);
    echo "factorial of $n = $result";
    ?>
