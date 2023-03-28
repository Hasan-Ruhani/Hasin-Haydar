<?php

    //.....The use of an interface is done either to determine which class is being used or to enforce the use of certain properties in the class
    interface shape{
        function getArea();
    }
    class circle implements shape{
        const PI = 3.14;
        function __construct(public $radius){
            
        }
        
        function getArea(){
            return self::PI * $this->radius * $this->radius;
        }
    }
    $c = new circle(4);

    $area = $c -> getArea();
    echo $area;