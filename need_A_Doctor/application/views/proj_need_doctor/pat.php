<html>
    <head>
       <!-- <link rel="stylesheet" href="css/bootstrap.css">-->
       <link rel="stylesheet" href="<?php echo base_url() ; ?>css/style2.css">
       
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <meta name="description" content="">
                 <meta name="author" content="">
               <title>MEDICAL SERVICES </title>
               <link rel="stylesheet" href="<?php echo base_url() ; ?>css/font-awesome.min.css">
               <link rel="stylesheet" href="<?php echo base_url() ; ?>css/bootstrap.min.css">
               <link rel="stylesheet" href="<?php echo base_url() ; ?>css/style.css">
              <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
               <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>-->
               <script src="<?php echo base_url() ; ?>js/modernizr.js"></script>
        
        
        <style>
        
            td{
                padding:10px;
            }
        
        </style>
       
    </head>
    <body>
      <!--  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3a9ecb;">
  <a  id="medical" class="navbar-brand" href="#"><font color="black">Medical Services</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     
        
        <li class="nav-item">
      <a class="nav-link" href="#"><font color="black">Sign in</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><font color="black">/Join</font></a>
    </li>
        
    </ul>
   
  </div>
</nav>-->
        <header class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-5 header-logo">
            <br>
            <a href="<?php echo base_url() ; ?>need_doctor/index"><img src="<?php echo base_url() ; ?>images/l.jpg" alt="" class="img-responsive logo"></a>
          </div>
  
          <div class="col-md-7">
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
                    <li><a class="menu active" href="<?php echo base_url() ; ?>need_doctor/index" ><font size="2 px">Home</font></a></li>
                   
               <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/register"> <font size="2 px">register</font></a></li>
                       <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/login"><font size="2 px"> login</font></a></li>
                  </ul>
                </div><!-- /navbar-collapse -->
              </div><!-- / .container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header> 
        
        
        
        
        <div class="body2">
        
           <form id="f2" action="<?php echo base_url();?>need_doctor/register_informationPatient/<?php echo "patient"?>" method="POST">
               <br>
                <br>
                <br>
                <br>
               <h2>Get started with Medical services</h2><br>
                <?php
                   if(!empty(validation_errors()))
                   {
                       echo "<h4 class="."btn btn-danger".">". validation_errors()."</h4>";
                   }
                ?>
               <hr>
            <table>
               <tr><td> <label for="firstName">FirstName:</label></td>
                  <td>  <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" id="firstName" style="margin-right: 50px;"></td>
                  <td> <label for="lastName">LastName:</label></td>
                  <td><input type="text" name="last_name" value="<?php echo set_value('last_nsame'); ?>" id="lastName"></td>
                </tr>
                <tr><td> <label for="phone">directPhone:</label></td>
                    <td> <input type="number" name="phone" value="<?php echo set_value('phone'); ?>" id="phone"style="margin-right: 50px;"></td>
                    <td> <label for="mail">yourEmail:</label></td>
                    <td> <input type="email" name="email" value="<?php echo set_value('email'); ?>" id="mail"></td>
                </tr>
               <br><br>
                <tr>
               <span id="s2"><td><label for="street"> Street:</label></td>
                   <td><input type="text" name="street" value="<?php echo set_value('street'); ?>" id="street"></td> </span> 
                </tr>    
                <br><br>
                <tr><td> <label for="pass">password:</label></td>
                    <td> <input type="password" name="password" value="<?php echo set_value('password'); ?>" id="pass"></td>
                    <td> <label for="repass" style="margin-left: 5%;"> re-Enter Password:</label></td>
                    <td> <input type="password" name="repass" value="<?php echo set_value('repass'); ?>" id="repass"></td></tr>   
                <tr><td> <label for="s">your Age:</label></td>
                    <td> <select  id="s" name="age"  value="<?php echo set_value('age'); ?>" style="height:30px;">
                          <?php
						                for( $i=1;$i<=100;$i++)
						                 echo "<option name='age' value=".$i.">". $i ." years</option>";
                          ?>
                         </select></td>
                   <td><label for="fe"> Gender:</label></td>
                       <td><input type="radio" name="Gender" value="female" id="fe" value="<?php echo set_value('Gender'); ?>">Female
                           <input type="radio" name="Gender" value="male" value="<?php echo set_value('Gender'); ?>" style="margin-left: 5%;">Male</td>
            </table>
               <center><button type="submit" value="Submit"><font color="#fff">Submit</font></button></center>
            </form>
        </div>
        
        
       <!----------------------resources------->

         <!--
            <script src="js/jquery-3.2.1.min.js"></script>
<script src="jss/bootstrap.min.js"></script>
<script src="jss/popper.js"></script>
<script src="jss/popper-utils.js"></script>

      -->
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

        