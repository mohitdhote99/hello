<?php 
include 'header.php';
$list = isset($_GET['pno'])?JT_list_tr($_GET['pno']):JT_list_tr(1);
	if (isset($_GET['delete'])) {
		$del_ = JT_delete($_GET['delete']);
		if ($del_ == true) {header('location:admin.php?success=delete');}
	}
?>
<section class="heading_">
	<h1>ADMIN PANNEL</h1>
	<span>-:All Registed Candidates List:-</span>
</section>

<?php if (isset($list['table'])){ ?>
<section id="admin_section">
	<div>
		<table id="JT_List">
			<thead><tr>
				<th>PROFILE</th>
				<th>EMAIL</th>
				<th>NAME</th>
				<th>CONTACT</th>
				<th>DOB</th>
				<th>GENDER</th>
				<th>TIME</th>
				<th>RESULT</th>
				<th>PINCODE</th>
				<th>ACTIONS</th>
			</tr></thead>
			<tbody><?php echo $list['table'];?></tbody>
		</table>
		<div class="clr MT" id="paginat_margin">
		<?php if (isset($list['pagi']['next'])){ ?>
			<div class="FR"><?php echo $list['pagi']['next']?></div>
		<?php } ?>
		<?php if (isset($list['pagi']['prev'])){ ?>
			<div class="FR"><?php echo $list['pagi']['prev']?></div>
		<?php } ?>
		</div>
	</div>
</section>
<?php }elseif($list =='false'){?>
	<h1 class="NO_REGIS_FOUND">No Registration Found Sorry !</h1>
<?php } ?>
<!-- succes popup -->
<?php if (isset($_GET['success'])) { ?>
<span data-ssu="<?php echo $_GET['success']; ?>" id="success"></span>
<section class="overlay_background">
	<div>
		<div class="message">
		<?php if ($_GET['success'] != ''){ ?>
		<h1>congratulation's ! <?php echo $_GET['success'];?> sucessfully</h1>
		<?php } ?>
		<div class="JT_buttn CP" id="success_okay">Okay !</div>
		</div>
	</div>
</section>
<?php } ?>
<!-- succes popup -->

<?php include 'footer.php';?>