<?php
    if (isset($_GET['submitButton'])) {
            // Get the value of the input field
        $origin = "abcdefghijklmnopqrstuvwxyz0123456789";
            $key = "mge5prcfv0u3ohq8ilntx9wz4ak1y7ds6jb2";
            
            $message = $_GET['message'];
        $output = '';
        for($i=0;$i<strlen($message);$i++){
            $character = $message[$i];
            $position = strpos($key,$character);
            if($position!==false){
                $replacement = $origin[$position];
            }else{
                $replacement = $character;
            }
            
            $output = $output . $replacement;
        }
    }

    else{
        $output = "You are not Decrypt any text!!";
    }