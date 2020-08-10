<?php /* Template Name: About Us Page */ ?>
<?php get_header(); ?>


<section class="a_hero" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>About Us</h1>
			</div>
		</div>
	</div>
</section>

<section class="a_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h2><?php the_field('headline'); ?></h2>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<img class="keyvisual" src="<?php the_field('keyvisual'); ?>" alt="">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer();?>