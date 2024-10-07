<?php
session_start();
$_SESSION["userid"]="1111";
?>
<html>
  <body>
    <?php
    echo "Username is:".$username."</br>";
    echo "User id is:".$userid;
    ?>
  </body>
</html>
