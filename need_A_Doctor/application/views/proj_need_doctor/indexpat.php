<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>MEDICAL SERVICES </title>
	<link rel="stylesheet" href="<?php echo base_url() ; ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ; ?>css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="<?php echo base_url() ; ?>js/modernizr.js"></script>
	
<!-- header---->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Medicio landing page template for Health niche</title>

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo" style="width:15%;">
					<br>
					<a href="<?php echo base_url() ; ?>need_doctor/indexpat"><img src="<?php echo base_url() ; ?>images/l.jpg" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7" style="width:85%;">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">

						  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="" style="color:#337ab7;">What do you feel? <span class="glyphicon glyphicon-log-in"></span></a>
          <div class="dropdown-menu">
            <form id="formLogin" class="form container-fluid" style="width:400px;height:400px;">
              <div class="form-group" style="margin-top:20px;">
                <label for="usr"><h2>your complaint?</h2></label>
				<input type="email" class="form-control" id="usr">
				
				<h4 style="float:left;"><input type="radio" name="location" style="margin-top:50px;" id="rad" required>let the site know your location</h4>
			  </div>
			  <p id="p"></p>
              
              <button type="button" id="btnLogin" class="btn btn-block"onclick="" style="margin-top:100px;background-color:#3a9ecb;" >Go</button>
            </form>
            
          </div>
		</li>

					        <li><a class="menu active" href="<?php echo base_url() ; ?>need_doctor/indexpat" ><font size="2 px">Home</font></a></li>
					        <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/doctor"><font size="2 px">Doctors</font></a></li>
					        <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/indexpat/#service"><font size="2 px">our services</font> </a></li>
					       <!-- <li><a class="menu" href="#team">our team</a></li>-->
					       <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/indexpat/#contact"> <font size="2 px">contact us</font></a></li>
							
                            <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/logout"> <font size="2 px">log out</font></a></li>
							   
	    </form>
            
          </div>
		</li>

							  
					      </ul>
					    </div>
					  </div>
					</nav>
				</div>
			</div>
		</div>
		
		
     
    </nav>-->
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="<?php echo base_url() ; ?>images/slide-one.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               	
			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url() ; ?>images/slide-two.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			
			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url() ; ?>/images/slide-three.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		
			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url() ; ?>images/slide-four.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
		               			
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->

	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>our services</h2>
				<h4>Some of Specialties you may need to in our website</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="<?php echo base_url() ; ?>images/service1.png" alt="">
							</div>
						</div>
						<h3> Cardiology </h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="<?php echo base_url() ; ?>images/service2.png" alt="">
							</div>
						</div>
						<h3>brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="<?php echo base_url() ; ?>images/service3.png" alt="">
							</div>
						</div>
						<h3>Chiropractor</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="<?php echo base_url() ; ?>images/service4.png" alt="">
							</div>
						</div>
						<h3>human bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>our team</h2>
				
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url() ; ?>images/member1.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. M. Weiner, M.D.</h3>
						<p>Alan Belsky is a caring and diligent chiropractor serving the community of New York, NY. Dr. Belsky attended the National University of Health Sciences, where he received his degree in chiropractic medicine.</p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Danielle, M.D.</h3>
						<p>Dumisani Kambi-Shamba earned his MS in Oriental Medicine from Pacific College of Oriental Medicine, NYC. A former Board Member and current member of the New York Acupuncture Society.  </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url() ; ?>images/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url() ; ?>images/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Stephen J.</h3>
						<p>Dr. Stephen J. Coleman graduated from the University of Michigan Medical School in 1967.
						 Dr. Coleman completed his Residency in Psychiatry at Bellevue Hopsital center. </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Joseph, M.D.</h3>
						<p>Flora's mission is to provide Eastern and Western treatments to all who seek to live a healthy and balanced lifestyle.She seeks to accomplish this by composing a treatment plan specifically for you </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url() ; ?>images/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url() ; ?>images/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Michael, M.D.</h3>
						<p>LInitial appointment last 90 minutes and all following appointments last 60 minutes. Please provide 24 hours notice if you need to reschedule your appointment. </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Hasina, M.D.</h3>
						<p>Lisa is a Licensed Acupuncturist (L.Ac.) currently practicing in New York City. She holds a Masters of Science degree from Pacific College of Oriental Medicine a</p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url() ; ?>images/member6.jpg" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<!--<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>-->
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , London, UK, CP 123</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
							<ul><li><i class="fa fa-facebook"></i><span>FaceBook:</span> Medical_Services</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>leave us a message</h3>

						<form class="form">
							<input class="name" type="text" placeholder="Name">
							<input class="email" type="email" placeholder="Email">
							<input class="phone" type="text" placeholder="Phone No:">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p></p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>
	

	<!-- script tags
	============================================================= -->
	<script src="<?php echo base_url() ; ?>js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url() ; ?>js/gmaps.js"></script>
	<script src="<?php echo base_url() ; ?>js/smoothscroll.js"></script>
	<script src="<?php echo base_url() ; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ; ?>js/custom.js"></script>

</body>
</html>