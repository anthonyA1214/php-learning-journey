<?php
    if(isset($_COOKIE["username"])) {
        echo "Welcome back, {$_COOKIE["username"]} <br>";
        echo "Go to <a href=\"./delete_cookie.php\">delete_cookie.php</a>";
    } else {
        echo "No cookie found. Please go to <a href=\"./set_cookie.php\">set_cookie.php</a> to set your name.";
    }
?>

<html>
    <head>
        <title>Cookies</title>
    </head>
</html>
