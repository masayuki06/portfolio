<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

<section class="h_hero">
	<ul class="hero_slider">
	    
	    <?php  while ( have_rows('featured_slider') ) : the_row(); ?>

	    <li class="bg <?php echo (get_sub_field('align') ? 'center_align' : ''); ?>" style="background:url('<?php the_sub_field('keyvisual'); ?>')no-repeat;">
	    	<div class="container">
	    		<h1><?php the_sub_field('title'); ?></h1>
	    		<hr>
	    		<p><?php the_sub_field('description'); ?></p>

	    		<a class="discover" href="<?php the_sub_field('url'); ?>">DISCOVER</a>
	    	</div>
	    </li>

		<?php endwhile; ?>  

	    
	</ul>
</section>

<section class="h_content">
	<div class="container">
		<div class="row">
			<div class="choose_wrapper">
				<div class="col-md-6  item">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</div>

				<div class="col-md-6  item">
					<div class="description">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="our_services">
				<div class="col-md-12 intro">
					<h2>Our Services</h2>
					<hr>
					<p><?php the_field('description'); ?></p>
				</div>


				<?php  while ( have_rows('services_repeater') ) : the_row(); ?>

				<div class="col-md-6 col-sm-6 item">
					<a href="<?php the_sub_field('url'); ?>"><img class="icon" src="<?php the_sub_field('icon'); ?>" alt=""></a>
					<div class="meta">
						<h4><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a></h4>
						<p><?php the_sub_field('description'); ?></p>

						<a class="read" href="<?php the_sub_field('url'); ?>">Learn More</a>
					</div>
				</div>

				<?php endwhile; ?>  

				

				
			</div>
		</div>
	</div>
</section>

<section class="schedule">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php the_field('headline_sc'); ?></h2>
				<p><?php the_field('sub_headline_sc'); ?></p>
				<a href="<?php the_field('link_url'); ?>"><?php the_field('link_label'); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>