<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Enter a Number to Generate Multiplication Table</h2>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <input type="submit" value="Generate Table">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        echo "<h3>Multiplication Table of $number</h3>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$number x $i = " . ($number * $i) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
