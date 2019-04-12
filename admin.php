<html>

<head>
	<link rel="stylesheet" href="background.css">

</head>

<body>
	<div class="cover img1">
		<div class="content">
			<a href="index.html"><img src="IMG/TEDXJGEC.png"></a>

			<p>Be a part of it</p>
			<div class="login">
				<form method="post" action="login.php">
				
					<label>User Name</label>
					<input type="text" name="username">
					<label>Password</label>
					<input type="password" name="password"><br>
					<button type="submit" name="submit">SUBMIT</button>
				</form>
				<p id="register_text">Any feedback to developer? <a href="#register">Click here</a> to give feedback!</p>
			</div>
		</div>
	</div>
	<div id="register" style="height: 100%; background: black; overflow: hidden;">
		<div class="img2">


		</div>
	</div>

	<script>
		//Smooth Scroll
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function(e) {
				e.preventDefault();
				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
			});
		});

	</script>

</body>

</html>
