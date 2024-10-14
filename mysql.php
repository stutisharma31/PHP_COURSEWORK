<?php
$username="localhost";
$username="root";
$password="";
$dbname="fruit";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("Connection failed".$conn->connect_error);
}
echo "Connection successful";
$conn->close();
?>
