<?php

    $array = explode(",",$argv[1]);
    $key = $argv[2];
    $result = 0;
    

    for ($i=0; $i < sizeof($array); $i++) {
        $word = $array[$i];
        for ($x=0; $x < $key; $x++) { 
            if ($word[$x] == "a") {
                for ($k=$x; $k < $key+$x; $k++) {
                    if ($word[$k] == "b"){
                        $result += 1;
                    } 
                }
            }

        }
    }

    echo "OUTPUT : ".$result;
?>