<?php

    class mathHelper{
        public static function square($n){
            return $n * $n;
        }
        public static function cube($n){
            return $n * $n * $n;
        }
    }

    //................wrong processes
    // $mth1 = new mathHelper();
    // $mth2 = new mathHelper();
    // $sq1 = $mth1-> square(4);
    // echo $sq1;
    // echo "\n";
    // $sq2 = $mth2 -> square(5);
    // echo $sq2;
    // echo "\n";
    // $cb1 = $mth1-> cube(4);
    // echo $cb1;
    // echo "\n";
    // $cb2 = $mth2-> cube(5);
    // echo $cb2;

    $sq1 = mathHelper :: square(4);
    echo $sq1. "\n";
    $sq2 = mathHelper :: square(5);
    echo $sq2;

