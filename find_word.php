<?php

    $array = explode(",",$argv[1]);
    $word = $argv[2];
    $foundWord = [];

    for ($i=0; $i < sizeof($array); $i++) { 
        $found = "YES";
        for ($x=0; $x < strlen($word); $x++) { 
            $countChar = substr_count($word,$word[$x]);
            $countCharWordArray = substr_count($array[$i],$word[$x]);

            if ($countChar > $countCharWordArray) {
                $found = "NO";
            }
        }
        array_push($foundWord,$found);
    }

    echo "OUTPUT : ".implode(",",$foundWord) ;

?>