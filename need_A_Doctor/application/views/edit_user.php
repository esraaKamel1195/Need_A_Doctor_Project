

<?php 
foreach ($users as $value):
?>
<form method="post" action="<?= base_url()?>Course/update/<?= $value->id?>">
	
	<input type="text" name="username" value="<?= $value['username']?>">
	<input type="text" name="email" value="<?= $value->email?>">
	<input type="text" name="password">
	<input type="submit" value="Update">
</form>
<?php endforeach; ?>