<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	

<label>mobile</label>
<input type="number" name="mobile">
<label>password</label>
<input type="password" name="password">
<button type="submit" name="submit">login </button>
</form>
</body>
</html>

<?php
	include('connect.php');
	if(isset($_POST['submit'])){
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$emailquery="select * from form where mobile='$mobile' ";
	$query=mysqli_query($con,$emailquery);
	$mobilecount= mysqli_num_rows($query);
	if($mobilecount){
	$loginpass=mysqli_fetch_assoc($query);
	$pass= $loginpass['password'];
	$_SESSION['mobile']=$loginpass['mobile'];
	$_SESSION['name']=$loginpass['name'];
	$verify= password_verify($password,$pass);

	if($verify){
	echo "connection success";
	header('location:home.php');

	}
else{
	echo "password incorrect";
}

}
else{
	echo "email incorrect";
}
}

	?>

