<div class="cbp-l-member-img">
	<?php foreach ($doctor as $value): ?>
	<img src="<?php echo base_url() ; ?>images/<?php echo $value->photo  ?>" alt="" style="width:300px;height: 300px;">
</div>
<div class="cbp-l-member-info" style="float:right;width:600px;">
	<div class="cbp-l-member-name"><font color="black"><bold>Name:</bold></font> <?php echo $value->first_name  ?> <?php echo $value->last_name  ?></div>
	<div class="cbp-l-member-name"> <font color="black" ><bold>Gender:</bold></font>
		<?php echo $value->gender  ?>
	</div>
	<div class="cbp-l-member-name"><font color="black"><bold>Specialty:</bold></font></bold></font> <?php echo $value->Specialty  ?></div>
	<div class="cbp-l-member-name"><font color="black"><bold>Qualification:</bold></font> <br>
		<?php echo $value->qualify  ?>
	</div>
	<div class="cbp-l-member-name"> <font color="black"><bold>Age:</bold></font>
		<?php echo $value->age  ?>
	</div>
	<div class="cbp-l-member-name"><font color="black"><bold>Experience:</bold></font>
		<?php echo $value->Experience  ?>
	</div>
	<div class="cbp-l-member-name"><font color="black"><bold> E_mail:</bold></font>
		<?php echo $value->email  ?>
	</div>
	<div class="cbp-l-member-name"> <font color="black"><bold>Phone Number:</bold></font>
		<?php echo $value->phone  ?>
	</div>
	
	<div class="cbp-l-member-name"> <font color="black"><bold>Street:</bold></font>
		<?php echo $value->street  ?>
	</div>
	<div class="cbp-l-member-name"> <font color="black"><bold>Clinic Number:</bold></font>
		<?php echo $value->clinic_number  ?>
	</div>
	<div class="cbp-l-member-name"> <font color="black"><bold>Price:</bold></font>
		<?php echo $value->price  ?>
	</div>
	<div class="cbp-l-member-name"> <font color="black"><bold>Appoint:</bold></font>
		<?php echo $value->appoint  ?>
	</div>

	</div>
<?php endforeach ?>