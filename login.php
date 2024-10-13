<?php
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
    setcookie("email", $email, time() + 36000, "/");
    setcookie("password", $password, time() + 36000, "/");
}

if (isset($_COOKIE['email'])) {
    $saved_email = $_COOKIE['email'];
} else {
    $saved_email = "";
}

if (isset($_COOKIE['password'])) {
    $saved_password = $_COOKIE['password'];
} else {
    $saved_password = "";
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
    <form method="post">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" value="<?= htmlspecialchars($saved_email); ?>" required />

        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" value="<?= htmlspecialchars($saved_password); ?>" required />

        <input type="submit" value="Submit" class="btn btn-primary mt-2">
    </form>
</body>
</html>
