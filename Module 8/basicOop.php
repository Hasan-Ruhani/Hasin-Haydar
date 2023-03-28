<?php

    //.....................basic method,,,,,,this code valid up to php 7.4 version
    // class rectangle{
    //     public $hight;
    //     public $width;

    //     function getArea(){
    //         return $this->hight * $this->width;
    //     }
    // }
    // $r = new rectangle();

    // $r->hight = 4;
    // $r->width = 10;
    // $area = $r -> getArea();
    // echo $area;

    //.....................__construct method,,,,,,this code valid up to php 7.4 version
    // class rectangle{
    //     public $hight;
    //     public $width;

    //     function __construct($w, $h){
    //         $this->width = $w;
    //         $this->hight = $h;
    //     }

    //     function getArea(){
    //         return $this->width * $this->hight;
    //     }
    // }
    // $r = new rectangle(10, 4);

    // $area = $r -> getArea();
    // echo $area;

    //....................__construct method,,,,,,this code is valid since php 8 version
    class rectangle{
        function __construct(public $width, public $hight){

        }

        function getArea(){
            return $this->width * $this->hight;
        }
    }
    $r = new rectangle(10, 4);

    $area = $r -> getArea();
    echo $area;