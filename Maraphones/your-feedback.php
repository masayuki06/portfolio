<?php /* Template Name: Your Feedback Page */ ?>
<?php get_header(); ?>


<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-4 left">
				<span>Your Feedback</span>
			</div>
		</div>
	</div>
</section>

<section class="bg_white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Tell us what you think</h1>
			</div>
		</div>
	</div>
</section>


<section class="feedback" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="phone">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedback-phone@2x.png" alt="">
					</div>

					<h3><span class="num">1</span>How would you rate your experience on your recent Mara Phone purchase?</h3>

					<div class="frm_wrapper">
						<!-- <form action="" method="get" accept-charset="utf-8">
							<fieldset>
								<label class="lbl">Your rating</label>
								<div class="r_item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt=""></div>
							</fieldset>

							
						</form> -->
						<?php echo do_shortcode('[contact-form-7 id="4009" title="Feedback"]'); ?>


					</div>

					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>