<?php
    $fileName = "C:\\xampp\\htdocs\\Hasin-Haydar\\Module 6\\readFile\\filePutContents.txt";
    file_put_contents($fileName, "H A S A N \n", FILE_APPEND | LOCK_EX);
    file_put_contents($fileName, "M A S U D \n", FILE_APPEND | LOCK_EX);

    //  file_put_contents  :  mean clear previous data and write current data
    //  FILE_APPEND        :  mean Keep previous data and write current data
    //  LOCK_EX            :  mean data recive one by on user