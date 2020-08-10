<?php /* Template Name: Contact Us Page */ ?>
<?php get_header(); ?>


<section class="c_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1><?php the_field('headline'); ?></h1>
				<p><?php the_field('sub_headline'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="c_content">
	<div class="container">
		<div class="row">
			<div class="col-col-md-12">
				<div class="c_frm">
					<p>Please complete the form below to get in touch</p>

					<?php echo do_shortcode('[contact-form-7 id="242" title="Contact Us"]'); ?>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer();?>