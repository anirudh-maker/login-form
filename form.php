<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
</head>
<body>
	<?php

session_start();
	?>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
	<label>name</label>
	<input type="text" name="name">
	<label>mobile no.</label>
	<input type="number" name="mobile">
	<label>password</label>
	<input type="password" name="password">
	<label>conform password </label>
	<input type="password" name="cpassword">
	<button type="submit" name="submit">login</button>
</form>
</body>
</html>

<?php
include('connect.php');
if(isset($_POST['submit'])){
	$name= $_POST['name'];
	$mobile= $_POST['mobile'];
	$password= $_POST['password'];
	$cpassword= $_POST['cpassword'];

	$pass=password_hash($password, PASSWORD_BCRYPT);

	$cpass=password_hash($cpassword, PASSWORD_BCRYPT);
     
     $mobilequery = "select * from form where mobile ='$mobile'";
     $queryi = mysqli_query($con, $mobilequery);
     $mobilecount= mysqli_num_rows($queryi);
if ($mobilecount>0){
	echo "no. already exist";
}
else{
	if($password===$cpassword){
$insert="insert into form (name,mobile,password,cpassword) values('$name','$mobile','$pass','$cpass')";
$query=mysqli_query($con,$insert);
 
	}
	else{
		echo "not connected";
	}
}





}

?>