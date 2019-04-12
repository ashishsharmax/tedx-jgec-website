<?php
@ob_start();
session_start();
?>
<?php
	
	if(!isset($_SESSION['adminName'])) {
		header("Location:index.php");
	} else { 
	?>
<html>
<head>
	<title>Users List</title>
	<link rel="stylesheet" href="bootstrap.min.css">
<!--	<link rel="stylesheet" href="css/style2.css">-->
</head>
<body>
<h1 style="text-align:center;">Users List</h1>
<h2 ><a href="logout.php " style="float:right; text-decoration:none;">Logout</a></h2>
	<table class="table table-stripped table-bordered table-hover">

	<?php
		
		include_once('dbh.php');
		
		$query = "SELECT * FROM users;";
		$res = mysqli_query($con,$query);
		

		while($row = mysqli_fetch_assoc($res)) {
			
		?>
		<tr>
		<th>SL NO.</th>
		<th>Name</th>
		<th>Age</th>
		<th>Email</th>
		<th>Gender</th>
		<th>School/College</th>
		<th>Mobile</th>
		
	</tr>
		
		<tr>
			<td><?php echo $row['no']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['age']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['school']; ?></td>
			<td><?php echo $row['tel']; ?></td>
		
		</tr>
		<tr>
			<th>Tshirt</th>
			<th>Question 1</th>
			<th>Question 2</th>
			<th>Question 3</th>
			<th>Question 4</th>
			<th>Question 5</th>
			
		</tr>	
			<tr style="border-bottom: solid red 4px;">
			<td><?php echo $row['shirt']; ?></td>
			<td><?php echo $row['q1']; ?></td>
			<td><?php echo $row['q2']; ?></td>
			<td><?php echo $row['q3']; ?></td>
			<td><?php echo $row['q4']; ?></td>
			<td><?php echo $row['q5']; ?></td>
		
		</tr>
		
			<?php
		}
	
	?>
	</table>
	
	
</body>
</html>
<?php } ?>