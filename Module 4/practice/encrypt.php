<?php
    $origin = "abcdefghijklmnopqrstuvwxyz0123456789";
    $key = "mge5prcfv0u3ohq8ilntx9wz4ak1y7ds6jb2";

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