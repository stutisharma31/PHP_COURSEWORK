<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <?php
    // Define variables and set to empty values
    $name = $email = $message = "";
    $nameErr = $emailErr = $messageErr = "";

    // Form submission logic
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Name validation
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        // Email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        // Message validation
        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            $message = test_input($_POST["message"]);
            if (strlen($message) > 250) {
                $messageErr = "Message should not exceed 250 characters";
            }
        }

        // Display form values if valid
        if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
            echo "<h2>Your Input:</h2>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Message: $message<br>";
        }
    }

    // Function to sanitize input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Contact Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color:red;"><?php echo $nameErr; ?></span>
        <br><br>

        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color:red;"><?php echo $emailErr; ?></span>
        <br><br>

        Message: <textarea name="message" rows="5" cols="40"><?php echo $message; ?></textarea>
        <span style="color:red;"><?php echo $messageErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
