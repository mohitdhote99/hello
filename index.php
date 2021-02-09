<?php 
include 'header.php';
if (isset($_GET['error'])){
	$err = unserialize($_GET['error']);
}
if (isset($_GET['Up'])){
	$data = JT_select($_GET['Up']);
	if(isset($data) && !empty($data) && $data !=='false'){
		$push = unserialize($data['data']);
		$push['name'] = $data['name'];
		$push['email'] = $data['email'];
		echo '<pre>';
		print_r($push);
		echo '</pre>';

	}
}

?>

<section class="heading_"><h1>Fill Form For Registration :-</h1></section>
<section id="JT"><div>

<form method="post" action="action/action.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo isset($_GET['Up'])?$_GET['Up']:''; ?>">
<div>
	<section id="for_reset">
				<!-- perform on url method -->
		<?php if(isset($_GET['Up'])){ ?><div class="clr two"><?php } ?>
		<?php if(!isset($_GET['Up'])){ ?><div class="clr three"><?php } ?>

			<div class="FL">
				<label>Email</label>
				<div class="JT_input"><input value="<?php echo isset($push['email'])?$push['email']:''; ?>" type="email" name="email"></div>
				<p class="error"><?php echo isset($err['email'])?$err['email']:''; ?></p>
			</div>
			<div class="<?php echo isset($_GET["Up"])?'FR':'FL';?>">
				<label>Name</label>
				<div class="JT_input"><input value="<?php echo isset($push['name'])?$push['name']:''; ?>" type="text" name="name"></div>
				<p class="error"><?php echo isset($err['name'])?$err['name']:''; ?></p>
			</div>
		<!-- perform on url method -->
		<?php if (!isset($_GET['Up'])){ ?>
			<div class="FR">
				<label>Passsword</label>
				<div class="JT_input PASS_EYE"><input type="password" name="password">
					<label class="pass_icon CP">view</label>
				</div>
				<p class="error"><?php echo isset($err['password'])?$err['password']:''; ?></p>
			</div>
		<?php } ?>

		</div>

		<div class="clr two">
			<div class="FL">
				<label>Contact no</label>
				<div class="JT_input"><input value="<?php echo isset($push['number'])?$push['number']:''; ?>" type="text" name="number"></div>
				<p class="error"><?php echo isset($err['number'])?$err['number']:''; ?></p>
			</div>
			<div class="FR">
				<label>Pincode</label>
				<div class="JT_input"><input value="<?php echo isset($push['PIN_CODE'])?$push['PIN_CODE']:''; ?>" type="text" name="PIN_CODE"></div>
				<p class="error"><?php echo isset($err['PIN_CODE'])?$err['PIN_CODE']:''; ?></p>
			</div>
		</div>
		<!-- data array serialize -->
<!-- 		<section class="JT_main_heading"><div>Fill Form For Registration :-</div></section> -->
		<div class="clr two">
			<div>
				<label>Dob</label>
				<div class="date_Up">
					<input value="<?php echo isset($push['dob'])?$push['dob']:''; ?>" type="date" name="dob" id="birthday">
					<label></label>
				</div>
				<p class="error"><?php echo isset($err['dob'])?$err['dob']:''; ?></p>
			</div>
			<div class="FR">
				<label>Meeting At</label>
				<div class="Time_Up">
					<input value="<?php echo isset($push['time'])?$push['time']:''; ?>" id="time" type="time" name="time">
					<label></label>
				</div>
				<p class="error"><?php echo isset($err['time'])?$err['time']:''; ?></p>
			</div>
		</div>
		<div class="clr">
			<div>
				<label>Fav Color</label>
				<div class="Color_Up">
					<label for="color_" class="color CP">Favourite Color</label>
					<input value="<?php echo isset($push['color'])?$push['color']:''; ?>" id="color_" type="color" name="color">
					<label class="color_set"></label>
					<label class="JT_buttn CP" id="color_check">check</label>
				</div>
				<p class="error"><?php echo isset($err['color'])?$err['color']:''; ?></p>
			</div>
		</div>
		<div class="clr">
			<div>
				<label>File</label>
				<div class="file_Up">
					<label for="DP" class="file CP">Set Profile</label>
					<?php if (isset($push['document'])&&$push['document'] !==''){ ?>
						<input value="<?php echo $push['document']; ?>" type="hidden" name="prevdocument" id="DP">
					<?php } ?>

						<input value="" type="file" name="document" id="DP">
				</div>
				<p class="error"><?php echo isset($err['document'])?$err['document']:''; ?></p>
			</div>
		</div>
		<!-- </div> -->
		<div class="three clr">
			<div>
				<label>10TH result</label>
				<div class="clr rad">
					<div class="JT_radio">
						<input type="radio" name="10TH" <?php echo isset($push['10TH'])&&$push['10TH'] == 'fail'?'checked="checked"':''; ?> value="fail" id="tenTHfail">
						<label class="my_radio CP tenTH" for="tenTHfail">Fail</label>
					</div>
					<div class="JT_radio">
						<input type="radio" name="10TH" <?php echo isset($push['10TH'])&&$push['10TH'] == 'pass'?'checked="checked"':''; ?> value="pass" id="tenTHpass">
						<label class="my_radio CP tenTH" for="tenTHpass">Pass</label>
					</div>
				</div>
				<p class="error"><?php echo isset($err['10TH'])?$err['10TH']:''; ?></p>
			</div>
			<div>
				<label>12th result</label>
				<div class="clr rad">
				<div class="JT_radio">
					<input type="radio" name="12TH" <?php echo isset($push['12TH'])&&$push['12TH'] == 'fail'?'checked="checked"':''; ?> value="fail" id="tweTHfail">
					<label class="my_radio CP tweTH" for="tweTHfail">Fail</label>
				</div>
				<div class="JT_radio">
					<input  type="radio" name="12TH" <?php echo isset($push['12TH'])&&$push['12TH'] == 'pass'?'checked="checked"':''; ?> value="pass" id="tweTHpass">
					<label class="my_radio CP tweTH" for="tweTHpass">Pass</label>
				</div>
				</div>
				<p class="error"><?php echo isset($err['12TH'])?$err['12TH']:''; ?></p>
			</div>
			<div>
				<label>Gender</label>
				<div class="clr rad">
				<div class="JT_radio">
					<input type="radio" name="gender" value="male" <?php echo isset($push['gender'])&&$push['gender'] == 'male'?'checked="checked"':''; ?> id="male"><label class="my_radio CP gender" for="male">Male</label></div>
				<div class="JT_radio">
					<input type="radio" name="gender" value="female" <?php echo isset($push['gender'])&&$push['gender'] == 'female'?'checked="checked"':''; ?> id="female"><label class="my_radio CP gender" for="female">Female</label></div>
				</div>
				<p class="error"><?php echo isset($err['gender'])?$err['gender']:''; ?></p>
			</div>
		</div>
	</section>

<!-- submit -->
		<section class="_cent_lay">
			<div class="clr">
			<?php if(isset($_GET['Up'])){ ?>
				<div class="FL ML"><input type="submit" name="JT_Update" class="CP JT_buttn" id="paginat_"></div>
				<div class="FL"><input type="reset" name="reset" class="CP JT_buttn RESet_" id="paginat_"></div>
			<?php }else{?>
				<div class="FL ML"><input type="submit" name="JT_submit" class="CP JT_buttn" id="paginat_"></div>
			<?php } ?>
			</div>
		</section>
<!-- submit -->

<div>
</form>

</div></section>
<?php include 'footer.php'; ?>