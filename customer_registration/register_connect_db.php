<?php
$con=mysqli_connect("localhost","root","","register");
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username = mysqli_real_escape_string($con, $_POST['user']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$confirm = $_POST['confirm'];
$password = mysqli_real_escape_string($con, $_POST['pass']);
$retype = $_POST['retype'];

if($_POST['email']== $_POST['confirm'] && $_POST['pass']==$_POST['retype']){
	$to=$_POST['email'];
	$subject="Thank you for register";
	$message=  "Thanks";
	mail($to,$subject,$message);
	header("Location: login.php");
	$sql="INSERT INTO reg (username,email,password) VALUES('$username','$email','$password')";
	
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
}
else{
mysqli_close($sql);
	
}
if($username==" " && $email==" " && $password==" " ){
	header("location:register.php");
	mysqli_close($sql);
}
?>