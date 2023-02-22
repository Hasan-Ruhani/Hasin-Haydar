<?php
    $origin = "abcdefghijklmnopqrstuvwxyz0123456789";
    $key = "8o30ks2yqxhijbzen6cw7gvd9rpu1l4fmat5";

    $message = "yk9 279, 867 9z7 s6zj bz8hy8iq";
    $output = '';

    for($i = 0; $i < strlen($message); $i++){
        $character = $message[$i];
        $position = strpos($key, $character);
        if($position !== false){
            $replace = $origin[$position];
        }
        else{
            $replace = $character;
        }
        $output = $output . $replace;
    }
    echo $output;