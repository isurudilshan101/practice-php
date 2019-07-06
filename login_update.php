<?php include "db.php";?>
<?php include "functions.php";?>

<?php
 if(isset($_POST['submit']))
 {
 	$username= $_POST['username'];
 	$password= $_POST['password'];
 	$id= $_POST['id'];

 	$query="UPDATE users SET ";
 	$query .= "username='$username', ";
 	$query .= "password='$password' ";
 	$query .= "WHERE id= $id ";

 	$result=mysqli_query($connection,$query);
 	if(!$result)
 	{
 		die("QUERY FAILED" . mysqli_error($connection));
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
		
		<form action="login_update.php" method="POST">

			<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control"></input>
			</div>


			<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control"></input>
			</div>

			
			<div class="form-group">
			<select name="id" id="">
				<?php
			
				showAllData();


				?>
			
				
			</select>

			</div>
			<input type="submit" class="btn btn-primary" name="submit" value="UPDATE">
		</form>



	</div>


</div>

</body>
</html>