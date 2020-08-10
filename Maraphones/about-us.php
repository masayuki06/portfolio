<?php /* Template Name: About Us Page */ ?>
<?php get_header(); ?>


<section class="about_intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h1><?php the_title(); ?></h1>
					<p><?php the_field('sub_headline'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>