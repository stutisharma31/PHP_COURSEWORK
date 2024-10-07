<?php
session_start();
$username=$_SESSION["username"];
$userid=$_SESSION["userid"];
?>
<html>
<body>
  <?php
  echo "Username is:".$username."</br>";
  echo "User ID is:".$userid."</br>";
?>
</body>
</html>
