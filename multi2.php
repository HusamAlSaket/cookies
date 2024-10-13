<?php
session_start();
$_SESSION['user'] ="hello from page 1";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
<h2>Session variable 'user' set.</h2>
<a href="multi.php">Go to Page 1</a>
</body>
</html>

