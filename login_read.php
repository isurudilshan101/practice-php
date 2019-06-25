<?php
$connection = mysqli_connect('localhost','root','','loginapp');
		if($connection)

		{
			echo "we are connected";

		}else
  
		{

			die("database connection failed");
		}

		$query = "SELECT * FROM users";
	

		$result = mysqli_query($connection, $query);
		if(!$result)
		{
			die('Query FAILED'. mysqli_error());
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
		<th>id</th>
		<th>username</th>
		<th>passwordS</th>
		
<?php

		while($row = mysqli_fetch_row($result)){
?>
			 <td> <?php echo $row['id'] ;?></td>
		
			<td ><?php echo $row['username']; ?></td>
			<td> <?php echo $row['password']; ?></td>
			
<?php
		}

?>


		


	</div>


</div>

</body>
</html>
