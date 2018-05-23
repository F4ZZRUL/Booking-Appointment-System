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
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/ziehharmonika.css" rel="stylesheet" type="text/css">
<link href="css/team.css" rel="stylesheet" type="text/css">
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
						<li class="m_nav_item menu__item menu__item--current" id="moble_nav_item_2"> <a href="about.php" class="menu__link"> About Us </a> </li>		
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
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="contact1.php" class="menu__link"> Feedback </a> </li>
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
				<li>About</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->


<!-- //banner -->

<!-- about -->
	<div class="about" id="about">
		<div class="container">
				<h2 class="w3_heade_tittle_agile">Welcome to Putra Specialist Hospital</h2>
			<p class="sub_t_agileits"></p>
			
			<p class="ab">Centrally located in the heart of Melaka, Putra Specialist Hospital is Melaka’s premier hospital, a center of excellence in specialty medicine, and a world leader in medical tourism. Putra Specialist Hospital Melaka Sdn. Bhd, started its operations as The Southern Hospital in 1995.</p>

			 <div class="about-w3lsrow"> 
				
				<div class="col-md-6 w3about-img"> 
				    <img src="images/slide1.jpg" alt=" " class="img-responsive">
				</div> 
				<div class="col-md-6 col-sm-7 w3about-img"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">We Care About Your Health</h5>
						<p>Putra offers its patients one-stop medical care in Malaysia. From check-ups to cardiac surgery, the Hospital deliver the three things that matter most: high quality, affordable healthcare and with no waiting.</p>

						<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
						  <div class="read"><a href="single.html" class="hvr-rectangle-in">Read More</a></div>-->
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
</div>
<!-- /about-bottom -->
<!-- /girds_agileits -->
	<!--<div class="Department_girds_agileits">
		<div class="agile_team_grid">	
	
					<div class="col-md-3 w3ls_banner_bottom_grid">
						<img src="images/g1.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4>Department 1</h4>
							<ul class="social_agileinfo">
								<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 w3ls_banner_bottom_grid">
						<img src="images/g2.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4>Department 2</h4>
							<ul class="social_agileinfo">
								<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-3 w3ls_banner_bottom_grid hvr-shutter-in-horizontal">
						<img src="images/g3.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4>Department 3</h4>
							<ul class="social_agileinfo">
								<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>


					<div class="col-md-3 w3ls_banner_bottom_grid">
						<img src="images/g4.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4>Department 4</h4>
							<ul class="social_agileinfo">
								<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>

		</div>
		<div class="clearfix"></div>
	</div>
<!-- //girds_agileits -->

	<!--<div class="agile_menu" id="menu">
		<div class="container">
		<h3 class="w3_heade_tittle_agile">Our Departments</h3>
		<p class="sub_t_agileits"></p>
		<div class="menu_w3ls_agile_top_section">
			<div class="ziehharmonika">
			<h3>CARDIOLOGY</h3>
			<div>
				  <div class="w3_agile_recipe-grid">
                                  
								<div class="col-md-6 col-sm-6 tab-image">
									<img src="images/D1.jpg" alt="Medicinal">
								</div>
								<div class="col-md-6 col-sm-6 tab-info">
								<h4>Putra Specialist Hospital</h4>
									<p>At Putra Specialist Hospital, we offer comprehensive care for patients with cardiovascular conditions. Our expert care begins with routine heart screenings and continues through all levels of treatment options and post-treatment follow-up. Our centre also provides a wide variety of investigations available, invasive and non-invasive to determine whether one has a heart disease, type of disease and severity if present in order for the cardiologist to determine the most appropriate treatment. </p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div>
								</div>
								<div class="clearfix"></div>
					    </div>

			</div>
			<h3>ANAESTHESIOLOGY</h3>
			<div>
				  <div class="w3_agile_recipe-grid">
                                  
								
									<div class="col-md-6 col-sm-6 tab-info two">
								<h4>Putra Specialist Hospital</h4>
									<p>Anaesthesiology is the practice of medicine dedicated to the total care of the patient before, during and after surgery.</p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div>
								</div>
								<div class="col-md-6 col-sm-6 tab-image two">
									<img src="images/D2.jpg" alt="Medicinal">
								</div>
								<div class="clearfix"></div>
					    </div>

			</div>
			<h3>GASTROENTEROLOGY</h3>
			<div>
			 <div class="w3_agile_recipe-grid">
                                  
								<div class="col-md-6 col-sm-6 tab-image">
									<img src="images/D3.jpg" alt="Medicinal">
								</div>
									<div class="col-md-6 col-sm-6 tab-info">
								<h4>Putra Specialist Hospital</h4>
									<p>Digestive and liver diseases are common. Problems such as reflux diseases, peptic ulcer diseases, altered bowel habit, hepatitis, gallstones, gastrointestinal and hepatobiliary cancers are affecting more and more people now.  If those people at risk are left undiagnosed and untreated it can cause serious complications. At Putra Specialist Hospital, our Gastroenterologist is specially trained to manage complex internal medical problems, in particular the gastrointestinal system (esophagus, stomach, small intestines and colon) as well as hepatobiliary diseases. We provide a full range of services from diagnosis to treatment programmes as well as follow-up care for our patients.</p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div> 
								</div>
								<div class="clearfix"></div>
					    </div>


			</div>
			<h3>GENERAL SURGERY</h3>
			<div>
				  <div class="w3_agile_recipe-grid">
                                  
								
								<div class="col-md-6 col-sm-6 tab-info two">
								<h4>Putra Specialist Hospital</h4>
									<p>Patients who wish to have their surgery performed at Oriental Melaka Straits Medical Centre now have a wider range of choices.

									Our General Surgeons are specialist that perform consultation and surgery on medical conditions involving the breast, endocrine system, gastrointestinal tract, colon, liver, pancreas and rectum such as; Hernias, Hyperhidrosis (Sweaty Palms), Gallbladder Surgery, Appendicitis, Thyroid Removal, Hemorrhoids, Abscesses and Masses, Diseases of the Upper & Lower Digestive Tract,Bariatric Surgery: Bariatric surgery is a modern treatment for morbid obesity and encompasses surgical procedures that produce significant and sustained weight loss.  At Putra Specialist Hospital we offer a comprehensive solution for surgical weight loss that is focused on long-term success.
									Minimally invasive surgery can also be performed, which can mean smaller incisions, less pain and a quicker recovery for patients. Our surgeons can help you determine whether surgery is right for you and if so, which type of procedure.</p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div> 
								</div>
								<div class="col-md-6 col-sm-6 tab-image two">
									<img src="images/D4.png" alt="Medicinal">
								</div>
								<div class="clearfix"></div>
					    </div>
			</div>
			<h3>NEPHROLOGY</h3>
			<div>
				  <div class="w3_agile_recipe-grid">
                                  
								
								<div class="col-md-6 col-sm-6 tab-info two">
								<h4>Putra Specialist Hospital</h4>
									<p>At Putra Specialist Hospital, we embrace a holistic and multidisciplinary approach to help detect, prevent and treat kidney based illnesses. Your care will be managed by our dedicated kidney team, which includes a Nephologist, Pharmacist, Dietician and dedicated Nursing support.</p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div> 
								</div>
								<div class="col-md-6 col-sm-6 tab-image two">
									<img src="images/D5.png" alt="Medicinal">
								</div>
								<div class="clearfix"></div>
					    </div>
			</div>
			<h3>NEUROSURGERY</h3>
			<div>
				  <div class="w3_agile_recipe-grid">
                                  
								
								<div class="col-md-6 col-sm-6 tab-info two">
								<h4>Putra Specialist Hospital</h4>
									<p>A neurosurgeon is a specialist that deals with the diagnosis and surgical treatment of disorders and diseases that affect any portion of the nervous system – from the brain, spinal cords, peripheral nerves and extra-cranial cerebrovascular system including the congenital anomalies, trauma, tumours, vascular disorders, infections of the brain or spine, stroke, or degenerative diseases of the spine.</p>
									<div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div> 
								</div>
								<div class="col-md-6 col-sm-6 tab-image two">
									<img src="images/D6.jpg" alt="Medicinal">
								</div>
								<div class="clearfix"></div>
					    </div>
			</div>
		</div>
		</div>
	</div>
</div>-->
<!-- services section -->
<div class="service-w3l jarallax" id="service">
	<div class="container">
	<h3 class="w3_heade_tittle_agile two">What We Do Best</h3>
		<p class="sub_t_agileits"></p>
		<div class="col-lg-4 col-md-4 col-sm-12 serv-agileinfo1">
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree1" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">Easy Booking</h4>
				<p class="text-center"></p>	
			</div>
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree2" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"><i class="fa fa-user-md" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">Experience</h4>
				<p class="text-center"></p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 serv-agileinfo2">
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree4" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">Emergency Care</h4>
				<p class="text-center"></p>
			</div>
			<div class="clearfix"></div>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-6 serv-agileinfo3">
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree6" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"><i class="fa fa-tint" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">DNA Testing</h4>
				<p class="text-center"></p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-6 serv-wthree5" data-aos="zoom-in">
				<ul class="ch-grid">
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-5"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
								<div class="ch-info-back">
									<h5>Health Plus</h5>
									<p>Best In Services</p>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<h4 class="text-center">General Treatment</h4>
				<p class="text-center"></p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- /services section -->
<!-- team -->
	<!--<div class="team portfolio " id="team">
		<div class="container">
<h3 class="w3_heade_tittle_agile">Amazing Team</h3>
		<p class="sub_t_agileits">Meet Our Amazing Team...</p>
			<div class="w3layouts-grids">
					<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="images/t4.jpg" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4>Rabecca Scot</h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="images/t3.jpg" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4>Rosy Carl </h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="images/t2.jpg" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4>David Martin</h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
						 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 wthree_team_grid">
					<div class="wthree_team_grid1">
						<div class="hover14 column">
							<div>
								<figure><img src="images/t1.jpg" alt=" " class="img-responsive" /></figure>
							</div>
						</div>
						<div class="wthree_team_grid1_pos">
							<h4>Reena Scot</h4>
						</div>
					</div>
					<div class="wthree_team_grid2">
						<ul class="social-icons">
							 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
		
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- stats -->
	<div class="stats_inner jarallax" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-building-o" aria-hidden="true"></i>
			<p class="counter">120</p>
			<h3>Hospital Rooms</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		   <i class="fa fa-wheelchair" aria-hidden="true"></i>
			<p class="counter">165</p>
			<h3>Wheelchair</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
		<i class="fa fa-ambulance" aria-hidden="true"></i>
			<p class="counter">50</p>
			<h3>Ambulance Car</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
	<i class="fa fa-heart-o" aria-hidden="true"></i>
			<p class="counter">200</p>
			<h3>Saved hearts</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>
<!-- //stats -->

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

<script src="js/ziehharmonika.js"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
	<!-- Gallery-Tab-JavaScript -->
			<script src="js/cbpFWTabs.js"></script>
			<script>
				(function() {
					[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
						new CBPFWTabs( el );
					});
				})();
			</script>
		<!-- //Gallery-Tab-JavaScript -->


<!-- Swipe-Box-JavaScript -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
		<!-- //Swipe-Box-JavaScript -->
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

<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->


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