<html>
    <head>
       <!--<link rel="stylesheet" href="css/bootstrap.css">-->
       <link rel="stylesheet" href="<?php echo base_url() ; ?>css/style2.css">
       
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <meta name="description" content="">
                 <meta name="author" content="">
               <title>MEDICAL SERVICES </title>
               <link rel="stylesheet" href="<?php echo base_url() ; ?>css/font-awesome.min.css">
               <link rel="stylesheet" href="<?php echo base_url() ; ?>css/bootstrap.min.css">
               <link rel="stylesheet" href="<?php echo base_url() ; ?>css/style.css">
              <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'> 
               <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>-->
               <script src="<?php echo base_url() ; ?>js/modernizr.js"></script>
       
       
               <style>
               
                   td{
                       padding:10px;
                   }
               
               </style>
        
    </head>
    <body>
 
	<header class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-5 header-logo">
            <br>
            <a href="<?php echo base_url() ; ?>need_doctor/indexdoc"><img src="<?php echo base_url() ; ?>images/l.jpg" alt="" class="img-responsive logo"></a>
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
                    <li><a class="menu active" href="<?php echo base_url() ; ?>need_doctor/indexdoc" >Home</a></li>
                    
                    <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/doctor"> Doctors</a></li>
                  </ul>
                </div>
				</div>
				</nav>
          </div>
        </div>
      </div>
    </header> 
        
        <div class="body">
        
            
        <?php foreach ($doctor as $value): ?>
           <form id="f" method="post" action="<?= base_url()?>need_doctor/update/<?= $value->id?>" >
                <h2>Get started with change profil</h2>
               
               <h2>Get started with change profil </h2>
               <hr>
               <br>
               <table>
              
                  <tr><td> <label for="firstName">Change First Name:</label></td>
                      <td> <input type="text" name="first_name" id="firstName" value="<?= $value->first_name?>" style="margin-right: 50px;"></td>
                      <td> <label for="lastName">Change Last Name:</label></td>
                      <td> <input type="text" name="last_name" id="lastName" value="<?php echo $value->last_name; ?>"></td>
                  </tr>
                  <tr><td> <label for="phone">Change direct phone number:</label></td>
                      <td> <input type="number" name="phone" id="phone" value="<?php echo $value->phone; ?>"></td>
                      <td> <label for="email">Change your email:</label></td>
                      <td> <input type="email" name="email" id="email" value="<?php echo $value->email; ?>"></td>
                  </tr>
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                  <tr><td> <label for="image">Change your PHOTO:</label></td>
                      <td colspan=""><input type="file" id="image"  value="<?php echo $value->photo; ?>" name="image" style="margin-left:10px;"></td>
                      <td> <label for="s">Change Age:</label></td>
                      <td><select  id="s" name="age"  value="<?php echo $value->age; ?>" style="height:30px;">
                        <option name='age' value="<?php echo $value->age; ?>"><?php echo $value->age; ?>  years</option>
                          <?php
                            for( $i=1;$i<=100;$i++)
                             echo "<option name='age' value=".$i.">". $i ." years</option>";
                          ?>
                         </select></td>
                  </tr>       
                  <tr><td> <label for="s">Change Years Of Experience:</label></td>
                      <td><select  id="s" name="Experience" value="<?php echo $value->Experience; ?>" style="height:30px;width:200px;">
                          <option name='Experience' value='<?php echo $value->Experience; ?>'> <?php echo $value->Experience; ?>  years</option>
                          <?php
                               for( $i=0;$i<=30;$i++)
                                echo "<option name='Experience' value=".$i.">". $i ." years</option>"; 
                           ?>
                          </select></td></tr>
               </table>
                  <br>
              
                  <textarea name="qualify" id="qualify"  value="<?php echo $value->qualify; ?>" placeholder="your qualification ..."><?php echo $value->qualify; ?>
                  </textarea><br>
                  <hr>
                  <h2>Change your clinic information:</h2>
                  <br>
                  <div><label for="place">Change address:</label>
                  <div>
                  <select  name="street" value="<?php echo $value->street; ?>" id="s" style="height:30px;width:200px;" required>
                          <option  name="street" value="<?php echo $value->street; ?>"><?php echo $value->street; ?></option>
                          <option  name="street" value="النميس">شارع النميس</option>
                          <option  name="street" value="الجمهوريه">شارع الجمهوريه</option>
                          <option  name="street" value="الهلالى">شارع الهلالى</option>
                          <option  name="street" value="المحطه"> شارع المحطه</option>
              </select>
              
              
              <div><label for="num">Change clinic phone number:</label></div>
                  <input type="number" name="number" id="place" value="<?php echo $value->clinic_number; ?>">
                  <br>
                 
                  <label for="num">Change clinic price:</label></div>
                  <input type="number" name="price" id="place" value="<?php echo $value->price; ?>">
                  <br>
                  <br>
                  <textarea name="appoint" id="appoint" value="<?php echo $value->appoint; ?>" placeholder="your qualification ..."><?php echo $value->appoint; ?>
                  </textarea>
                  <br><br>
                  <label for="pass">Change password:</label>
                  <input type="password" name="password" id="pass" value="<?php echo set_value('password'); ?>">
                  <label for="repass" style="margin-left: 5%;"> re-enter new password:</label>
                  <input type="password" name="repass" id="repass" value="<?php echo set_value('password'); ?>">
                  <br>
                  <br><br><br>
                  <center><button type="submit" value="Submit" ><font color="white">Submit</font></button></center>
                </div>
            
        
        </div>
            </form>
        <?php endforeach; ?>
        
        
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
