<?php /* Template Name: Cookie Policy Page */ ?>
<?php get_header(); ?>



<section class="terms cookie">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h1>Cookie Policy</h1>

					<div class="cookie_content">
						
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif; ?>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>
