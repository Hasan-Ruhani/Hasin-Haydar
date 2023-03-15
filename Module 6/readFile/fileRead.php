<?php
    $file = fopen("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\fileRead.txt", "r");

    $data = file_get_contents("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\fileRead.txt");  //read all data methode 01
    echo $data;

    // $data = fread($file, filesize("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\fileRead.txt"));  //read all data methode 02
    // echo $data;
    
    // while(($data = fgets($file, 4096)) !== false){    //read all data methode 03
    //     echo $data;
    //  }

    // $data = fread($file, 15);    //read only number of characters
    // echo $data;  