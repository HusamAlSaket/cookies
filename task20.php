<?php
session_start();

$name = $age = $favorite_color = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $favorite_color = htmlspecialchars($_POST['favorite_color']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Survey</title>
</head>
<body>
<h2>Simple Survey</h2>
<form action="task20.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>

    <label for="favorite_color">Favorite Color:</label>
    <input type="text" id="favorite_color" name="favorite_color" required>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Thank you, $name, for submitting!</h2>";
    echo "Age: $age<br>";
    echo "Favorite color: $favorite_color";
}
?>

</body>
</html>
