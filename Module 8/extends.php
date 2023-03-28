<?php

    class vehicle{
        function move(){}
        function start(){
            echo "Started";
        }
        function stop(){
            echo "Stopped";
        }
        function honk(){
            echo "pep pep..";
        }
    }

    class car extends vehicle{
        function move(){
            parent :: honk();
            echo "Moving at 150 kmph";
        }
    }

    class cycle extends vehicle{
        function move(){
            echo "Moving at 60 kmph";
        }
    }

    class truck extends vehicle{
        function move(){
            echo "Moving at 00 kmph";
        }
    }

    $c = new car();
    $c -> move();
    echo "\n";

    $cy = new cycle();
    $cy -> move();
    echo "...";
    $cy -> start();
    echo "\n";

    $t = new truck();
    $t -> move();
    echo "...";
    $t -> stop();
    