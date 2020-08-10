<?php get_header(); ?>



<section class="a_hero training_hero" style="background:url('<?php echo get_the_post_thumbnail_url(148); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>News</h1>
			</div>
		</div>
	</div>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="training_content single_training">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<div class=" single_wrapper">

					<!-- for image -->
					<!-- <img class="ftrd" src="<?php echo get_template_directory_uri(); ?>/assets/img/training-singfle.jpg" alt=""> -->

					<!--for video  -->
					<div class="go-back"><a href="<?php bloginfo('url'); ?>/news/">&#8249; Go back</a>
			 		</div>

					<?php $vid_url = get_field('video_url'); ?>

					<?php if ($vid_url != ''): ?>
						
						<iframe class="resp-iframe" src="<?php echo $vid_url; ?>" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>

					<?php else: ?>

						<img class="ftrd" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					<?php endif ?>
					 


					<div class="desc">
						<span class="date"><?php echo get_the_date(); ?></span>

						<h4><?php the_title();?></h4>

						<?php the_content();?>

						<span class="share">SHARE:
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 'newwindow', 'width=800,height=500'); return false;"><i class="fa fa-facebook-f"> </i></a>
							
							<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank" onclick="window.open('https://twitter.com/home?status=<?php the_permalink(); ?>', 'newwindow', 'width=800,height=500'); return false;"><i class="fa fa-twitter"></i></a>
						</span>
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
