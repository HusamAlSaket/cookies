<?php
$cookie_name = "user";

if (isset($_COOKIE[$cookie_name])) {
    $user = $_COOKIE[$cookie_name];
} else {
    $user = "no data";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <h2>The user value is: <?= htmlspecialchars($user); ?></h2>
</body>
</html>

