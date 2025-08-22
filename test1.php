<?php
$cookie_name = "user";
setcookie("user", "", time() - 3600);

?>
<html>
<body>

<form method="post" action="test1.php">
  <input type="text" name="name">
  <button type="submit">Submit</button>
</form>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

echo "Value is:"
?>

</body>
</html>