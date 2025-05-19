<?php
    $cookie_name="Diploma-4";
    $cookie_value="Darshan University";
    if(!isset($_COOKIE[$cookie_name]))
    {
        setcookie($cookie_name,$cookie_value,time()+30);
        echo "Cookie named '".$cookie_name."' is set successfully";
    }
    else
    {
        echo "Cookie '".$cookie_name."' is updated!<br>";
        echo "Value is : ".$_COOKIE["$cookie_name"];
    }
?>