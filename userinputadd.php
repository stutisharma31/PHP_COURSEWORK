<!DOCTYPE html>
<html lang="en">
<head>
<title>Add two numbers</title>
</head>
<body>
<form method="POST" action="">
<label for="num1">Enter num1:</label>
<input type="number" name="num1" id="num1" required>
<br><br>
<label for="num2">Enter num2:</label>
<input type="number" name="num2" id="num2" required>
<br><br>
<input type="submit" name="submit" value="Add numbers">

<?php
if($_SERVER ["REQUEST_METHOD"]=="POST"){
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $sum = $num1 + $num2;
  echo "The sum of $num1 and $num2 is $sum";
  
}
?>
</form>
</body>


