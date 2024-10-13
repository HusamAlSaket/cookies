<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("location :task11.php");
    exit();
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
<h2>welcome, <?= htmlspecialchars($_SESSION['username']);?></h2> 
<form method ="post" action="logout.php">
    <button type ="submit">logout</button>
</form>
</body>
</html>
