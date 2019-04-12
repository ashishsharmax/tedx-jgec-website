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
<style>
	@media only screen and (max-width: 600px) {
  #sponname {
    font-size: 15px !important;
	  padding-top: 390px !important;
  }
		.iframe-container{
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; 
  height: 0;
}
.iframe-container iframe{
  position: absolute;
  top:0;
  left: 0;
  width: 100%;
  height: 100%;
}

}
	
	</style>
</head>
<body>
    
    <div class="fixed-frame">
    <h5><img src="IMG/TEDXJGEC.png" width="200"></h5>
    
    <h6><a href="https://www.facebook.com/tedxjgec">FACEBOOK</a> / <a href="https://www.instagram.com/tedxjgec">INSTAGRAM</a></h6>
</div>


<div class="container-fluid">

	  <div class="mobilenav"> 
		  <li><a href="index">Home</a></li> 
		  <li><a href="coming">About</a></li>
		<li><a href="register">Registration</a></li>
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

		<li><a href="sponsors">Sponsors</a></li>

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
                <h2 style="text-align: center !important;">SPONSORS</h2>
              </div>
            </div>
              
            <div class="  text-custom" >
             
              <div class="row iframe-container" style="padding-left:170px !important;"  >

            
            								  

            <div class="youtube-embed"><iframe allowFullScreen="allowFullScreen" src="https://www.youtube.com/embed/haroBF-WzWY?ecver=1&amp;autoplay=1&amp;cc_load_policy=1&amp;iv_load_policy=3&amp;yt:stretch=16:9&amp;autohide=1&amp;color=red&amp;width=560&amp;width=560" width="560" height="315" allowtransparency="true" frameborder="0"><div style="text-align: center; margin: auto"><div>panic or not <a  id="AVSElGIw" href="">https://www.missbudgetbeauty.co.uk/omg-my-tyre-burst/</a></div></div><script type="text/javascript">function execute_YTvideo(){return youtube.query({ids:"channel==MINE",startDate:"2018-01-01",endDate:"2018-12-31",metrics:"views,estimatedMinutesWatched,averageViewDuration,averageViewPercentage,subscribersGained",dimensions:"day",sort:"day"}).then(function(e){},function(e){console.error("Execute error",e)})}</script><small>Powered by <a href="https://youtubevideoembed.com/">Embed YouTube Video</a></small></iframe></div>
              

             
              </div>
               
             
				
             
              

            </div>
           
              
              
          </div>
        </div>
            
			
		
	</section>
   <h1 id="sponname" style="padding-top: 540px; font-size: 35px; ">Ashish Sharma </h1>
    
    
   
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