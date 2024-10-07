<!-- you are building online shopping cart in php when a user adds item to the cart the information(item name, quantity and price)should be stored in a session variable the user should also be able to view all items in their cart across different pages -->
<?php
// Start the session
session_start();

// Initialize the shopping cart if it's not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Add item to cart when form is submitted
if (isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];
    $item_quantity = $_POST['item_quantity'];
    $item_price = $_POST['item_price'];

    // Create an associative array for the item
    $item = array(
        "name" => $item_name,
        "quantity" => $item_quantity,
        "price" => $item_price
    );

    // Add the item to the session cart
    $_SESSION['cart'][] = $item;
}

// Remove item from cart
if (isset($_GET['remove'])) {
    $remove_index = $_GET['remove'];
    unset($_SESSION['cart'][$remove_index]);

    // Reindex the array to avoid gaps
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>

<h1>Shopping Cart</h1>

<!-- Form to add items to the cart -->
<form method="POST" action="">
    <label for="item_name">Item Name:</label>
    <input type="text" name="item_name" id="item_name" required><br><br>

    <label for="item_quantity">Quantity:</label>
    <input type="number" name="item_quantity" id="item_quantity" min="1" required><br><br>

    <label for="item_price">Price:</label>
    <input type="number" name="item_price" id="item_price" step="0.01" required><br><br>

    <button type="submit" name="add_to_cart">Add to Cart</button>
</form>

<hr>

<!-- Display the items in the cart -->
<h2>Your Cart</h2>
<?php if (!empty($_SESSION['cart'])): ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php
        $total = 0;
        foreach ($_SESSION['cart'] as $index => $item) {
            $item_total = $item['quantity'] * $item['price'];
            $total += $item_total;
        ?>
        <tr>
            <td><?php echo htmlspecialchars($item['name']); ?></td>
            <td><?php echo htmlspecialchars($item['quantity']); ?></td>
            <td><?php echo htmlspecialchars(number_format($item['price'], 2)); ?></td>
            <td><?php echo htmlspecialchars(number_format($item_total, 2)); ?></td>
            <td><a href="?remove=<?php echo $index; ?>">Remove</a></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3" align="right"><strong>Total:</strong></td>
            <td colspan="2"><?php echo number_format($total, 2); ?></td>
        </tr>
    </table>
<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

</body>
</html>
