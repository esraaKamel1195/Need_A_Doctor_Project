<!DOCTYPE html>
<html>
<head>
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
		padding:20px 0; 
		
		
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
	<title>welcome to user</title>
</head>
<body>
	<div class="header">
				<a href="<?php echo base_url(); ?>Task1/">HomePage</a>
	</div>
	<div class='content'>
		<h1>Welcome to  <?php echo $user ;?></h1>
	</div>
	<div class='footer'></div>
</body>
</html>