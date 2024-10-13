<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['theme'] = $_POST['theme'];
    $_SESSION['language'] = $_POST['language'];
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'English';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
    <style>
        body.light { background-color: #fff; color: #000; }
        body.dark { background-color: #333; color: #fff; }
    </style>
</head>
<body class="<?= htmlspecialchars($theme); ?>">
    <h1>Select Your Preferences</h1>
    <form method="post">
        <label for="theme">Theme:</label>
        <select id="theme" name="theme">
            <option value="light" <?= $theme == 'light' ? 'selected' : ''; ?>>Light</option>
            <option value="dark" <?= $theme == 'dark' ? 'selected' : ''; ?>>Dark</option>
        </select>
        <br>
        <label for="language">Language:</label>
        <select id="language" name="language">
            <option value="English" <?= $language == 'English' ? 'selected' : ''; ?>>English</option>
            <option value="Arabic" <?= $language == 'Arabic' ? 'selected' : ''; ?>>Arabic</option>
        </select>
        <br>
        <input type="submit" value="Save Preferences">
    </form>

    <p>Current Theme: <?= htmlspecialchars($theme); ?></p>
    <p>Current Language: <?= htmlspecialchars($language); ?></p>
</body>
</html>
