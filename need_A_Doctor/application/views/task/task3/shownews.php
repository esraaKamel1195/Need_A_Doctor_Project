 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style >
  h1{
   background: #d6d6c2;
   text-align: center;
   padding: 10px;
  }
</style>
<a href="<?php echo base_url();?>Task3/tologin"><h1 style='text-align: right;'> login </h1></a>
   

    <div class="container">
   <div class="panel-group">
    <div class="panel panel-default">
     <?php  foreach ($new as  $value):?>
      <div class="panel-heading" style="font-size: 35px;"> <?php echo $value->title;?> </div>
      <div class="panel-body"><?php echo $value->description; ?> </div>
    </div>
    </div>
     </div>
  <?php endforeach ; ;?>


<table class="table table-striped">
  <?php   if(empty( $this->session->userdata('content')))
   foreach ($new as  $value):?>
      <tr>
        <td>
<div class="container">
   <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading" style="font-size: 35px;"> <a href="<?php echo base_url();?>Task3/shownew/<?php echo $value->new_id;?>"><?php echo $value->title;?> </a></div>
            <div class="panel-body"><?php echo $value->description; ?> </div>
          </div>
          </td>
      
            
          </tr>)
   <?php endforeach ;

     $this->session->unset_userdata('content');?>

</table>

<a href="<?php echo base_url();?>Task3"><h1>homepage</h1></a>
