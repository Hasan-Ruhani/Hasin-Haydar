<?php
    $origin = "abcdefghijklmnopqrstuvwxyz0123456789";
    $key = "8o30ks2yqxhijbzen6cw7gvd9rpu1l4fmat5";

    $message = "Hey guy, aru you from Noakhali";
    $message = strtolower($message);
    $output = '';

    for($i = 0; $i < strlen($message); $i++){
        $character = $message[$i];
        $position = strpos($origin, $character);
        if($position !== false){
            $replace = $key[$position];
        }
        else{
            $replace = $character;
        }
        $output = $output . $replace;
    }
    echo $output;