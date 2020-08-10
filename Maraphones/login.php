<?php /* Template Name: Login Page */ ?>
<?php get_header(); ?>

<?php if (is_user_logged_in()): ?>
	
	<script type="text/javascript">window.location.href='<?php echo bloginfo('url');?>/dasboard/'</script>

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


<section class="mara_login" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-login.jpg')no-repeat;" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h4>Login to your account</h4>
					<form action="<?php echo bloginfo('url');?>/wp-login.php" method="POST" accept-charset="utf-8">
						<input type="text" name="log" placeholder="Email">
						<input type="password" name="pwd" placeholder="Password">

						<?php if ($_GET['login'] == 'failed'): ?>
							<p style="color: red;">Incorrect Email/Password</p>
						<?php endif ?>
						<input type="submit" name="sub" value="LOGIN">
						<!-- <a href="" class="forgot">Forgot your password?</a> -->
					</form>
				</div>
			    
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>