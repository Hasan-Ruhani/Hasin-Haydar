<?php
//for repace any object in string
    $string = 'aeiou';
    $find = "io";
    $replace = "IO";
    $new_string = str_replace($find, $replace, $string);
    echo $new_string;