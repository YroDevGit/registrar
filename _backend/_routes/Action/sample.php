<?php

    $string = "This is a sample string";
    $find = "sample";

    if(stripos($string, $find) !== false){
        echo "The string contains (sample)";
    }

?>
