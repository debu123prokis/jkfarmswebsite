<?php

	include "connection.php";

// define variables and set to empty values

	$email="";

	if ($_SERVER["REQUEST_METHOD"]=="POST") {

	  $email=test_input($_POST["email"]);
	 
	 }

	function test_input($data) {
	  $data=trim($data);
	  $data=stripslashes($data);
	  $data=htmlspecialchars($data);
	  return $data;
	}

	$query=mysqli_query($conn,"INSERT INTO `newsletter`(`email`) VALUES ('$email')");

//	if(isset($_POST['submit'])){

		if($query){

			echo "";

		}else{

			echo "Insertion Error!!! ".die(mysqli_error());

		}

?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="style.css">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">

	<header id="masthead" class="site-header">
		
		<div class="flexupper-strip">
			<img class="phone-img" src="images/phone.png">
			<div><a href="tel:+919942362009">+91 9942362009</a></div>
			<div>[Any poultry farm registration sticker]</div>
			<div><a target="_blank" href="https://wa.me/+919976579977/"><img src="images/whatsapplogo1.png" /></a></div>
			<ul class="app-logo">
				<li><img src="images/apple_img.png" /></li>
				<li><img src="images/android.png" /></li>
			</ul>
		</div>
		
		<div class="contain">
		   	
		<div class="top-header">
		
			<div class="row">
				
			</div>
			
		</div>
	</div>
	<div class="top-border">
		
	</div>
		<div id="middle-header">
			<div class="logo1"></div>
			<div class="flexsite-branding">
				<div><a href="#">Choose Location</a></div>
				<div><a href="#">Cart</a></div>
				<div><a href="#">Login</a></div>
			</div> <!-- #flexsite-branding -->
		</div> <!-- #middle-header -->

	</header><!-- #masthead -->
		<div class="navigation-class">
			<nav id="site-navigation" class="main-navigation">
				<div><a href="#">Home</a></div>
				<div><a href="#">About Us</a></div>
				<div><a href="#">Our Story</a></div>
				<div><a href="#">Our Product Store</a></div>
				<div><a href="#">Blog</a></div>
				<div><a href="#">Contact Us</a></div>
			</nav><!-- #site-navigation -->
		</div>	

	<video class="big-banner" src="videos/file.mp4" loop autoplay>
		
	</video>
    
<h2 class="text-center">What is so special about us?</h2>
	<section class="special-container">

		<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="images/dummyimage.jpg" alt="Card image cap">
	  		<div class="card-body">
	    	<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
  			</div>
		</div>
		<div class="card" style="width: 18rem;">
			 <img class="card-img-top" src="images/dummyimage.jpg" alt="Card image cap">
			 <div class="card-body">
			 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
		</div>
</div>
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="images/dummyimage.jpg" alt="Card image cap">
		  <div class="card-body">
		  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
	    </div>
		</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/dummyimage.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/dummyimage.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
  </div>
</div>
	</section>

<section class="image-gallery-header bg-secondary">
	<h2 class="text-center text-white">Some of Our Chicken gallery</h2>
</section>
<section>
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/chickenpic1.png" alt="Dummy Chicken Pic 1" height="500">
      <div class="carousel-caption">
        <h3 class="text-danger">Dummy Chicken Pic 1</h3>
        <p class="text-danger text-center">Dummy Text</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chickenpic2.png" alt="Dummy Chicken Pic 2" height="500">
      <div class="carousel-caption">
        <h3 class="text-danger">Dummy Chicken Pic 2</h3>
        <p class="text-danger text-center">Dummy Text</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chickenpic3.png" alt="Dummy Chicken Pic 3" height="500">
      <div class="carousel-caption">
        <h3 class="text-danger">Dummy Chicken Pic 3</h3>
        <p class="text-danger text-center">Dummy Text</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chickenpic4.png" alt="Dummy Chicken Pic 4" height="500">
      <div class="carousel-caption">
        <h3 class="text-danger">Dummy Chicken Pic 4</h3>
        <p class="text-danger text-center">Dummy Text</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>
<section class="ecomm-section">
	<h2 class="text-center">Our Products</h2>
	<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="images/ecomprod1.jpg" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">Turkey</h3>
      <p class="card-text">This is a wider card with supporting.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/ecomprod2.jpg" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">Original Siruvedai, Peruvedai</h3>
      <p class="card-text">This card has supporting text.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/ecomprod3.jpg" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title">Kadaknath</h3>
      <p class="card-text">This is a wider card with supporting text.</p>
    </div>
  </div>
</div>
</section>

<footer class="top-footer">
	<div class="column1">
		<div class="logo2">Logo</div>
		<div class="hours">
			<h4>Opening Hours:</h4><br/>
			<div class="business-hours">
				<p>MON-SAT: [mention the time]</p><br/>
				<p>SUN: [mention the time]</p>
			</div>
		</div>
	</div>
	<div class="column2">
		<div class=""><a href="#">Why JK Farms</a></div><br/>
		<div class=""><a href="#">About Us</a></div><br/>
		<div class=""><a href="#">We are hiring</a></div><br/>
		<div class=""><a href="#">Terms and Conditions</a></div><br/>
		<div class=""><a href="#">Privacy Policy</a></div><br/>
		<div class=""><a href="#">FAQs</a></div>
	</div>
	<div class="column3">
		<div><h2>Contact Us:</h2></div>
		<div><b>Call us:</b> <a href="tel:+919976579977">+919976579977</a></div><br/>
		<div><a href="tel:+919942362009">+919942362009</a></div><br/>
		<div><a href="tel:+918610109434">+918610109434</a></div><br/>
		<div><b>Mail:</b> <a href="mailto:Info@jkgroups.co.in">Info@jkgroups.co.in</a></div><br/><br/>
		<div class="chat">
			<!--Start of Tawk.to Script-->
			<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5f806dc74704467e89f60f72/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
			</script>
			<!--End of Tawk.to Script-->
		</div>
	</div>
	<div class="column4">
		<div class="gmap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15699.069461632327!2d78.0041838245496!3d10.360476981672416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00aa307bcfec59%3A0xe33b279892b05292!2sKalathu%20Kottam%2C%20Balakrishnapuram%2C%20Tamil%20Nadu%20624005!5e0!3m2!1sen!2sin!4v1602160073173!5m2!1sen!2sin" width="400" height="190" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div><br/>
		<div class="newsletter">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<input type="email" name="email" placeholder="Email for newsletter"> <input id="submitlttr" type="submit" value="Subscribe">
			</form>


		</div><br/><br/>
		<ul class="social-buttons">
			<li><a href="#"><img src="images/facebook.png"></a></li>
			<li><a href="#"><img src="images/linkedin.png"></a></li>
			<li><a href="#"><img src="images/twitter.png"></a></li>
			<li><a href="#"><img src="images/youtube.png"></a></li>
		</ul>
	</div>
</footer>

<footer class="bottom-footer">
	Copyright © 2019-2020. JK Farms Pvt Ltd . All Rights Reserved | <a href="#">Privacy Policy.</a>
</footer>

</div><!-- #container-fluid class ends -->
</body>
</html>