
	<?php

	if(isset($_POST['submit'])){
		
		include_once('dbh.php');
		$name = $_POST['name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$school = $_POST['school'];
		$q1 = $_POST['q1'];
		$q2 = $_POST['q2'];
		$q3 = $_POST['q3'];
		$q4 = $_POST['q4'];
		$q5 = $_POST['q5'];
		$shirt = $_POST['shirt'];
		
		
	
		$query= "INSERT INTO users (name,email,age,gender,school,q1,q2,q3,q4,q5,shirt) VALUES ('$name','$email','$age','$gender','$school','$q1','$q2','$q3','$q4','$q5','$shirt');";
		
		$result= mysqli_query($con, $query);
		
		if(!$result){
			echo "Error! Vote Again!";
		}
		else{
			echo "Submission Succesful!";
		}
	}
?>
		