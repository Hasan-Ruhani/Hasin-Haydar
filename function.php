<?php
    function greet($name, $title = "Mr."){
        echo "{$title} {$name} \n";
    }
    greet("Ahmad");
    greet("Mahir", "Mr.");
    greet("Full", "Ms.");
    greet("Vhanuka", "Mrs.");

    //if you need unlimited parameters & arguments
    function process(...$n){
        echo count(func_get_args());
    }
    process(1,5,8,7,9,8,799,77,88,778);
    echo "\n";

    //$data = 12;
    function data($data){
        global $data;
        echo $data;
        echo " - ";
        return $data;
    }
    data(12);
    echo $data;