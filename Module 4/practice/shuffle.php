<?php
    $origin = "abcdefghijklmnopqruvwxyz0123456789";
    $key = "9qbiwn30rpy285jf1emxu6v7olg4dkchza";
    $parts = str_split($origin);
    shuffle($parts);
    $key = join('', $parts);
    echo $key;
