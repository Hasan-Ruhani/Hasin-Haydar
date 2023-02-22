<?php
    $origin = "abcdefghijklmnopqrstuvwxyz0123456789";
    $key = "mge5prcfv0u3ohq8ilntx9wz4ak1y7ds6jb2";
    $parts = str_split($origin);
    shuffle($parts);
    $key = join('', $parts);
    echo $key;