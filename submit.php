<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_color = $_POST["colors"];
    setcookie("preferred_color", $selected_color, time() + (86400 * 30), "/");
    echo "Your favorite color is " . htmlspecialchars($selected_color) . ".";
    echo "<br><a href='index.php'>Go back</a>";
}

$counter_name = "counter";
if (isset($_COOKIE[$counter_name])) {
$counter = $_COOKIE[$counter_name] + 1;
} else {
$counter = 1;
}
setcookie($counter_name, $counter, time() + 30, "/");



?>
