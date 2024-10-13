<?php
setcookie("username", "chris-hemsworth", time() + 3600, "/", "", true, true);

if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
} else {
    $username = "Guest";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cookie Example</title>
</head>
<body>
    <h2>Welcome, <?= htmlspecialchars($username); ?></h2>
</body>
</html>

