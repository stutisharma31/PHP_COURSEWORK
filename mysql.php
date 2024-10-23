<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("Connection failed".$conn->connect_error);
}
echo "Connection successful";
echo "<br>";
$sql="CREATE TABLE IF NOT EXISTS customer(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  password VARCHAR(20),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  )";
if ($conn->query($sql)===TRUE){
  echo "Table customer created successfully";
}else{
  echo"Table not created".$conn->error;
}

$conn->close();
?>
