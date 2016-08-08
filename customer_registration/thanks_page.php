<?php
$salutation=$_POST['salutation'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$company = $_POST['company'];
$location = $_POST['location'];
$telephone = $_POST['telephone'];
$gender = $_POST['gender'];

	header("Location: register_submission.php");

?>
<?php
$con=mysqli_connect("localhost","root","","customer_registration");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$surname = mysqli_real_escape_string($con, $_POST['surname']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$company = mysqli_real_escape_string($con, $_POST['company']);
$location = mysqli_real_escape_string($con, $_POST['location']);
$telephone = mysqli_real_escape_string($con, $_POST['telephone']);


$sql="INSERT INTO customer (name, surname, address,company,location,telephone,gender)
VALUES ('$name', '$surname', '$address','$company','$location','$telephone','$gender')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?> 