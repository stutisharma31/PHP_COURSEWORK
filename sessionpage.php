<!-- 
//The form data is used to create three session variables .A hyperlink takes the browser to another page which reads back the session variables -->
<?php
session_start();
$_SESSION["username"]="abc";
$_SESSION["userid"]="1";
$_SESSION["userage"]="20";
?>
<html>
<body>
  <?php
  echo "Session variable is set";
?>
<a href="ab.php">Go to second page</a>
</body>
</html>



