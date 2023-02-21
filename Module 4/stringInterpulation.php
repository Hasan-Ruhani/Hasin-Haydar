<?php
    $fName = "Hasan";
    $lName = "Ruhani";
    $result = "Hello {$fName}    {$lName}";  //interPulation methode
    
    //heardoc methode (Don't space/any letter after >>>EOD)
    $output = <<<EOD
    Hello {$fName} {$lName};
    EOD;

    echo $result. "\n". $output;