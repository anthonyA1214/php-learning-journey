<?php
    if (isset($_POST["username"])) {
        $username = $_POST["username"];
        setcookie("username", $username, time(), "/"); 
    }
?>

<html>
<head>
    <title>Cookies</title>
</head>
<body>
    <form method="post" action="set_cookie.php">
        <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>
    <?php 
        if (isset($_COOKIE["username"])) {
            echo "Hello, {$_COOKIE["username"]}! Your name has been saved in a cookie. <br>";
            echo "Go to <a href=\"./welcome.php\">welcome.php</a> ";
        }
    ?>
</body>
</html>