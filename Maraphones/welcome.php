<?php /* Template Name: Welcome Page */ ?>
<?php get_header(); ?>


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


<section class="mara_act act_welcome">
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
							<h3>Account Dashboard</h3>
							<div class="bg_welcome" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/welcome-bg.jpg')no-repeat;">
								<h4>Welcome</h4>
							</div>

							<p>Welcome to your account. Here you can manage all your historical purchases and your profile. For questions and enquiries please don’t hesitate to contact us at: <a href="mailto:customercare@maraphones.com">customercare@maraphones.com</a></p>

							
						</div>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>