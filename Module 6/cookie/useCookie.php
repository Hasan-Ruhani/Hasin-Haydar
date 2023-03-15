<?php
    if(isset ($_COOKIE['login']) && $_COOKIE['login'] == 1){
        echo "User is Looged In";
    }
    else{
        echo "User is Looged Out";
    }

    if(isset ($_GET['login']) && $_GET['login'] == 1){
        setcookie("loggedin", '1', time() + 30, "/");
    }

    if(isset($_GET['logout']) && $_GET['logout'] == 1){
        unset($_COOKIE['loggedin']);
    }

//....................
//     if(isset($_GET['login']) && $_GET['login'] == 1){
//         setcookie("loggedin", '1', time() + 30, "/");
//     }

//     if(isset($_GET['logout']) && $_GET['logout'] == 1){
//         unset($_COOKIE['loggedin']);
//     }

//     if(isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] == 1){
//         echo "User is Logged In";
//     }
//     else{
//         echo "User is Logged Out";
//     }
// ?>
