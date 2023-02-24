<?php
    if(isset($_GET['submitButton'])){
        $origin = "abcdefghijklmnopqruvwxyz0123456789";
        $key = "9qbiwn30rpy285jf1emxu6v7olg4dkchza";

        $message = $_GET['message'];
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
    }
    else{
        $output = "You are not Decrypt any text";
    }
    