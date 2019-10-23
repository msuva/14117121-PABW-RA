<?php
    function swap (&$a, &$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $a = 3;
    $b = 8;
    echo "X = $a, ";
    echo "Y = $b <br>";
    
    swap ($a, $b);
    echo "Swap: <br>";
    echo "X = $a, ";
    echo "Y = $b";
?>