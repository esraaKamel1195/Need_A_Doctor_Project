 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<?php
$this->load->library('form_validation');
if(!empty(validation_errors()))
{
	echo validation_errors();
}
?>
<center>
<form style="margin-top: 10px; width: 20%;" class="form-control-lg" action="<?= base_url()?>ProjAdmin/Addnew" method="post" >
	Title :	<br><input style="margin-top: 20px;" type="text" name="title" class="form-control"><br>
	Description :
		<br><textarea  style="margin-top: 20px;" name='description' class="form-control"></textarea><br>
	image :	   <br><input style="margin-top: 20px;" type="file" name="image" class="form-control"><br>
	<select style="margin-top: 20px;" name="cat_id" class="form-control">	
		<?php foreach ($cat as $value):?>
		<option  value="<?php echo $value->cat_id ?>"><?php echo $value->cat_name ?></option>
	<?php endforeach ?>
	</select><br>
<input style="margin-top: 20px;" type="submit" value="ADD" class="btn btn-primary"><br>
  
</form>
 <a href="<?php echo base_url();?>ProjAdmin/control" class="btn btn-primary">control panal</a> 
 <a href="<?php echo base_url();?>Project" class="btn btn-primary">website</a>
</center>