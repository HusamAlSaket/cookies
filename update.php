<?php
$cookie_name = "user_level";
if (!isset($_COOKIE[$cookie_name])) {
    $cookie_value = "Beginner";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    $user_level = $cookie_value;
} else {
    $user_level = $_COOKIE[$cookie_name];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['level'])) {
    $new_level = $_POST['level'];
    setcookie($cookie_name, $new_level, time() + (86400 * 30), "/");
    $user_level = $new_level;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Level</title>
</head>
<body>
    <h2>Your current user level is: <?= htmlspecialchars($user_level); ?></h2>

    <form method="post">
        <label for="level">Update User Level:</label>
        <input type="text" id="level" name="level" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>

