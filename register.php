<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<title>TEDxJGEC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="static/css/register.css" />
	<script type="text/javascript" src="static/js/jquery.js"></script>
	<script type="text/javascript" src="static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="static/js/rellax.min.js"></script>
	<link rel="shortcut icon" href="IMG/nav.png">
	<!--FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,800" rel="stylesheet">
	<!--CLOCK-->
	<link rel="stylesheet" href="clock/flipclock.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script src="clock/flipclock.min.js"></script>

	<link rel="stylesheet" type="text/css" href="static/css/tedx-style.css">

</head>
<body>
    
    <div class="fixed-frame">
    <h5><img src="IMG/TEDXJGEC.png" width="200"></h5>
    
    <h6><a href="https://www.facebook.com/tedxjgec">FACEBOOK</a> / <a href="https://www.instagram.com/tedxjgec">INSTAGRAM</a></h6>
</div>


<div class="container-fluid">

	  <div class="mobilenav"> 
		  <li><a href="index.html">Home</a></li> 
		  <li><a href="coming.html">About</a></li>
		<li><a href="register.php">Registration</a></li>
<!--
		 <div id="event">
			  <li style="margin-top: 0;"><a href="events/index.html">Events</a></li> 
			  <li class="under-event"><a href="engage/index.html">Past editions</a></li> 
			  <li class="under-event"><a href="speakers/index.html">Speakers</a></li>
			  <li class="under-event"><a href="team/index.html">Team</a></li>  
  		</div>
-->
		<!--<li><a href="/engage/">Engage</a></li> 
		<li><a href="/speakers/">Speakers</a></li>
		<li><a href="/team/">Team</a></li> -->
		   
<!--		  <li><a href="contact/index.html">Contact</a></li>-->
              <!--li><a href="/events/">Events</a></li-->

		<li><a href="coming.html">Sponsors</a></li>

<!--		  <li><a href="blog/index.html">Blog</a></li>-->
                 
	 </div>
		<a href="javascript:void(0)" class="icon" id="hm">
			<div class="hamburger">
			  <div class="menui top-menu"></div>
			  <div class="menui mid-menu"></div>
			  <div class="menui bottom-menu"></div>
			</div>
		</a>

<script type="text/javascript">
	$(document).ready(function () {
  $(".icon").click(function () {
    $(".mobilenav").fadeToggle(500);
    $(".top-menu").toggleClass("top-animate");
    $(".mid-menu").toggleClass("mid-animate");
    $(".bottom-menu").toggleClass("bottom-animate");
  });
});

</script>
    
    <section>
		<div class="absolute">
          <div class="container">
              <div class="row">
              <div class="col-md-offset-1 col-md-11 reg">
                <h2 >REGISTRATION</h2>
              </div>
            </div>
              
            <div class="  text-custom" >
              <div class="col-md-offset-1 a2 col-md-11">
<!--
				  <h1 style="padding-top: 150px; ">REGISTRATIONS IS NOW  <span style="color:red;">CLOSED!</span></h1>
                  
-->
                  <form method="post">
                      
                       <div class="form-group">
                        <label for="name" style="font-family: 'Montserrat';">Name</label>
                        <input type="text" class="form-control" style="color:white;font-family: 'Montserrat';" name="name"  required id="school" aria-describedby="emailHelp" >
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="age" style="font-family: 'Montserrat';">Age</label>
                        <input type="number" name="age" value=" " class="form-control" style="color:white;font-family: 'Montserrat';"  required id="age" aria-describedby="emailHelp" >
                        
                      </div>
                      <div class="form-group">
                          <label for="gender" style="font-family: 'Montserrat';">Gender</label>
                      <label >
							<input name="gender" type="radio" checked value="male" />
							<span style="color:white;">Male</span>
						  </label>
					
				
						<label >
							<input name="gender" type="radio" Value="female" />
							<span style="color:white;">Female</span>
						  </label >
					
					
						<label >
							<input  name="gender" type="radio"  value="others" />
							<span style="color:white;">Others</span>
						  </label>
                      </div>
                      
                      <div class="form-group">
                        <label for="school" style="font-family: 'Montserrat';">School/College</label>
                        <input type="text" class="form-control" style="color:white;font-family: 'Montserrat';" name="school" placeholder="Enter your school/college name" required id="school" aria-describedby="emailHelp" >
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" style="color:white;font-family: 'Montserrat';" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      
                      <div class="form-group">
                        <label for="tel">Mobile</label>
                        <input type="tel" name="tel" class="form-control" id="mobile" style="color:white;font-family: 'Montserrat';" aria- placeholder="Enter your mobile number">
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="q1" style="font-family: 'Montserrat';">Why you want to attend TEDx?</label>
                          <textarea style="color:white;font-family: 'Montserrat';" name="q1" id="q1" cols="60" rows="3" maxlength="200" class="form-control"  required></textarea>
                        
                      </div>
                      <div class="form-group">
                        <label for="q2" style="font-family: 'Montserrat';">An example of what you have done for society?</label>
                          <textarea style="color:white;font-family: 'Montserrat';" name="q2" id="q2" cols="60" rows="3" maxlength="200" class="form-control"  required></textarea>
                        
                      </div>
                      <div class="form-group">
                        <label for="q3" style="font-family: 'Montserrat';">Favourite TED talk</label>
                          <textarea style="color:white;font-family: 'Montserrat';" name="q3" id="q3" cols="60" rows="3" maxlength="200" class="form-control" required></textarea>
                        
                      </div> 
                      
                      <div class="form-group">
                      <label for="shirt" >Tshirt preference (Extra Charges applicable)</label>
						<select style="font-family: 'Montserrat';color:grey;" name="shirt" id="" >
							<option value="S">S</option>
							<option value="M">M</option>
							<option value="XL">XL</option>
							<option value="XXL">XXL</option>
						</select>
                      </div>
                      
                      <div class="form-group">
                        <label for="q4" style="font-family: 'Montserrat';">What can you talk about?</label>
                          <textarea style="color:white;font-family: 'Montserrat';" name="q4" id="q4" cols="60" rows="3" maxlength="200" class="form-control" required></textarea>
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="q5" style="font-family: 'Montserrat';">What is one experience you would like to share with everybody at the event?</label>
                          <textarea style="color:white;font-family: 'Montserrat';" name="q5" id="q5" cols="60" rows="3" maxlength="200" class="form-control" required></textarea>
                        
                      </div>
                      
                      <div class="col a1" style="padding-bottom:20px;">
                      <button  class="btn" type="submit" name="submit">Submit</button>
                        </div>
                
			
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
		$tel = $_POST['tel'];
		
	
		$query= "INSERT INTO users (name,email,age,gender,school,q1,q2,q3,q4,q5,shirt,tel) VALUES ('$name','$email','$age','$gender','$school','$q1','$q2','$q3','$q4','$q5','$shirt','$tel');";
		
		$result= mysqli_query($con, $query);
		
		if(!$result){
			echo "Error! Vote Again!";
		}
		else{ 
			echo "Thanks for Registering! We will get back to you soon!";
		}
	}
?>
            </form>
              </div>
            </div>
              
              
              
          </div>
        </div>
            
			
		</div>
	</section>
    
    
   </script>
    <script>
    var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 15;

function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;
  
  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

  $('.cazz').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });

  window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

});

moveBackground();
    </script>
    
    <script type="text/javascript" src="static/js/rellax.min.js"></script>
    <script>
    	var rellax = new Rellax('.rellax', {
        // center: true
      });
    	$("#event").hover(function(){
	$(".under-event").show();
}, function() {
	$(".under-event").hide();
});
    </script>
    <script>
$(document).ready(function() {
//Preloader
$(window).on("load", function() {
preloaderFadeOutTime = 500;
function hidePreloader() {
var preloader = $('.loader');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});	 
});
        
        
        
</script>
	
        
   
</body>
</html>