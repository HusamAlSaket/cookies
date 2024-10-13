<?php
$cookie_name ="movie";
$cookie_value ="extraction";

setcookie($cookie_name,$cookie_value,time()+3600,"/");

if(isset($_COOKIE[$cookie_name])){
    $user =$_COOKIE[$cookie_name];
} else{
    $user= "doesnt watch movies";
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
    <form method ="post">
    <h2> husam favorite movie is <?= $user    ?></h2>
    <button type ="submit" name ="delete_cookie">Delete a cookie</button>
    </form>
<?php
if(isset($_POST['delete_cookie'])){
    setcookie("delete", "",time()-3600, "/");
    echo "cookie deleted";
}




?>


</body>
</html>