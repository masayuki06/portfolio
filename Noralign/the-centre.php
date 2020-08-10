<?php /* Template Name: The Centre Page */ ?>
<?php get_header(); ?>


<section class="a_hero " style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>The Centre</h1>
			</div>
		</div>
	</div>
</section>

<section class="facilities">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="wrapper">
    					<h2><?php the_field('title'); ?></h2>
    					<hr>
    					<p><?php the_field('description'); ?></p>

    					<div class="f-slider">
							<ul class="slider-for">

								<?php  while ( have_rows('image_repeater') ) : the_row(); ?>

								<li class="bg" style="background:url('<?php the_sub_field('photo'); ?>')no-repeat;"> 
									<div class="caption"><?php the_sub_field('caption'); ?></div>
						        </li>

								<?php endwhile; ?>  

						        
								
								
						    </ul>

							<div class="imgtabs slider-nav">
								
								<?php  while ( have_rows('image_repeater') ) : the_row(); ?>

								<div class="th-bg" style="background:url('<?php the_sub_field('photo'); ?>')no-repeat;"></div>

								<?php endwhile; ?>  

								
								
								
							</div>
						</div>
						
    				</div>
    			</div>
    		</div>
    	</div>
    </section>



<?php get_footer();?>
