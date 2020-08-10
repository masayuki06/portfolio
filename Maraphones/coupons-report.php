<?php /* Template Name: Coupons report */ ?>
<?php get_header(); ?>

<section class="service_hero" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-service-support.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h1><?php the_title(); ?></h1>
					<!-- <p><?php the_field('sub_headline'); ?>#</p> -->
				</div>
			</div>
		</div>
	</div>
</section>

<section class="repair_req warranty-policy">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="warranty-container">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif; ?>
					</div>

					<!-- Warranty here -->
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
					&nbsp;<br><br>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>