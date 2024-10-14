<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $errors = [];
    if (empty($firstname)) {
        $errors[] = "First name is required.";
    }
    if (empty($lastname)) {
        $errors[] = "Last name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($errors)) {
        $_SESSION['message'] = "First Name: $firstname<br>Last Name: $lastname<br>Email: $email";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
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
    <?php
    if (isset($_SESSION['errors'])) {
        echo "<div style='color: red;'><ul>";
        foreach ($_SESSION['errors'] as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul></div>";
        unset($_SESSION['errors']);
    }

    if (isset($_SESSION['message'])) {
        echo "<div style='color: green;'>" . htmlspecialchars($_SESSION['message']) . "</div>";
        unset($_SESSION['message']);
    }
    ?>

    <form method="post" action="">
        First Name: <input type="text" name="firstname" value="<?= isset($firstname) ? htmlspecialchars($firstname) : ''; ?>"><br>
        Last Name: <input type="text" name="lastname" value="<?= isset($lastname) ? htmlspecialchars($lastname) : ''; ?>"><br>
        Email: <input type="email" name="email" value="<?= isset($email) ? htmlspecialchars($email) : ''; ?>"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
