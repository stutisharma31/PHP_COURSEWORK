<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>

        <input type="submit" name="submit" value="Register">

        <?php
        class RegistrationException extends Exception {}

        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                // Validate Username (at least 5 characters)
                if (strlen($username) < 5) {
                    throw new RegistrationException("Username must be at least 5 characters.");
                }

                // Validate Email format
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    throw new RegistrationException("Invalid email format.");
                }

                // Validate Password (at least 8 characters)
                if (strlen($password) < 8) {
                    throw new RegistrationException("Password must be at least 8 characters.");
                }

                // If all validations pass, show success message
                echo "<br><span style='color:green;'>Registration Successful!</span>";
                echo "<br>Username: $username";
                echo "<br>Email: $email";
            }
        } catch (RegistrationException $e) {
            // Display the error message
            echo "<br><span style='color:red;'>Error: " . $e->getMessage() . "</span>";
        }
        ?>
    </form>
</body>
</html>
