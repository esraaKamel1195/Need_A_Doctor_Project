
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<a href="<?= base_url()?>Course/to_regist">Register new user</a>

<?php

if(!empty($this->session->flashdata('deleted')))
echo $this->session->flashdata('deleted');
?>
<?php

if(!empty($this->session->flashdata('register')))
echo "<h4 class='alert alert-success'>".$this->session->flashdata('register')."</h4>";
?>
<?php 
if(!empty($this->session->flashdata('updated')))
echo "<h4 class='alert alert-info'>".$this->session->flashdata('updated')."</h4>";
?>
<table class="table table-inverse">
  <thead>
    <tr>
      <th>id</th>
      <th>username</th>
      <th>email</th>
      <th>password</th>
      <th>edit</th>
      <th>delete</th>
    </tr>
  </thead>
<?php foreach ($user as $value): ?>
  
  <tr>
        <td><?php echo $value->id;  ?></td>
        <td><?php echo $value->username;  ?></td>
        <td><?php echo $value->email;  ?></td>
        <td><?php echo $value->password;  ?></td>
        <td><a href="<?= base_url()?>Course/edit/<?php echo  $value->id?>" class="btn btn-success">edit</a></td>
        <td><a href="<?= base_url()?>Course/delete/<?php echo  $value->id?>" class="btn btn-danger">delete</a></td>
    </tr>
   
<?php endforeach ?>
</table>