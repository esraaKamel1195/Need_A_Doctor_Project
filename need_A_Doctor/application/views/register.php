


<?php
$this->load->library('form_validation');
if(!empty(validation_errors()))
{
	echo validation_errors();
}
?>

<form method="post" action="<?= base_url()?>Course/Register">
	
	<input type="text" name="username" value="<?php if(!empty($username))
	echo $username ?>">
	<input type="text" name="email" value="<?php if(!empty($email))
	echo $email ?>">
	<input type="text" name="password" value="<?php if(!empty($password))
	echo $password ?>">
	<input type="submit" value="Register">
</form>