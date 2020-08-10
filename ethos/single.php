<?php /* Template Name: Single  */ ?>
<?php get_header(); ?>



<section class="cstm_hero m_hero" >
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h1>Media</h1>
			</div>
		</div>
	</div>
</section>


<section class="m_content m_inner">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>

					<div class="item">
						<a href="<?php bloginfo ('url') ?>/media" class="g_back"><img src="<?php echo bloginfo('template_directory');?>/assets/img/back.png">Go Back</a>
						<h4><?php the_title();?></h4>
						<p class="au_thor">by <?php the_author(); ?> | <?php echo get_the_date( 'F jS, Y' ); ?></p>

						
						<div class="bg" style="background:url('<?php echo $feat_image; ?>')no-repeat;"></div>

						<div class="sha_re">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 'newwindow', 'width=800,height=500'); return false;"><i class="fa fa-facebook"></i></a>

							<a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?> " target="_blank" onclick="window.open('https://twitter.com/intent/tweet?text=<?php the_permalink(); ?> ', 'newwindow', 'width=800,height=500'); return false;"><i class="fa fa-twitter"></i></a>

							<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source=" target="_blank" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source=', 'newwindow', 'width=800,height=500'); return false;"><i class="fa fa-linkedin"></i></a>

							<span class="red">Share</span>
						</div>

						<div class="desc">
							<?php echo the_content(); ?>
						</div>
					</div>


					<?php endwhile;
						endif;
						// Reset Query
						wp_reset_query();
					?>


				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>
