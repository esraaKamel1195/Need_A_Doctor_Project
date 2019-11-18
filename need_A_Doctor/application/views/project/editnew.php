 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<center>
	<?php foreach ($news as $value):?>
<form style="margin-top: 10px; width: 80%;" class="form-control-lg" action="<?= base_url()?>ProjAdmin/update/<?= $value->new_id?>" method="post" >
	
	Title :	<br><input style="margin-top: 20px;" type="text" name="title" class="form-control" value="<?php echo $value->title ?>"><br>
	Description :
		<br><textarea  style="margin-top: 20px;height:80px;" name='description' class="form-control"><?php echo $value->description ;?></textarea><br>
	<?php endforeach ?>
	image :	   <br><input style="margin-top: 20px;" type="file" name="image" class="form-control"><br>
	<select style="margin-top: 20px;" name="cat_id" class="form-control">	
		<?php foreach ($cat as $value):?>
		<option  value="<?php echo $value->cat_id ?>"><?php echo $value->cat_name ?></option>
	<?php endforeach ?>
	</select><br>
<input style="margin-top: 20px;" type="submit" value="update" class="btn btn-primary"><br>
  
</form>
 <a href="<?php echo base_url();?>ProjAdmin/control" class="btn btn-primary">control panal</a> 
 <a href="<?php echo base_url();?>Project" class="btn btn-primary">website</a>
</center>