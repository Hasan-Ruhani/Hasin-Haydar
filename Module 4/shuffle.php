<?php
    $origin = "abcdefghijklmnopqrstuvwxyz0123456789";
    $key = "83r57ziljonh0byst1fkm2wadpeguxq9c64v";
    $parts = str_split($origin);
    shuffle($parts);
    $key = join('', $parts);
    echo $key;