<?php
	if(isset($_POST['submit'])){
		include_once('dbh.php');
		
		$username = $_POST['username'];
		$pass1 = $_POST['password'];
		$password= $pass1;
		$query="SELECT * FROM admin WHERE username='$username' AND password = '$password';";
	
		$result = mysqli_query($con, $query);
			if(!mysqli_num_rows($result)==1) {
				echo 'Something went wrong';
			} else {
				$row = mysqli_fetch_assoc($result);
				
				//Start a session so we can store the admin's session 
				session_start();
				$_SESSION['adminName'] = $row['username'];
				
				
				header("Location: users.php");
			}
		
		}
		
		
		
								 
?>
