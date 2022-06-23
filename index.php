<?php include('server.php');
if(isset($_SESSION["Username"])){
	$username=$_SESSION["Username"];
	if ($_SESSION["Usertype"]==1) {
		header("location: finderProfile.php");
	}
	else{
		header("location: employerProfile.php");
	}
}
else{
    $username="";
	//header("location: index.php");
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Chore Finder</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="awesome/css/fontawesome-all.min.css">

<style>
	body{padding-top: 3%;margin: 0;}
	.header1{background-color: lightblue;padding-left: 1%;}
	.header2{padding:20px 40px 20px 40px;color:#fff;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:lightblue}
</style>

</head>
<body>

<!--Navbar menu-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
	<div class="container">
		<div class="navber-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">Chore Finder</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<a href="loginReg.php" class="btn btn-info navbar-btn navbar-right">Register</a>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="#how">How it works</a></li>
				<li><a href="#faq">FAQ</a></li>
				<li><a href="loginReg.php">Login</a></li>
			</ul>
		</div>		
	</div>	
</nav>
<!--End Navbar menu-->



<!--Header and slider-->

<!--Header-->
<div class="row header1">
	<div class="col-lg-4">
		<div class="jumbotron">
			<div class="container text-center">
				<img src=image/22.jpg width="200" height="200">
				<h1>Chore Finder</h1>
				<p>No work is big or small all that matters is fulfilling our dreams</p>
				<p></p>
				<div class="btn-group">
					<a href="#how" type="button" class="btn btn-info">How it works</a>
					<a href="#faq" type="button" class="btn btn-default">FAQ</a>
					<a href="#category" type="button" class="btn btn-info">Popular</a>
				</div>
			</div>
		</div>	
	</div>
<!--End Header-->

<!--slider-->
	<div class="col-lg-8">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="image/workhard.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <h3>Work</h3>
		        <p>Work hard to be successful.</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="image/time.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <h3>Time</h3>
		        <p>Do not waste your time.</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="image/chores.jpg" alt="Flower">
		      <div class="carousel-caption">
		        <h3>Believe</h3>
		        <p>Believe in yourself.</p>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!--End slider-->
<!--End Header and slider-->


<!--Individual register tip-->
<div style="background:pink">
<div class="container text-center" style="padding:5%;">
	<div class="row">
		<div class="col-lg-6 card" style="padding:40px 80px 40px 80px;">
			<h1>Need chores done?</h1>
			<p>It's easy. Simply post a chore you need completed and receive personnel who can complete the chore. Whatever your needs, there will be a person to get it done: from cooking, gardening, grocery shopping, babysitting, petsitting (and a whole lot more). It is the simplest and safest way to get work done online.</p>
			<p></p>
			<a href="loginReg.php" class="btn btn-success btn-lg">Get Started</a>
		</div>
		<div class="col-lg-6" style="padding:40px 80px 40px 80px;margin-top:15px;box-shadow: 4px 4px 2px 5px rgba(0, 0, 0, 0.2), 0 6px 0px 0 rgba(0, 0, 0, 0.19);background:white">
			<h1>Looking for simple jobs?</h1>
			<p>If you are looking for a way to earn money, then do not hesitate to join our platform. It is easy to use and payment is secured. It is a great platform to those people who are looking for some pocket money or pay their dues. So do not miss the chance to explore the job posts and make some money.</p>
			<p></p>
			<a href="loginReg.php" class="btn btn-primary btn-lg">Get Started</a>
		</div>
	</div>
</div>
</div>
<!--End Individual register tip-->


<!--Popular Categories-->
<div class="container text-center" style="padding:4%;" id="category">
	<h1 class="card header2" style="background:green">Popular Chores</h1>
	<div class="row">
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-cutlery"></span>
				<h3>Chef</h3></a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-ok"></span>
				<h3>Professional works</h3></a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-heart"></span>
				<h3>Babysitting</h3></a>
			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-home"></span>
				<h3>Professional Home decorator</h3></a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-user"></span>
				<h3>PetSitting</h3></a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card" style="padding:20px 40px 20px 40px;margin:20px;">
				<a href="loginReg.php"><span class="glyphicon glyphicon-pencil"></span>
				<h3>Tutor</h3></a>
			</div>
		</div>
	</div>
</div>
<!--End Popular Categories-->

<!--How it works-->
<div style="background:#cce5ff">
<div class="container text-center" style="padding:4%;" id="how">
	<h1 class="card header2" style="background:green">How it works</h1>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Post Chores For Free</h3>
			<p>It's always free to post your chore. You’ll automatically begin to receive bids from people who can do it. Also, you can browse through the talent available on our site, and contact them by the contact information.</p>
		</div>
		<div class="col-lg-6">
			<img src="image/yes.jpg">
		</div>
	</div>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Feel Free To Talk</h3>
			<p>It is easier to talk with the your employee here. So before you hire any person feel free to talk with them. Tell them what you need and get the chore done in the shortest possible time.</p>
		</div>
		<div class="col-lg-6">
			<img src="image/img03.jpg">
		</div>
	</div>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Build An Employer Profile</h3>
			<p>If you have a lot of works to be done or run a house that needs some employees in a daily basis, this is the perfect place for you. Build your employer profile today and start hiring.</p>
		</div>
		<div class="col-lg-6">
			<img src="image/img04.jpg">
		</div>
	</div>
</div>
</div>
<!--End How it works-->


<!--FAQ-->
<div class="container text-center" style="padding:4%;" id="faq">
  <h1 class="card header2" style="background:Green">FAQ</h1>
  <div class="btn-group-vertical">
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo" style="width:1062px"><h3>What is Chore Finder?</h3></button>
  <div id="demo" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;">
  		<h4>Chore Finder is an online outsourcing platform that puts employers in contact with a global network of people worth doing the required chore. Any member can post a chore and choose from skilled users who offer bid proposals with rate for completing the work. It's a mutually beneficial arrangement. <br>Employers can have their pick of thousands of users who have the exact skills needed to get the chore done, without undertaking the expense and commitment of hiring full-time employees in person. <br>Users can tap into a readily available source of work opportunities from employers who are specifically seeking them out.</h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo1" style="width:1062px"><h3>I am an Employer, how will this site work for me?</h3></button>
  <div id="demo1" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;">
  		<h4>You can gain a competitive advantage over your competition by tapping into a chore on demand. <br>If you are a small business and can't afford to hire a full-time staff, don't fret! The power of employee is available for everyone!This is the place for you! <br>Thousands of skilled workers are ready to start working right now! All you need to do is post a Chore!</h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo2" style="width:1062px"><h3>I am a Jobseeker, how will this site work for me?</h3></button>
  <div id="demo2" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;">
  		<h4>With chorefinder, you can work at your office and tap into a chore that needs to be done at home while you are away, the ultimate opportunity in job flexibility! <br>Work on what you want, when you want and where you want to! The lifestyle of a student is taking off. By working for chores online, you can greatly increase your pocket money so you can pay for college. <br>To start, all you need to do is sign up and start bidding. It's FREE!</h4>
  	</div>
  </div>
  <button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-target="#demo3" style="width:1062px"><h3>Do I have to pay to register?</h3></button>
  <div id="demo3" class="collapse">
  	<div class="card" style="padding:20px 40px 20px 40px;">
  		<h4>No. Chore Finder is absolutely free to register and explore the posted job offers, jobseekers and employers.</h4>
  	</div>
  </div>
  </div>
</div>
<div class="text-center" style="padding:4%;background:#222;color:#fff;margin-top:20px;">
	<div class="row">
			<div class="col-lg-3">
			<h3>Quick Links</h3>
			<p><a href="index.php">Home</a></p>
			<p><a href="#how">How it works</a></p>
			<p><a href="#faq">FAQ</a></p>
			<p><a href="loginReg.php">Login</a></p>
			<p><a href="loginReg.php">Register</a></p>
		</div>
		<div class="col-lg-3">
			<h3>About Us</h3>
			<p>Vardhaman College of Engineering</p>
			<p>123-456-789</p>
		</div>
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
			<h3>Social Contact</h3>
			<p style="font-size:20px;color:#3B579D;"><i class="fab fa-facebook-square"> Facebook</i></p>
			<p style="font-size:20px;color:#D34438;"><i class="fab fa-google-plus-square"> Google</i></p>
			<p style="font-size:20px;color:#2CAAE1;"><i class="fab fa-twitter-square"> Twitter</i></p>
			<p style="font-size:20px;color:#0274B3;"><i class="fab fa-linkedin"> Linkedin</i></p>
		</div>
	</div>
</div>
<!--End Footer-->


<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>