<?php
  include("configuration.php");
   session_start();
$name =  $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email =  $_REQUEST['email'];
$memo = $_REQUEST['memo']; 
$response = $_REQUEST['response']; 

// Performing insert query execution

$sql = "INSERT INTO enquiry (response) VALUES($response) ";

if ($conn->query($sql) === TRUE) {
  header("location: index.php");
  echo "Response has been sent";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>