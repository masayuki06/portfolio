<?php /* Template Name: Register Interest */ ?>
<?php get_header(); ?>


<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-4 left">
				<span>New Models</span>
			</div>
		</div>
	</div>
</section>


<section class="mara_reg_interest" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/new-models/register-interest-large-bg@2x.jpg')no-repeat;" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="cta_reg">
					<a><img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-models/cta-interest.png"></a>
				</div>

				<div class="wrapper">
					<div class="frm_wrap" >
						<div class="intro">
							<span class="red">KNOW MORE</span>
							<h4>Register your Interest</h4>
							<p>Enter your details and we’ll keep you up-to-date on the release of your new Maraphone</p>
						</div>

						 <?php echo do_shortcode('[contact-form-7 id="14191" title="Register your interest"]'); ?>
					</div>


					<div class="ftrd"  data-aos-once="true" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="200">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/new-models/newmodels-teaser@1_5x.png">
					</div>
				</div>
			    
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>