<?php
    function greet($name, $title = "Mr."){
        echo "{$title} {$name} \n";
    }
    greet("Ahmad");
    greet("Mahir", "Mr.");
    greet("Full", "Ms.");
    greet("Vhanuka", "Mrs."); //arguments
    greet(name:"Karim", title:"Mr."); //name arguments

    //if you need unlimited parameters & arguments
    function process(...$n){
        echo count(func_get_args());
    }
    process(1,5,8,7,9,8,799,77,88,778);
    echo "\n";
    
    //use global variable
    $data = 12;
    function data(){
        global $data;
        echo $data;
        $data  += 4;
        echo " - ";
    }
    data(12);
    echo $data;

    echo "\n";

    //user count on your page
    function visit(){
       static $visitor = 0;
       $visitor++;
        echo  $visitor.",";
    }
    visit();
    visit();
    visit();
    visit();
    visit();