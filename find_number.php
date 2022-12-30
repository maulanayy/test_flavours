<?php

    $array = explode(",",$argv[1]);
    $number = $argv[2];
    $notFoundNumber = "";
    for ($i=1; $i <= $number; $i++) { 
        if (!in_array($i,$array)){
            $notFoundNumber .= ($i);
        }
    }

    echo "OUTPUT : ".$notFoundNumber;
?>