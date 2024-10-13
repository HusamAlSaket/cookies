<?php
$fav_color = isset($_COOKIE["preferred_color"]) ? $_COOKIE["preferred_color"] : "white"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Selector</title>
    <style>
        body {
            background-color: <?= htmlspecialchars($fav_color); ?>;
        }
    </style>
</head>
<body>
    <h3>Your favorite color is: <?= htmlspecialchars($fav_color); ?></h3>
    <form action="submit.php" method="post">
        <label for="colors">Choose a color:</label>
        <select id="colors" name="colors">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
