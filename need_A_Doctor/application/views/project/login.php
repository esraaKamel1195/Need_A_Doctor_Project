<?php

if(!empty($this->session->flashdata('login')))
echo $this->session->flashdata('login');
?>
<?php $this->load->view('project/header2') ?>
<center><form style="width: 20%;" class="form-control-lg" action="<?= base_url()?>Project/ckeck" method="post" >
username:	<input type="text" name="username" class="form-control">
password:	<input type="password" name="password" class="form-control">
<input type="submit" value="Login" class="btn btn-primary">

</form>
<h4>OR</h4>
<a style="margin-left:20px; " class="btn btn-primary" href="<?php echo base_url();?>Project/to_regist">Rigrester</a>

</center>  

<?php $this->load->view('project/footer') ?>