<?php
//for string to array again array to string
    $fruits = 'Mango Banana Apple Orange Grape';
    $fruits_array = explode(' ', $fruits);   //delimeter (With which I will explode)
    echo $fruits_array[1]. "\n";
    echo "number of letters in array"." ". count($fruits_array). "\n";
    print_r($fruits_array)."n";

    $fruits_again = implode('-', $fruits_array);  //delimeter (With which I will explode)

    $string = 'aeiou';
    $arrayToString = str_split($string, 2);

    echo $fruits_again. "\n".str_repeat(".", 70)."\n";

    echo $arrayToString[1]. "\n";
    echo join('...', $arrayToString). "\n";
    print_r($arrayToString);
