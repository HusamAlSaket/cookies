<?php
session_start(); 

if (isset($_POST['product'])) {
    $product = $_POST['product'];
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    $cart[] = $product;
    $_SESSION['cart'] = $cart;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart Simulation</title>
</head>
<body>
    <h1>Shopping Cart Simulation</h1>

    <form method="post">
        <label for="product">Enter Product Name:</label>
        <input type="text" id="product" name="product" required>
        <button type="submit">Add to Cart</button>
    </form>


    <h2>Your Cart</h2>
    <?php if (!empty($cart)): ?>
        <ul>
            <?php foreach ($cart as $item): ?>
                <li><?= htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</body>
</html>

