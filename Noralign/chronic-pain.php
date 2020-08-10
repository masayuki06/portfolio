<?php /* Template Name: Chronic Pain Page */ ?>
<?php get_header(); ?>



<section class="a_hero s_hero" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/who-we-are-hero.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>Functional Rehabilitation</h1>
			</div>
		</div>
	</div>
</section>

<section class="services secrvices_chronic">
	<div class="container">
		<div class="row item_wrapper">
			<div class="col-md-6 item">
				<img class="ftrd" src="<?php echo get_template_directory_uri(); ?>/assets/img/who-we-are-thumb.jpg" alt="">
			</div>

			<div class="col-md-6 item">
				<div class="desc_wrapper">
					<h4>Chronic Pain</h4>
					<hr>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; endif; ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="description">
					<?php the_field('other_description'); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="therapist">
				<div class="col-md-12 intro">
					<h2>Therapist</h2>
					<hr>
				</div>

				<?php $post_objects = get_field('therapist'); ?>

				<?php if ($post_objects): ?>
				
				<?php foreach ( $post_objects as $post ): ?>
					 <?php setup_postdata($post); ?>
				<div class="col-md-6 col-sm-6 item">
					<div class="team_wrapper">
						<div class="team_prof">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							<a class="book" href="<?php bloginfo('url'); ?>/contact-us">BOOK APPOINTMENT</a>
						</div>

						<div class="team_desc">
							<h4><?php the_title(); ?></h4>
							<span><?php the_field('job_title'); ?></span>
						</div>
					</div>
				</div>

				<?php endforeach ?>


				<?php endif ?>
				

				
			</div>
		</div>
		
	</div>
</section>

<?php get_footer();?>