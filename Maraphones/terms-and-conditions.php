<?php /* Template Name: Terms and Conditions Page */ ?>
<?php get_header(); ?>


<section class="terms">
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
