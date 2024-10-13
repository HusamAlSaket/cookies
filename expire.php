<?php

$cookie_name="user";
$cookie_value= "husam";

setcookie($cookie_name,$cookie_value,time()+ 60,"/");

if(isset($_COOKIE[$cookie_name])){
    $user=$_COOKIE[$cookie_name];
}else{
    $user= "no data";
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
<h2>user <?= $user  ?></h2> 
</body>
</html>