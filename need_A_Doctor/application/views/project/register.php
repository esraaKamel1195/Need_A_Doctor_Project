<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	
</head>

<?php $this->load->view('project/header2');?>
<body>
	<h1 style="text-align: center;">regist form</h1>
	<center>
	<form  method="post" action="<?php echo base_url();?>Project/register">
		<h4 class="btn btn-danger"><?php
				if(!empty(validation_errors()))
				{
					echo validation_errors();
				}
	    ?>
	   </h4>
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
			<td><input type="e_mail" name="email"> </td>
			</tr>
				  	
		    
	    </table>
	   
	<input type="submit" value="Register" class="btn btn-primary">
	</form></center>
</body>
<?php $this->load->view('project/footer');?>
</html>