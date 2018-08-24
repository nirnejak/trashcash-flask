<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


	<meta name="description" content="trashhcashh">
	<meta name="author" content="Jitendra Nirnejak">

	<title>TrashhCashh</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="static/css/animate.css">

	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	<link rel="stylesheet" type="text/css" href="static/css/styleProfile.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<script src="static/js/scroll.js" type="text/javascript" charset="utf-8"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script type="text/javascript" src="static/js/jquery.inview.min.js"></script>
              
</head>

<body>
	
	<section class="preloader bg-primary text-success" style="min-height: 100vh; padding-top: 0px; position: absolute; top: 0; left:0; z-index: 999;">
		<h1 style="letter-spacing: 5px; font-size: 31px;">LOADING GOODNESS</h1>
	    <div style="font-size: 100px; display: flex;">
	        <div class="dot1">.</div>
	        <div class="dot2">.</div>
	        <div class="dot3">.</div>
	        <div class="dot4">.</div>
	    </div>
	</section>

	<?php
	 	include('includes/_navbarHome.html');
	?>
	
	<section id="home" class="mainSection bg-primary text-center text-light">
		<div class="col-lg-4">
		    <img src="static/img/logo.png" class="animated fadeInUp" style="width: 50%; height: auto;">
		    <br><br>
		</div>
		<strong class="title container animated fadeInUp text-center">TRASHHCASHH</strong>		
		<p class="lead text-white animated fadeInUp mainSectionLinks" style="letter-spacing: 2px;">
			<strong>
			<a href="javascript:void(0);" class="text-white" onclick="getToDivision('home');">HOME</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-white" onclick="getToDivision('what');">WHAT IS TRASHHCASHH</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-white" onclick="getToDivision('how');">HOW IT WORKS</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-white" onclick="getToDivision('bin');">BINS</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-white" onclick="getToDivision('why');">WHY US</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-white" onclick="getToDivision('about');">ABOUT US</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-white" onclick="getToDivision('team');">TEAM</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-white" onclick="getToDivision('contact');">CONTACT US</a>
			</strong>
		</p>
	</section>
	<section id="what">
		<div class="container">
			<br>
			<h2>What is TrashhCashh?</h2>
			<hr style="width:35%; background: #18BC9C; height: 1px;">
			<br>
			<p class="lead">
				<strong>TRASHHCASHH</strong> is a private firm and our main aim is to solve one of the biggest problem prevailing in our country that is Waste Management. The hasty growth of population, Disorganization of cities and lack of awareness among people has become a major part which needs to be solved. To maintain the waste management of a country whose population is 1.5bn and counting you need a plan that can be executed. Trashhcashh helps you not only to generate money from the waste but it also helps you get rid of it.
				<br><br>
				Following the footsteps of our Honourable  PM Shri Narendra Modi we pledge to eradicate the poor waste management in our country. India is ranked 155 out of 178 countries as of 2014, So it’s time to wake up!  And take India higher.
				<br><br>
				So join us in our journey and let’s make India Green and Healthy!
			</p>
			<br><br><br>
		</div>
	</section>

	<section class="pw-1">
		<p class="lead join">
			<div class="form-group col-lg-6">
				<form action="addRecord.php" method="post" id="form1">
					<div class="form-group col-lg-12 d-flex justify-content-center align-self-center">
						<input class="form-control" type="text" name="contactNo" id="contactNo1" placeholder="Enter Contact No to Stay Updated" required>
						<br>&nbsp;&nbsp;
						<input class="btn btn-success btn-lg" type="button" value="Join" onclick="addContact1()">
					</div>
				</form>
			</div>
		</p>
	</section>

	<section id="how">
		<div class="container">
			<br>
			<h2>How it works?</h2>
			<hr style="width:35%; background: #18BC9C; height: 1px;">
			<br>
			<div class="row">
				<div class="col-lg-8 d-flex justify-content-center align-items-center text-center" style="margin-bottom: 31px;">
					<img src="static/img/blueBin.png" width="50%">
				</div>
				<div class="col-lg-4">
					<div class="list-group text-left">
						<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start text-primary bg-light">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">1. Registration</h5>
								<small class="text-danger">Coming Soon</small>
							</div>
							<p class="mb-1">You can register with us by providing your basic details i.e. Name, Age, Contact no. and Location, and click REGISTER! 
							</p>
							<small>Now you can Login with your ID.</small>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start text-primary bg-light">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">2. Get yourself a bin</h5>
								<small></small>
							</div>
							<p class="mb-1">After Registring  with Trashhcashh, people will be provided with an universal size bin which will be the home for the waste produced.</p>
							<small>You can place request for bin from your account</small>
						</a>
						<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start text-primary bg-light">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">3. Sell Trash</h5>
								<small></small>
							</div>
							<p class="mb-1">Selling Trashh has never been easy. You can go through our Rate list to find the price of different waste products and earn money!</p>
							<small class="text-success">So let’s start.</small>
						</a>
					</div>
				</div>
			</div>
			<br><br><br>
		</div>
	</section>

	<section class="pw-2"></section>

	<section id="bin">
		<div class="container">
			<br>
			<h2>What are Bins?</h2>
			<hr style="width:35%; background: #18BC9C; height: 1px;">
			<br>
			<p class="lead">
				Bins are the TrashhCashh provided one time product in 1 year. Bins are for two mainly different types of waste biodegradable and non-biodegradable waste generated in our home.
			</p>
			<h4>What is the use of bins?</h4>
			<p class="lead">
				The basic use of bins are to segregate the waste generated from each and every household from 0 level, thus causing the prevention of time, money and human resource.
			<div class="row">
				<div class="col-lg-6">
					<div class="list-group text-left">
						<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start text-white bg-info">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">What’s the Blue Bin for ?</h5>
							</div>
							<small class="text-white">The blue bin is for the collection of dry waste which includes waste which is non-biodegradables or dry recyclable.</small>
							<p class="mb-1">
								Dry recyclables is the modern description of waste that is free from contaminants such as construction, food or garden waste. Leaving clean materials such as paper, cardboard, plastic bottles, drinks cans and glass bottles to be sorted and recycled. All sorted materials will be sent to approved re-processors in the TrashhCashh for recycling into fresh new and recycled products.
								<br>
								Example: Cans, Cardboard, Paper, Glass, Plastic</p>
							<small></small>
						</a>
					</div>
					<br>
				</div>
				<div class="col-lg-6">
					<div class="list-group text-left">
						<a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start text-white bg-success">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">What’s the Green Bin for?</h5>
							</div>
							<small class="text-white">The green bin is for the collection of wet waste which includes food waste.</small>
							<p class="mb-1">
								Food waste or food loss is food that is discarded or lost uneaten. The causes of food waste or loss are numerous, and occur at the stages of production, processing, retailing and consumption. Global food loss and waste amounts to between one-third and one-half of all food produced.
								<br>
								Example: Fruits and vegetables, Meat, Fish & Bones, Plate Scrapings, Rice, Pasta, and Bread, Tea bags and coffee grounds, Used tissues and paper towels.</p>
							<small></small>
						</a>
					</div>
				</div>
			</div>
			<br><br><br>
		</div>
	</section>
	
	<section class="pw-3"></section>

	<section id="why" class="bg-light">
		<div class="container" style="overflow: hidden;">
			<br>
			<h2>Why Choose Us?</h2>
			<hr style="width:35%; background: #18BC9C; height: 1px;">
			<div id="why1">Making a healthy India</div>
			<div id="why2">Reduce Land Fillings</div>
			<div id="why3">You can earn by selling your trash</div>
			<div id="why4">Easy doorstep services</div>
			<br><br><br>
		</div>
	</section>


	<section class="pw-4"></section>


	<section id="about">
		<div class="container" style="overflow: hidden;">
			<br>
			<h2>About Us</h2>
			<hr style="width:35%; background: #18BC9C; height: 1px;">
			<p class="lead">
				<strong>TRASHHCASHH</strong> is a socio-environmental enterprise that believes in a circular economy, where all waste is converted to resources. We provide convenient, affordable and genuine recycling solutions to residents of residential communities and corporate offices in Bhilai. We connect the environmentally aware members of our community to the local manufacturing industry that use recyclable items as raw materials for production; collecting all varieties of Paper, Cardboard and Plastic (PET). 
				<br>
				Urban society generates municipal solid waste even faster than the rate of urbanization. And while we admit, most people are concerned, they remain unaware of what steps need to be taken to ensure they recycle their waste. 
			</p>
			<br><br><br>
		</div>
	</section>
	<!--
	<section id="developer" style="background: url('static/img/embarkBG.png') #20243d; background-size: cover; background-position: center; background-repeat: no-repeat;">
	    <br><br>
	    <div class="container text-center text-light">
	        <p class="lead" style="font-family: gotham rounded;">Designed and Developed by:</p>
	        <h1 style="font-family: archive; font-size: 8vw;">EMBARK</h1>
        </div>
        <p class="text-light">+91 7869290297, +91 9407940408</p>
        <br><br><br>
	</section>
	-->
	<section id="team" class="bg-light">
		<div class="container">
			<br>
			<h2>Team</h2>
			<hr style="width:35%; background: #18BC9C; height: 1px;">
			<?php
				include('includes/_profile.html');
			?>
			<br>
	</section>

	<section id="contact" class="bg-primary">
		<div class="container">
			<br>
			<a name="contactUs"></a>
			<h2 class="text-light">Contact Us</h2>
			<p class="lead text-light">
				+91 8770054110, +91 8770032064, +91 7000776237
				<br>
				info@trashhcashh.com
			</p>
			<div class="social">
		        <a href="https://www.facebook.com/Trashhcashh-1754100008229042/" target="_blank"><i class="fab fa-facebook-f"></i></a>
		        <a href="https://www.instagram.com/trashhcashh/" target="_blank"><i class="fab fa-instagram"></i></a>
		        <a href="https://twitter.com/TrashhC"><i class="fab fa-twitter"></i></a>
		        <a href="https://www.linkedin.com/in/trashh-cashh-504770159/"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<br>
			<center>
				<form action="addRecord.php" method="post" id="form2">
					<div class="form-group col-lg-6 d-flex justify-content-center align-self-center">
						<input class="form-control" type="text" name="contactNo" id="contactNo2" placeholder="Enter Contact No to Stay Updated" required>
						<br>&nbsp;&nbsp;
						<input class="btn btn-success btn-lg" type="button" value="Join" onclick="addContact2()">
					</div>
				</form>
			</center>
			<br><br>
		</div>
	</section>
	<footer class="text-success">
		<p>© Copyright 2018 | TrashhCashh All Rights Reserved</p>
		<p>Designed and Developed by : <a href="http://nirnejak.com">Jitendra Nirnejak</a></p>
	</footer>
	
	<script src="static/js/scripts.js"></script>

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>