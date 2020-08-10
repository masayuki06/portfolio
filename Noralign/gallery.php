<?php /* Template Name: Gallery Page */ ?>
<?php get_header(); ?>



<section class="a_hero" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>Gallery</h1>
			</div>
		</div>
	</div>
</section>

<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="gallery-images">
				 	<!-- <?php echo do_shortcode('[easyinstagramfeed]');?> -->
				 	
				 </div>
			</div>
		</div>
	</div>
</section>





<?php get_footer();?>