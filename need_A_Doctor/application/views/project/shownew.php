

  <?php //***********************************   end of header ****************************\

  /*


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/?>
 
 <?php $this->load->view('project/header2');?>
<?php foreach ($category_name as  $value):?>
<h1 style='text-align:center;' ><?php echo $value->cat_name; ?></h1>
    <?php endforeach ;?>

    
<table class="table table-striped" >
  <?php foreach ($news as  $value):?>
     
    <tr>
      <td>
  <div class="container" style="width: 1100px;">
     <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 35px;text-align: right; ">
                  <span><?php echo $value->title;?></span>
          <img style="width:169px; height: 130px;" alt="t" src="<?php echo $value->image?>">
         </div>

        <div class="panel-body"><?php echo $value->description; ?> </div>

      </div>
   </div>
  </div>
      </td>

        
    </tr>
     <?php endforeach ;?>

  </table>

  <?php
foreach ($comments as $value):

  ?>

  <div>
    <h3>
      <?= $value->username?>:
      <?= $value->comment_desc?>
    </h3>

  </div>

<?php endforeach; ?>
<?php foreach ($news as  $v):?>
<form class="form-control-lg" method="post" action="<?= base_url()?>ProjAdmin/add_comment/<?=$v->new_id ?>">
  <?php endforeach; ?>
  <textarea style="width: 100%" name="comment" placeholder="comment......"></textarea><br><br>
  <input type="submit" value="ADD Comment" class="btn btn-primary" style="margin-left:90%;">
</form>

<a href="<?php echo base_url();?>Project" class="btn btn-primary"><h1>homepage</h1></a>
<?php $this->load->view('project/footer'); ?>