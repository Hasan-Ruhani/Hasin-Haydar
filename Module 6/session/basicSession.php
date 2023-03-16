<?php
    session_name('myapp');
    session_start(['cookie_lifetime' => 20]);
    $_SESSION['name'] = "H A S A N";
    $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
    $_SESSION['counter']++;
    echo  $_SESSION['name'] . "<br>" .
          $_SESSION['counter'];