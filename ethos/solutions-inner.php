<?php /* Template Name: Solutions-inner */ ?>
<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php  $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
<section class="cstm_hero s_hero" >
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h1>Solutions</h1>
			</div>
		</div>
	</div>
</section>


<section class="s_inner">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="intro">
					<div class="col-md-6">
						<div class="desc">
							<a href="<?php bloginfo ('url') ?>/solutions" class="g_back"><img src="<?php echo bloginfo('template_directory');?>/assets/img/back.png">Back to Solutions</a>

							<h3>
								<?php if ( 0 != $post->post_parent ) {
 									echo get_the_title( $post->post_parent ), ' '; } ?>
 							</h3>

 							<p><span class="red"><?php echo get_the_title();?></span></p>

							<?php the_content();?>
						</div>
					</div>

					<div class="col-md-6">
						<?php while( have_rows('research') ): the_row(); ?>
						<?php if ( get_row_layout() == 'solutions_video_attributes'): ?> 

						<?php if (get_sub_field('video_url') !== ""): ?>

							<a href="<?php echo get_sub_field('video_url'); ?>" class="modal-video"><img class="ftrd"  src="<?php echo $feat_image; ?>"></a>

						<?php else: ?>
							<img class="ftrd"  src="<?php echo $feat_image; ?>">

						<?php endif ?>
						<?php endif; ?>
						<?php endwhile; ?>
					</div>

					<div class="border"></div>
				</div>

				<?php if (get_sub_field('subcontent_columns') !== ""): ?>

				<div class="s_list">
					<?php while( have_rows('research') ): the_row(); ?>
					<?php if ( get_row_layout() == 'solutions_research_surveys'): ?>
					 
						<?php echo get_sub_field('subcontent_columns'); ?>
						
					<?php endif; ?>
					<?php endwhile; ?>

					<div class="border"></div>
				</div>

			<?php endif; ?>

				<?php if (have_rows('key_features_repeater')) : ?>
				<div class="ftrs">
					<div class="col-md-12">
						<h4>Key Features</h4>
					</div>

						<?php while ( have_rows('key_features_repeater') ) : the_row(); ?>
						<div class="col-md-3 col-sm-6 item_wrap">
							<div class="item">
								<img class="icon" src="<?php echo get_sub_field('icon'); ?>">
								<h5><?php echo get_sub_field('feature_title'); ?></h5>
								<p><?php echo get_sub_field('description'); ?></p>
							</div>
						</div>
						<?php endwhile; ?>

					<div class="border"></div>
				</div>

				<?php endif; ?>
				

				<div class="enq">
					<div class="col-md-12">
						<div class="cfrm">
							<h4>Enquire for more information</h4>
							<?php echo do_shortcode ('[contact-form-7 id="169" title="Contact Us"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

 <?php   endwhile;
            endif;
            // Reset Query
            wp_reset_query();
      ?>

<?php get_footer();?>

