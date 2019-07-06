<?php

if(isset($_POST['submit'])){

	//echo "yes we got it";

	$username=$_POST['username'];
	$password=$_POST['password'];

	//if($username && $password){
	//echo $username;
	//echo $password;
	//}else
	//echo "noooo";

$connection = mysqli_connect('localhost','root','','loginapp');
		if($connection)

		{
			echo "we are connected";

		}else
  
		{

			die("database connection failed");
		}

		$query = "INSERT INTO users(username,password)";
		$query .= "VALUES ('$username','$password')";

		$result = mysqli_query($connection, $query);
		if(!$result)
		{
			die('Query FAILED'. mysqli_error());
		}


	}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	
	<div class="col-sm-6">
		<form action="login.php" method="POST">

			<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control"></input>
			</div>


			<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control"></input>
			</div>

			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</form>

	</div>


</div>

</body>
</html>