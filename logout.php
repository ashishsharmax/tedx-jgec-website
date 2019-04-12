<?php
@ob_start();
session_start();
?>
<?php

session_destroy();

?>
<html>
	<head>
		<title>
			Logout
		</title>
	</head>
	<body>
		<h1>You Have been Successfully Logged OUT!</h1>
		<?php
		    header("Refresh:1; url=index.html");
		?>
	</body>
</html>