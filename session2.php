<!-- 
//The form data is used to create three session variables .A hyperlink takes the browser to another page which reads back the session variables -->
<html>
  <body>
    <form action=<?php echo $_SERVER['PHP_SELF'];?>method="post">
      <h3>User's id:<input type="text" name="ID"/></h3>
      <h3>User's name:<input type="text" name="name"/></h3>
      <h3>User's age:<input type="text" name="age"/></h3>
      <input type="submit" value="Submit"/>
</form>
<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $_SESSION['UserID']=$_POST['ID'];
      $_SESSION['Name']=$_POST['name'];
      $_SESSION['age']=$_POST['age'];
    }
    echo "Following session variables created :\n";
    foreach($_SESSION as $key=>$val)
    echo "<h3>".$key."=>".$val."</h3>";
    echo "</br>".'<a href="hello.php">Click here</a>';
  ?>
</body>
</html>
