<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin') {
        $_SESSION['role'] = 'admin';
    } elseif ($username == 'editor') {
        $_SESSION['role'] = 'editor';
    } elseif ($username == 'viewer') {
        $_SESSION['role'] = 'viewer';
    } else {
        echo "Invalid user.";
        exit;
    }
    
    echo "Login successful! Welcome, $username.";
    echo "<br><a href='restricted.php'>Go to restricted page</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Login</h2>
    <form method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>



