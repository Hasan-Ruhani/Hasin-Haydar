<?php
//for count number of letters in string value
    $string = "  Hello World  ";
    echo strlen($string). "\n";  //leters count
    echo $string[8]. "\n";  //leter position
    $cleanString = trim($string);  //remove whitespace.....(rtrim)/(ltrim)
    echo strlen($cleanString). "\n";
    echo str_repeat("*", 50);