<?php
session_start();
?>
<html>
  <body>
    <?php
    session_unset();
    session_destroy();
    ?>
  </body>
</html>


//The form data is used to create three session variables .A hyperlink takes the browser to another page which reads back the session variables