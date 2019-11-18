<!DOCTYPE html>
<html>
<head>
	<title>register</title>
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
	    table
	    {
	    	padding-left: 600px; 
	    }
	    label
	    {
	    	font-size: 35px;
	    	color: blue;
	    }
	</style>
</head>
<body>
	<div class='header'>
		<a href="<?php echo base_url();?>Task2/">HomePage</a>
	</div>
	<h1 style="text-align: center;">regist form</h1>
	<form  method="post" action="<?php echo base_url();?>Task2/register">
		<table>
			<tr>
				<td> <label>username</label> </td>
				<td><input type="text" name="username"><br></td>
			</tr>
			<tr>
				<td> <label>password</label></td>
				<td><input type="password" name="password"><br></td>
			</tr>
			<tr>
				<td>   <label>e_mail</label></td>
			<td><input type="e_mail" name="mail"> </td>
			</tr>
				  	
		    
	    </table>
	   
	 <input type="submit" value="register">	    
	</form>
</body>
</html>