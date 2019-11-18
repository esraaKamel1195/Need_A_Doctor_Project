 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
<style >
  h1{
   background: #d6d6c2;
   text-align: center;
   padding: 10px;
  }
</style>

 <h1>the controller</h1>
<form method="post" action="<?php echo base_url();?>Task3/add">
  <table class="table table-striped">
  
    <tr>
        <td>id</td>
        <td>title</td>
        <td>content</td>
        <td>delete</td>
        <td>edit</td>
     </tr>
     <?php foreach ($new as  $value):?>
      <tr>
         <td><?php echo $value->new_id;?></td>
         <td><?php echo $value->title;?></td>
         <td><?php echo $value->description;?></td>
         <td><a class="btn btn-danger" href="<?php echo base_url();?>Task3/delet/<?php echo $value->new_id ;?>" >Delete</a></td>
          <td><a class="btn btn-info" href="<?php echo base_url();?>Task3/edit/<?php echo $value->new_id ;?>" >Edit</a></td>
       </tr>
      <?php endforeach ?>
     
     <tr>
        <td>*</td>
            <td>
              <input type="title" name="title">
            </td>
            <td>
              <input type="text" name="content">
            </td>
      </tr>
     

  </table>


  <input type="submit" name="submite" value="add" style="width: 100px;margin-left: 1500px;" class="btn btn-info">
</form>

<a href="<?php echo base_url();?>Task3"><h1>homepage</h1></a>

