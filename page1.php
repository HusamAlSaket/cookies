<?php
$cookie_name = "user";
$cookie_value = "hello from page 1";
setcookie($cookie_name, $cookie_value, time() + 360, "/");
?>
