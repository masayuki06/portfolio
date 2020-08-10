<?php /* Template Name: Account Page */ ?>
<?php get_header(); ?>

<?php if (!is_user_logged_in()): ?>
	
	<script type="text/javascript">window.location.href='<?php echo bloginfo('url');?>/login/'</script>

<?php endif ?>
<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-4 left">
				<span>Mara Phones Dashboard</span>
			</div>
		</div>
	</div>
</section>

<section class="bg_white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>My account</h1>
			</div>
		</div>
	</div>
</section>

<?php 
	$uid = get_current_user_id();

	$user_info = get_userdata($uid);


	if (isset($_POST['sub_up'])) {
		
		if ($_POST['pwd'] == $_POST['pwd2']) {
			
			// wp_set_password($_POST['pwd'],$uid);

			

		}else{
			$x = 12;
		}
		update_user_meta($uid, 'first_name', $_POST['uname']);
		update_user_meta($uid, 'last_name', $_POST['lname']);
		update_user_meta($uid, 'user_email', $_POST['uemail']);

	}
 ?>

<section class="mara_act act_profile">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-3">
					<ul class="side_menu">
					   <?php include 'dash-side.php'; ?>
					</ul>
			    </div>

			    <div class="col-md-9">
			    	<div class="accordion_wrapper prof_details">
			    		<div class="content">
							<h3>My Details</h3>

							<form action="" method="POST" accept-charset="utf-8">
								<input type="text" name="uname" value="<?php echo $user_info->first_name; ?>" placeholder="First Name">
								<input type="text" name="lname" value="<?php echo $user_info->last_name; ?>" placeholder="Last Name">

								<input type="email" name="uemail" value="<?php echo $user_info->user_email; ?>" placeholder="Email">
								<input type="password" name="pwd" value="" placeholder="Password">
								<input type="password" name="pwd2" value="" placeholder="Confirm Password">

								<?php if (isset($_POST['sub_up'])): ?>
									
									<p>Saved!</p>

								<?php endif ?>

								<?php if ($x == 12): ?>
									
									<p>Password Doesn't Match</p>									
								<?php endif ?>
								<input type="submit" name="sub_up" value="UPDATE">
							</form>
						</div>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>