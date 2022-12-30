<?php

    $minNumber = $argv[1];
    $maxNumber = $argv[2];
    $result = [];

    for ($i=$minNumber; $i < $maxNumber; $i++) { 
        $x = 0;
        for ($k=1; $k <= $i; $k++) { 
            if($i % $k == 0 ){ // modulus
                $x++;
            }
        }
        if ($x == 2 && $i % 2 == 1) {
            array_push($result,$i);
        }
    }


    echo implode(",",$result) ;

?>