<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: login/error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    
}
?> 
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Putra Speacialist Hospital</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>
	
<body>
<div class="main" id="home">
<!-- banner -->
		<div class="header_agileinfo">
						<div class="w3_agileits_header_text">
							<ul class="top_agile_w3l_info_icons">
									<li><i class="fa fa-home" aria-hidden="true"></i>Putra Specialist Hospital</li>
									<li class="second"><i class="fa fa-phone" aria-hidden="true"></i>+606 - 283 5888</li>
									
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a>Corperate_Strategy@psh-group.com</a></li>
								</ul>

						</div>
						<div class="dropdown" style="float: right;">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><span class='glyphicon glyphicon-user' aria-hidden='true'></span> <?php echo $email . " ($first_name)"; ?>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#logout" data-toggle="modal"><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span> Logout</a></li>
                 </ul>
</div>
						<div class="agileinfo_social_icons">
							<ul class="agileits_social_list">
								<li><a href="https://www.facebook.com/pshmsb/?rf=548865978506133" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								
							</ul>
						</div>
						<div class="clearfix"> </div>
			</div>				

		<div class="header-bottom">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<h1><a class="navbar-brand" href="index.html"><span>H</span>ealth <i class="fa fa-plus" aria-hidden="true"></i> <p>Putra Specialist Hospital</p></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item" id="m_nav_item_1"> <a href="Home.php" class="menu__link"> Home </a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="about.php" class="menu__link"> About Us </a> </li>		
						<li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="Booking.php" class="menu__link">Appointment  </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="department.php" class="menu__link">Department </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_5"> <a href="gallery.php" class="menu__link">Gallery</a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6 dropdown"> <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown"> Service <b class="caret"></b></a> 

							<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="Room.php">Room</a></li>
									<li><a href="Specialists.php">Medical Specialist</a></li>
									<li><a href="admission.php">Admission & Discharge</a></li>
									<li><a href="insurance.php">Insurance</a></li>
							</ul>

						</li>
						<li class="m_nav_item menu__item menu__item--current" id="moble_nav_item_6"> <a href="contact1.php" class="menu__link"> Feedback </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="chat/index.php" class="menu__link"> Chat </a> </li>
					</ul>
				</nav>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>
</div>
<!-- banner -->
<!-- banner1 -->
	<div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>Feedback</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
	<div class="banner-bottom" id="about">
		<div class="container">
			<h2 class="w3_heade_tittle_agile">Feedback</h2>
		    <p class="sub_t_agileits">Feel Free To Give Your Feedback</p>

           <div class="contact-top-agileits">
               <div class="col-md-4 contact-grid ">
					<div class="contact-grid1 agileits-w3layouts">
						<i class="fa fa-location-arrow"></i>
						<div class="con-w3l-info">
						   <h4>Address </h4>
						  <p>Putra Specialist Hospital<span>Melaka.	</span></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid2 w3">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<div class="con-w3l-info">
						  <h4>Call Us</h4>
						   <p>+606 - 283 5888</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="contact-grid3 w3l">
						<i class="fa fa-envelope"></i>
						<div class="con-w3l-info">
						  <h4>Email</h4>
						  <p>Corperate_Strategy@psh_group.com</p></div>
						  <div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div>
			<div class="contact-form-aits">
				 <form action="contact.php" method="post">
					<input type="text" class="margin-right" name="Name" placeholder="Name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="text" class="margin-right" name="PhoneNumber" placeholder="Phone Number" required="">
					<input type="text" name="Subject" placeholder="Subject" required="">
					<textarea name="message" placeholder="Message" required=""></textarea>
					<div class="send-button agileits w3layouts">
						<button class="btn btn-primary">SEND MESSAGE</button>
					</div>
				  </form>
				  <ul class="agileits_social_list two">
				        <li class="fallow"> Follow Us :</li>
								<li><a href="https://www.facebook.com/pshmsb/?rf=548865978506133" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								
							</ul>
				         
			   </div>
	    </div>
	</div>

<!--<div class="map_agile">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172" style="border:0"></iframe>


</div>-->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<!--<h4>Subscribe to <span>Newsletter</span></h4>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Enter Your Email..." required="">
				<input type="submit" value="Send">-->
			</form>
			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">
					<div class="col-md-4 w3agile_footer_grid">
						<h3>About Us</h3>
						<p>Centrally located in the heart of Melaka, Putra Specialist Hospital is Melaka’s premier hospital, a center of excellence in specialty medicine, and a world leader in medical tourism. Putra Specialist Hospital Melaka Sdn. Bhd, started its operations as The Southern Hospital in 1995.</span></p>
					</div>
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Contact Info</h3>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>Putra Specialist Hospital <span>Melaka.</span></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">Corperate_Strategy@psh-group.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+606 - 283 5888</li>
						</ul>
					</div>
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Navigation</h3>
						<ul>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="gallery.html">Department</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="appointment.html">Appointment</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="about.html">About</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_copy_right_social">
				<div class="col-md-6 agileits_w3layouts_copy_right">
					<p>&copy; 2018 Putra Specialist Hospital. All rights reserved | Design by Fazrul</p>
				</div>
				<div class="col-md-6 w3_agile_copy_right">
					<ul class="agileits_social_list">
								<li><a href="https://www.facebook.com/pshmsb/?rf=548865978506133" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								
							</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 <!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Health Plus
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/g9.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->

<!--Logout Modal -->
            <div id="logout" class="modal fade" role="dialog">
                <div class="modal-dialog modal-md">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Logout</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                            <p>
                                <div class="alert alert-danger">Are you Sure you want to logout <strong><?php echo $_SESSION['email']; ?>?</strong></p>
                            </div>
                            <div class="modal-footer">
                                <a href="login/index.php"><button type="button" class="btn btn-danger">YES </button></a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
			<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>