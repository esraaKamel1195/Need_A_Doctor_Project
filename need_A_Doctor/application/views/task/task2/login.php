<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style >
		body
		{
		  background:  #808080;
		}
	    div
	    {
	      height: 50px;
	      background: black;
	      padding: 10px;
	      font-size: 30px;
	      text-decoration-line: none;
	    }
			
		a
		{
				font-size: 20px;
				text-decoration-line: none;
				
		}
			form
	    {
	    	text-align: center;
	    	padding-top: 200px;
	    }
	    label
	    {
	    	font-size: 35px;
	    	color: black
	    }
	</style>
</head>
<body>
	<div class='header'>
		<a href="<?php echo base_url();?>Task2/">HomePage</a>
	</div>
	<form  method="post" action="<?php echo base_url();?>/Task2/login">
	   <label>username</label> <input type="text" name="username"  height="300px"><br>
	    <label>password</label><input type="password" name="password"><br>
	    <input type="submit" value="login" "><br>
	</form>
</body>
</html>