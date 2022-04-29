<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database="fos";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

 $name=$_POST["firstname"];
 $houseno=$_POST["houseno"];
 $soc=$_POST["street"];
 $area=$_POST["area"];
 $city=$_POST["city"];


$sql="INSERT INTO Customer(CustomerName,houseNO,societyName,LandmarkOrArea,City) VALUES ('$name', '$houseno', '$soc', '$area','$city')";

$result=mysqli_query($conn,$sql);


?>