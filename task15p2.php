<?php
session_start();

$inactive = 10; 

if (isset($_SESSION['last_activity'])) {
    $session_life = time() - $_SESSION['last_activity'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: task15.php");
        exit();
    }
}

$_SESSION['last_activity'] = time();


if (!isset($_SESSION['username'])) {
    header("Location: task15.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protected Page</title>
</head>
<body>
    <h2>Welcome, <?= htmlspecialchars($_SESSION['username']); ?></h2>
    <form method="post" action="task15log.php">
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</body>
</html>
