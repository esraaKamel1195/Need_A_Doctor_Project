 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

 <center><a href="<?php echo base_url();?>ProjAdmin" class="btn btn-primary">Add new new</a>
 <a href="<?php echo base_url();?>Project" class="btn btn-primary">website</a></center>
<table class="table table-inverse">
  <thead>
    <tr>
      <th>id</th>
      <th>username</th>
      <th>edit</th> 
      <th>delete</th>
    </tr>
  </thead>
<?php foreach ($news as $value): ?>
  
  <tr>
        <td><?php echo $value->new_id;  ?></td>
        <td><a href="<?= base_url()?>Project/shownew/<?php echo $value->new_id?>"><?php echo $value->title;  ?></td></a>
        <td><a href="<?= base_url()?>ProjAdmin/edit/<?php echo  $value->new_id?>" class="btn btn-success">edit</a></td>
        <td><a href="<?= base_url()?>ProjAdmin/delete/<?php echo  $value->new_id?>" class="btn btn-danger">delete</a></td>
    </tr>
   
<?php endforeach ?>
</table>