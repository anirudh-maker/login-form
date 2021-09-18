<?php
session_start();
if(!isset($_SESSION['mobile'])){
	echo "you are logged out";
	header('location:login.php');
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>hello home</title>
</head>
<body>
<table>
	<thead>
		<th>property</th>
		<th>size</th>
		<th>rate</th>
		<th>total price </th>
	

	</thead>
	<tbody>
		<tr>
		<td> row house</td>
		<td> 1100 sq feet </td>
		<td> 1500/- sq feet</td>
		<td> <?php echo 1100*1500 ?></td>
	


		</tr>
	</tbody>

</table>
<h1> hi<?php echo  $_SESSION['name']?>  you want to choose the type of emi </h1>
<select>
	<option>12 month </option>
	<option>36 month </option>
	<option> 45 month</option>
</select>
</select>
<button><a href="logout.php">logout</a></button>
</body>
</html>


