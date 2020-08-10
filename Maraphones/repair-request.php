<?php /* Template Name: Repair Request */ ?>
<?php get_header(); ?>

<section class="service_hero" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-service-support.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h1>Repair request</h1>
					<p>Get quick help thru our Service Channels</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="repair_req">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="intro">
						<h2>Repair Request</h2>
						<p>Please enter your request below and describe the issue</p>
					</div>

					<?php echo do_shortcode("[contact-form-7 id='8427' title='Repair Request']") ?>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="warranty" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-warranty.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h4>Warranty Policies</h4>
					<a href="<?php bloginfo("url") ?>/warranty-policy">Warranty</a>
					<a href="#">Replacement Warranty</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>