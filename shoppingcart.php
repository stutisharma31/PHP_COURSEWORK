<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>

<h2>Shopping Cart</h2>

<form method="POST" action="">
    <label for="price">Price per product (Rs.): </label>
    <input type="number" id="price" name="price" required><br><br>
    
    <label for="quantity">Quantity: </label>
    <input type="number" id="quantity" name="quantity" required><br><br>

    <input type="submit" name="submit" value="Calculate Total">
</form>

<?php
if (isset($_POST['submit'])) {
    $price = (float)$_POST['price'];
    $quantity = (int)$_POST['quantity'];
    $total = $price * $quantity;
    $discount = 0;

    if ($total > 2500) {
        $discount = 0.20;
    } elseif ($total > 1000) {
        $discount = 0.10;
    } elseif ($total > 500) {
        $discount = 0.05;
    }

    $discountAmount = $total * $discount;
    $finalTotal = $total - $discountAmount;

    // Output the results
    echo "<p>Total Price: Rs. " . number_format($total, 2) . "</p>";
    echo "<p>Discount Applied: " . ($discount * 100) . "%</p>";
    echo "<p>Final Price after Discount: Rs. " . number_format($finalTotal, 2) . "</p>";
}