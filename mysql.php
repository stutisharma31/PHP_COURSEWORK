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
echo "<br>";
// $sql="INSERT INTO customer(id,name,email,password)Values(11,'shreya','shreya@gmail.com','abcd'),
// (12,'shashu','shashu@gmail.com','wxyz'),
// (13,'dikshu','dikshu@gmail.com','abba'),
// (14,'harsh','harsh@gmail.com','hhmt')";
// if ($conn->query($sql)===TRUE){
//   echo "Record inserted successfully";
// }else{
//   echo"Could not insert the record".$conn->error;
// }

$sql = "SELECT id, name, email, password FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data for each row
  while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . " | Name: " . $row["name"] . " | Email: " . $row["email"] . " | Password: " . $row["password"] . "<br>";
  }
} else {
  echo "No records found";
}

$conn->close();
?>
