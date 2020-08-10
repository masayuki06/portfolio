<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<section class="cstm_half accm_half  a_grid" >
	<div class="container-fluid">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="bg" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;" data-opacity="0"></div>
			<div class="col-md-6 col-sm-6 col-xs-12 item_hidden"></div>

			<div class="container">
				<div class=" col-md-6  col-sm-5  col-xs-12 item">
					<div class="desc">
						<h2><?php echo get_the_title(); ?></h2>
						<?php 
						the_content();
						?>

						<hr>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>



<section class="cstm_half a_grid2 " >
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-2 col-sm-2 col-xs-12 item_hidden"></div>

			<div class="bg" style="background: url('<?php the_field('photo'); ?>')no-repeat;" data-opacity="0"></div>
			
			<div class="container">
				<div class=" col-md-10  col-sm-10  col-xs-12 item">
					<div class="desc">
						<img class="tlc" src="<?php the_field('keyvisual'); ?>">
						<?php the_field('body_content'); ?>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>
<?php endwhile; endif;  ?>
<?php get_footer();?>