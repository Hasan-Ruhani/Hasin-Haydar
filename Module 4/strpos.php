<?php
//for check have a letters that you want find
    $string = "kk.hasan420@gmail.com";
    $neddle = 'g';
    $is_letter_present = strpos($string, $neddle);

    if($neddle == ' '){
        $neddle = "' '";
    }
    if($is_letter_present !== false){
        echo "{$neddle} is present";
    }
    else{
        echo "{$neddle} is not present";
    }