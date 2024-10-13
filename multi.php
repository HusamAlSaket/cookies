<?php

session_start();
$user =isset($_SESSION['user'])? $_SESSION['user'] :"no data";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>The user value is: <?= htmlspecialchars($user); ?></h2>
<a href="multi2.php">Go back to Page 2</a>
</body>
</html>