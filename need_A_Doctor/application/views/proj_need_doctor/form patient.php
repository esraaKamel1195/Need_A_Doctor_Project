
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medical Services </title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>css/style.css">
    
     <link rel="stylesheet" href="<?php echo base_url() ; ?>css/style.css">
    
    <!--  -->
    
    
    
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
    
	<style>
	td{
	padding:5px;
	}
	
	</style>
 

</head>
<body style="height:1000px;">
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
					        <li><a class="menu active" href="<?php echo base_url() ; ?>need_doctor/index" ><font size="2px">Home</font></a></li>
					       
					        <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/indexpat/#contact"><font size="2px">our services</font> </a></li>
					        <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/doctor"><font size="2px">Doctors</font></a></li>
					        
                              <li><a class="menu" href="<?php echo base_url() ; ?>need_doctor/login"><font size="2px"> login</font></a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

  
   
   
 <form id="f2" action= "<?php echo base_url() ; ?>need_doctor/findspeciality" style="width:70%;height:1000px;margin-left:100px;padding-left:50px;" method="POST">
               <br>
               <br>
               <br>
               <br>
                <br>
               <br>
			   <center>
			     <h2> what you feeling? </h2>
			   </center>
			   <br>
			   <hr>
               <h4>Marital Status:</h4>
              
               
               <table >
               
               
					
						<input type="radio" name="Status" value="<?php echo 'Single'; ?>" style="margin:10px;">Single
                  
                  
						<input type="radio" name="Status" value="<?php echo 'Married'; ?>" style="margin-left:50px;">Married
                  
					
				 <tr>
			       
					<td>
						<label for="location" style="font-size:17px;" >Age:</label>
                    </td>
					<td>
						<input type="text" name="age" value ="<?php echo 'Age'; ?>" id="firstName" style="width:150px ; margin-left:50px;">
                    </td>
					
                    
                </tr>
				<tr>
				
							<td>
									<label for="location" style="font-size:17px;" >Price:</label>
								</td>
							
							<td>
							  <select  name="price" id="s" style="height:30px;width:200px;">
									 <option  name="price" value="1">50:100</option>
									 <option  name="price" value="2">100:200</option>
									 <option  name="price" value="3">200:300</option>
									 <option  name="price" value="4">500:1000</option>
											 </select>
										  
										</td>  
							</tr>
							
							
							
							<tr>
							
											<td>
						<label for="location" style="font-size:17px;" >location:</label>
                    </td>
							
						
							
							<td>
							     <select  name="street" id="s" style="height:30px;width:200px;">
										 
										  <option  name="street" value="الجمهوريه">شارع الجمهوريه</option>
                                          <option  name="street" value="النميس">شارع النميس</option>
                                          <option  name="street" value="الهلالى">شارع الهلالى</option>
                                          <option  name="street" value="المحطه">شارع المحطه</option>
							     </select>
								 </td>
				</tr>
               
               </table>
              
            <hr>
               <h3>Symptoms</h3>
			   <h5> Please check any symptoms or experiences that you have had in the last month </h5>
			   
			        <input type="checkbox" name="fall[]" value="<?php echo 'Difficulty falling asleep'; ?>" style="margin:10px;">Difficulty falling asleep
                  
                  
				    <input type="checkbox" name="fall[]" value="<?php echo 'Difficulty sataying asleep'; ?>" style="margin-left:50px;">Difficulty sataying asleep
                  
					<input type="checkbox" name="fall[]" value="<?php echo 'Difficulty getting outof bed'; ?>" style="margin-left:50px;">Difficulty getting outof bed 
                   <hr>
	    <table>
			<tr>      
			          
				<td colspan="2"> <input type="checkbox" name="fall[]" value="<?php echo 'Persistent loss of interest in previously enjoyed activities'; ?>" >Persistent loss of interest in previously enjoyed activities
                
                </td>				
				 
				  
      			
				<td> <input type="checkbox" name="fall[]" value="<?php echo 'Avoiding people, places, activities'; ?>" >Avoiding people_places_activities 
				</td>
			</tr>		
			
			<tr>
				
				<td>   <input type="checkbox" name="fall[]" value="<?php echo 'Feeling NumbEating'; ?>">Feeling NumbEating </td>
				<td>	<input type="checkbox" name="fall[]" value="<?php echo 'Outbursts of anger'; ?>" >Outbursts of anger </td>
                 <td>   <input type="checkbox" name="fall[] " value="<?php echo 'Rapid mood changes '; ?>" >Rapid mood changes </td>
                 
			</tr>
			<tr>	
				  <td>   <input type="checkbox" name="fall[]" value="<?php echo 'Depressed MoodDifficulty'; ?>" >Depressed MoodDifficulty </td>
				 <td>	<input type="checkbox" name="fall[]" value="<?php echo 'Anxiety/Panic attach'; ?>" >Anxiety/Panic attach </td>
       			 <td>	<input type="checkbox" name="fall[]" value="<?php echo 'Pain in paras'; ?>" >Pain in paras </td>
			</tr>
        </table>          
				  <hr>
				  <table>
				  <tr>
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'Fear'; ?>" >Fear</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Helplessness'; ?>" >Helplessness</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Feeling or acting like a different person'; ?>" >Feeling or acting like a different person</td>
                  </tr>
				  <tr> 
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'Holplessness'; ?>" >Holplessness</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Sadness'; ?>" >Sadness</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Worthlessness'; ?>" >Worthlessness</td></tr>
				  </table>
				  <hr>
				  <table><tr>
				   <td> <input type="checkbox" name="fall[]" value="<?php echo 'energyIntrusive'; ?>" > energyIntrusive</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Easily started, feeling "jumpy"'; ?>" >Easily started_feeling "jumpy"</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Dizziness'; ?>" >Dizziness</td></tr>
				  <tr>
				  
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'Difficulty catching your breath'; ?>" > Difficulty catching your breath</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Increase muscle tension'; ?>" >Increase muscle tension</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Pain in shoulder'; ?>" >Pain in shoulder</td></tr>
				 
				  <tr>
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'Physical sensations others don'; ?>" > Physical sensations others don't have</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Racing thoughts'; ?>" >Racing thoughts</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Unusual Sweating'; ?>" > Pain in the knee</td></tr>
				 </table>

				 <table>
				 <tr>
				 
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'Fever or chill'; ?>" > Fever or chill</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Chest pain or pressure'; ?>" >Chest pain or pressure</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Muscle or joint pain'; ?>" > Muscle or joint pain</td></tr>
				 <tr>
				 
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'Change in stools'; ?>" > Change in stools</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Rapid heart rate'; ?>" >Rapid heart rate</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Change in sexual function'; ?>" > Change in sexual function</td></tr>
				 
				 <tr>
				   <td><input type="checkbox" name="fall[]" value="<?php echo 'Visual changes'; ?>" > Visual changes</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Cough'; ?>" >Cough</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Burning or tingling sensation'; ?>" > Burning or tingling sensation</td></tr>
				 
				  <tr>
				   <td><input type="checkbox" name="fall[]" value="<?php echo 'Hearing Loss'; ?>" > Hearing Loss</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Abdominal pain'; ?>" >Abdominal pain</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Nausea or Vomiting'; ?>" > Nausea or Vomiting</td></tr>
				  
				  <tr>
				  
				   <td><input type="checkbox" name="fall[]" value="<?php echo ' Sore/Scratchy throat'; ?>" > Sore/Scratchy throat</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'Change in urination'; ?>" >Change in urination</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'Rash or sores'; ?>" > Rash or sores</td></tr>
				 
				 
				 <tr>
				 
				 
				 
				   <td><input type="checkbox" name="fall[]" value="<?php echo 'dysphinea'; ?>" > dysphinea</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'orthopnea'; ?>" >orthopnea</td>
                    <td><input type="checkbox" name="fall[]" value="<?php echo 'anxiety'; ?>" > anxiety</td>
					<td><input type="checkbox" name="fall[]" value="<?php echo 'edema'; ?>" >edema</td></tr>
                  
				
                
				
				  
              
                       <tr>
					   <td><input type="checkbox" name="fall[]" value="<?php echo 'Broken foot'; ?>" > Broken foot</td>
				  
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'chest pain'; ?>" > chest pain</td>
				  
				  <td><input type="checkbox" name="fall[]" value="<?php echo 'pain in heart'; ?>" >pain in heart</td>
				  <td><input type="checkbox" name="fall[]" value="<?php echo 'Headache'; ?>" >Headache</td>

				  
				  </tr>
				   
				
				  
              
                       <tr>
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'Binder Crusader'; ?>" > Binder Crusader</td>
				  
				  <td><input type="checkbox" name="fall[]" value="<?php echo 'difficulty in swollowing'; ?>" >difficulty in swollowing</td>
				  <td><input type="checkbox" name="fall[]" value="<?php echo 'chest pain'; ?>" >Depressed Mood activity</td>
				  	<td><input type="checkbox" name="fall[]" value="<?php echo 'difficulty in swollowing'; ?>" >rapid heart rate</td>
                 
				  
				  </tr>

				
				  
              
                       <tr>
				    <td><input type="checkbox" name="fall[]" value="<?php echo 'Balance problems'; ?>" > Balance problems</td>
				  
				  <td><input type="checkbox" name="fall[]" value="<?php echo 'Depressed Mood activity'; ?>" >Depressed Mood activity</td>
				  <td><input type="checkbox" name="fall[]" value="<?php echo 'rapid heart rate'; ?>" >rapid heart rate</td>
				  	
				  <hr>
				  </tr>
				  
				   
                   </table>
					
   
                
               
               
               <br>
              
              
              <center> <button type="submit" value="Submit" style="background-color:rgba(13,70,83,0.91)"><font color="#fff">Submit</font></button></center>
			  <br>
            
            </form>   
   

 
    </body>  
   <script src="<?php echo base_url() ; ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ; ?>js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
    
    
    
     <!-- script tags
	============================================================= -->
	<script src="<?php echo base_url() ; ?>js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url() ; ?>js/gmaps.js"></script>
	<script src="<?php echo base_url() ; ?>js/smoothscroll.js"></script>
	<script src="<?php echo base_url() ; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ; ?>js/custom.js"></script>
    
    
    
    
</html>
    