  <?php $this->load->view('project/header2');?>
<?php ///////////////////////////////// ************************************ end of header *************\\\\\\\\\\\\\\\\\\\\\\\\\\\?>
<?php 

foreach ($catName as  $value):?>
<h1 style='text-align:center;' ><?php echo $value->cat_name; ?></h1>
<?php endforeach ;?>

    
<table class="table table-striped">
  <?php foreach ($cat_name as  $value):?>
  <tr>
   <td>
  <div class="container" style="width: 1100px;">
     <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 35px;text-align: right;">
          <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>"><?php echo $value->title;?> </a><img style="width:169px; height: 130px;" alt="t" src="<?php echo $value->image?>"></div>
        <div class="panel-body"><?php echo substr($value->description, 0,1000); ?>........ </div>
      </div>
   </div>
  </div>
      </td>

        
    </tr>
     <?php endforeach ;?>

  </table>

<a href="<?php echo base_url();?>Project" class="btn btn-primary"><h1>homepage</h1></a>
<?php $this->load->view('project/footer'); ?>
