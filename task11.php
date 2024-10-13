<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['email'];
    $password =$_POST['password'];

    $valid_username ="user@gmail.com";
    $valid_password = "password123";

    if($username == $valid_username && $password ==$valid_password){
        $_SESSION['username'] =$username;
        header("location: protected.php");
        exit();
    }else{
        $error = "invalid credentials";

    }

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
        <input type="email" name="email" class="form-control" id="email" required />

        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required />

        <input type="submit" value="Submit" class="btn btn-primary mt-2">
    </form>
    <?php if (isset($error)) { echo "<p class='text-danger'>$error</p>"; } ?>
</body>
</html>