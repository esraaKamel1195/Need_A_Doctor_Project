    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<h1>
<?php
if( empty($this->session->flashdata('test') ) )
echo $this->session->flashdata('test');
?>
</h1>
<form class="form-control-lg" action="<?= base_url()?>Course/ckeck" method="post">
username:	<input type="text" name="username" class="form-control">
password:	<input type="password" name="password" class="form-control">
<input type="submit" value="Login" class="btn btn-primary">
  
</form>

