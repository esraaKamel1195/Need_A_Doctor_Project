<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MEDICAL SERVICES </title>

  <!-- css -->
  <link href="<?php echo base_url() ; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ; ?>font-awesome/css/font-awesome.min2.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?php echo base_url() ; ?>css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo base_url() ; ?>css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ; ?>css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url() ; ?>css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url() ; ?>css/animate.css" rel="stylesheet" />
  <link href="<?php echo base_url() ; ?>css/style4.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo base_url() ; ?>bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?php echo base_url() ; ?>color/default.css" rel="stylesheet">

  <!-- =======================================================
   
  ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

   <!-- header section -->
	<!--<header class="top-header"style="background-color:#77e1f7;">
      <div class="container">
        <div class="row">
          <div class="col-xs-5 header-logo">
            <br>
            <a href="index.html"><img src="img/l.jpg" alt="" class="img-responsive logo"></a>
          </div>
  
          <div class="col-md-7">
            <nav class="navbar navbar-default">
              <div class="container-fluid nav-bar">
              
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
  
               
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  
                  <ul class="nav navbar-nav navbar-right">
                    <li><a class="menu active" href="../index.html" ><font color="#6e217a">Home</font></a></li>
                   
                    <li><a class="menu" href="../register/register.html"><font color="#6e217a">Register</font></a></li>
                    <li><a class="menu" href="../register/login.html"><font color="#6e217a">login </font></a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
      </header>--> <!-- end of header area -->




  <div id="wrapper">

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
     <!-- <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">Call us now +62 008 65 001</p>
            </div>
          </div>
        </div>
      </div>-->
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="<?php echo base_url() ; ?>need_doctor/index">
                    <img src="<?php echo base_url() ; ?>images/l.jpg" alt="" width="150" height="40" />
                </a>
        </div>

       
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
		  
		  	<li class="dropdown"><a href="<?php echo base_url() ; ?>need_doctor/form_patient" style="color:#337ab7;">What do you feel? <span class="glyphicon glyphicon-log-in"></span></a><li>
            <li class="active"><a href="<?php echo base_url() ; ?>need_doctor/index">Home</a></li>
		
       
			
			
           <!-- <li><a href="<?php echo base_url() ; ?>need_doctor/index/#service">Service</a></li>
           <li><a href="<?php echo base_url() ; ?>need_doctor/doctor">Doctors</a></li>-->
            
         <!--   <li>
              <a href="<?php echo base_url() ; ?>need_doctor/register"><span class="badge custom-badge red pull-right">Register</span>Signout</a>
              
            </li>
			<li>
              <a href="<?php echo base_url() ; ?>need_doctor/login"><span class="badge custom-badge red pull-right">Login</span>Signin</a>
              
            </li>-->

           <li> <form class="navbar-form navbar-left" method="POST" action="<?php echo base_url() ; ?>need_doctor/search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" value="<?php echo set_value('last_name'); ?>" name="search">
      </div>
      <button type="submit" class="btn btn-default"style="font-color=#d8d9d8; background-color:#75d8f1;">search</button>
    </form>
</li>

          </ul>
        </div>
        
      </div>
     
    </nav>


    <!-- Section: team -->
    
    <section id="doctor" class="home-section bg-gray paddingbot-60" style="background-color: RGBA(13, 70, 83, 0.7 8);">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Doctors</h2>
                <p>the best services ,the best doctors</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

	  
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
			<form method="post" action="<?php echo base_url() ; ?>need_doctor/doctor">
							  <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
								<div class="cbp-filter-counter"></div>)</div>
								
							     <select  name="price" id="s" style="height:30px;width:200px;">
										  <option  name="price" value="Price">Price</option>
										  <option  name="price" value="1">50:100</option>
										  <option  name="price" value="2">100:200</option>
										  <option  name="price" value="3">200:300</option>
										  <option  name="price" value="4">500:1000</option>
                                 </select>
							  
							  
							     <select  name="street" id="s" style="height:30px;width:200px;">
										  <option  name="street" value="location">location</option>
										  <option  name="street" value="الجمهوريه">شارع الجمهوريه</option>
                                          <option  name="street" value="النميس">شارع النميس</option>
                                          <option  name="street" value="الهلالى">شارع الهلالى</option>
                                          <option  name="street" value="المحطه">شارع المحطه</option>
							     </select>
							  
								 
								 <select  name="Specialty" id="s" style="height:30px;width:200px;">
                                    <option name="Specialty" value="Specialty">Specialty</option>  
                                    <option name="Specialty" value="Cardiology"> Cardiology</option>
                                    <option name="Specialty" value="Chiropractor"> Chiropractor</option>
									<option name="Specialty" value="Dentist"> Dentist</option>
									<option name="Specialty" value="Dermotalogy"> Dermotalogy</option>
									<option name="Specialty" value="Ear nose and throat"> Ear nose and throat</option>
                          			<option name="Specialty" value="ENT"> ENT</option>
									<option name="Specialty" value="heart"> heart</option>
									<option name="Specialty" value="Ophthalmology"> Ophthalmology</option>
									<option name="Specialty" value="Orthopedic Department"> Orthopedic Department</option>
									<option name="Specialty" value="Orthopedics"> Orthopedics</option>
									<option name="Specialty" value="Pediatrics"> Pediatrics</option>
									<option name="Specialty" value="Psychological and nervous"> Psychological and nervous</option>

                                 </select>
							    
							  
							  
							  <button type="submit"  value="Submit" style="height:30px;width:100px;background-color:#4ACCD1;">GO!</button
			  
			  
			  </form>
			  <br><br>

            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
              <?php foreach ($doctor as $value): ?> 
                <li class="cbp-item psychiatrist">
                  <a href="<?php echo base_url() ; ?>need_doctor/doctor_member/<?php echo $value->photo  ?> " class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="<?php echo base_url() ; ?>images/<?php echo $value->photo  ?>" alt="" width="100%" height="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                         
                        </div>
                      </div>
                    </div>
                  </a>
 <div class="cbp-l-grid-team-position"><?php echo $value->first_name  ?> <?php echo $value->last_name  ?></div>

                   <?php endforeach ?>
               <!--   <div class="cbp-l-grid-team-position">Psychiatrist</div>
                </li>
                <li class="cbp-item cardiologist">
                  <a href="doctors/member2.php" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="<?php echo base_url() ; ?>images/team/2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                <a href="doctors/member2.php" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                  <div class="cbp-l-grid-team-position">Cardiologist</div>
                </li>
                <li class="cbp-item cardiologist">
                  <a href="doctors/member3.php" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="<?php echo base_url() ; ?>images/team/3.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member3.php" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                  <div class="cbp-l-grid-team-position">Cardiologist</div>
                </li>
                <li class="cbp-item neurologist">
                  <a href="doctors/member4.php" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="<?php echo base_url() ; ?>images/team/4.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="doctors/member4.php" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                  <div class="cbp-l-grid-team-position">Neurologist</div>-->
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
          
    
    <!-- /Section: team -->



   

  </div>
  <!--<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>-->




  <!-- script tags of header-->

	<script src="<?php echo base_url() ; ?>js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url() ; ?>js/gmaps.js"></script>
	<script src="<?php echo base_url() ; ?>js/smoothscroll.js"></script>
	<script src="<?php echo base_url() ; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/custom3.js"></script>
  




  <!-- Core JavaScript Files -->
  <script src="<?php echo base_url() ; ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/wow.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url() ; ?>js/jquery.appear.js"></script>
  <script src="<?php echo base_url() ; ?>js/stellar.js"></script>
  <script src="<?php echo base_url() ; ?>plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/nivo-lightbox.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/custom3.js"></script>

</body>
</html>
