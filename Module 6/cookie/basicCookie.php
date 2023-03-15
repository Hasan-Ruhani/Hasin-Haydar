<?php
    setcookie('ostad', '16', time() + 20, "/");    //cookie save 20sec and access with javaScript
    setcookie("ostad-secure", "32", time() + 25, "/", "", true, true,);    //cookie save 25sec and javaScript is not access
    print_r($_COOKIE);
