
<?php
include "database.php";

$name = $_POST["name"];
$email =$_POST["email"];
$phone = $_POST["number"];
$adult = $_POST["adult"];
$child = $_POST["child"];
$date = $_POST["date"];
$time = $_POST["time"];



$sql = "INSERT INTO reservation (Name,Email,Phone,Adult,Child,Date,Time)
VALUES ('$name','$email','$phone','$adult','$child','$date','$time')";
if ($conn->query($sql)) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>









