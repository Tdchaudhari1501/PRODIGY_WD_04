<?php
include_once 'addconfig.php';

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$details=$_POST["details"];

if (!$db) die("Could not connected " . mysqli_connect_error());
$stmt = "insert into proftfolio_us(name, email,number,details) values('$name','$email','$number','$details')";
if ($db->query($stmt) === true){
  echo "<script> alert('Your Suggestion Sent Successfully '); window.location.href='index.php'; </script>";
}
else echo "<script>alert('Something went wrong') </script>" . $db->error;

?>