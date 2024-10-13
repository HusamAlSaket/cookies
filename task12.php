<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['data'])) {
        $_SESSION['message'] = "Form submitted successfully!";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['message'] = "Error: Form data is missing!";
        $_SESSION['msg_type'] = "error";
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?= htmlspecialchars($_SESSION['msg_type']); ?>">
                <?= htmlspecialchars($_SESSION['message']); ?>
            </div>
            <?php
            unset($_SESSION['message']);
            unset($_SESSION['msg_type']);
            ?>
        <?php endif; ?>


        <form method="post">
            <label class="form-label">Enter Data:</label>
            <input type="text" name="data" class="form-control" required />
            <input type="submit" value="Submit" class="btn btn-primary mt-2">
        </form>
    </div>
</body>
</html>
