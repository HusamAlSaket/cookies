<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $search_query = $_GET['search'];
    echo "You searched for: " . htmlspecialchars($search_query);
} else {
    echo "No search query provided.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="form-container">
        <h2>Search</h2>
        <form action="task22.php" method="GET">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>


</body>
</html>