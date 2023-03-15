<?php  
    
    // $file = fopen("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\fileWrite.txt", "w");  //write and clean previous data
    $file = fopen("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\fileWrite.txt", "a");  //write all dat5 
    fwrite($file, "\n Hello World");

    // file_put_contents("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\fileWrite.txt", 5);            //clear previous all data and set current data
    file_put_contents("C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\fileWrite.txt", "\n 5", FILE_APPEND);     //echo previous all data and set current data
    fclose($file);