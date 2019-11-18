
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <?php  foreach ($n as  $value):?>
<form method="post" action="<?= base_url()?>Task3/update/<?= $value->new_id?>">
<div class="container">
   <div class="panel-group">
    <div class="panel panel-default">
     
    <div class="panel-heading" > <input type="text" name="title" value="<?= $value->title;?>" style="width:980px; color: red"> </div>
    <div class="panel-body"><input type="text" name="content" value="<?= $value->description?>"> </div>
    </div>
     </div>

	
	
	
	<input type="submit" value="Update" class="btn btn-info" style="margin-left: 760px">
</form>
<?php endforeach; ?>