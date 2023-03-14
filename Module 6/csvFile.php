<?php
    $file = fopen("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\csvFile.csv", "r");
    while(($data = fgetcsv($file)) == !false){
        print_r($data);
        // echo $data[2];
    }
    
    // $data = file_get_contents("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\csvFile.csv");
    // echo ($data);