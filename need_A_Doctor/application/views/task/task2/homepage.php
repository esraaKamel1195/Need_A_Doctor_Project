<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<style >
		
	body
	{
		background-color: black;
	}
	a{
		text-decoration-line: none;
		font-size: 25px;
		color: black;
     }
	.header{
		background: #808080;
		height: 30px;
		text-align: left; 
		padding:60px;
		margin: 0; 
		
		
	}
		.content{

			text-align: center;
			height: 550px;
			

		}
		h1{
			color: blue;
			
		}
		.footer{
			background-color:  #595959; 
			height: 100px;
			
					}
	
	</style>
</head>
<body>
<div class='header'>
	<a href="<?php echo base_url();?>Task2/">HomePage </a>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	<a href="<?php echo base_url();?>Task2/to_login">login</a>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	<a href="<?php echo base_url();?>Task2/to_register">register</a>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	<a href="<?php echo base_url();?>Task2/longout">LongOut</a>
</div>
<h1 style="text-align: center;">welcome <?php echo $username;?> </h1>
</body>
</html>