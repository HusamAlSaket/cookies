<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['username'] = "user";
    $_SESSION['last_activity'] = time();
    header("Location: task15p2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="login.php">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" required />
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required />
        <input type="submit" value="Submit" class="btn btn-primary mt-2">
    </form>
</body>
</html>
