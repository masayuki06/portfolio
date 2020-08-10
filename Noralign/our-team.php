<?php /* Template Name: Our Team Page */ ?>
<?php get_header(); ?>


<section class="a_hero a_team_hero" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>Our Team</h1>
			</div>
		</div>
	</div>
</section>

<section class="a_team_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h2><?php the_field('headline'); ?></h2>
				<hr>
				<p><?php the_field('sub_headline'); ?></p>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">

					<?php 
	
					 $args = array(
					 'post_type' => array('team'),
					'posts_per_page' => -1,
									                                     
					);

					$loop = new WP_Query( $args );
					 if ( $loop->have_posts() ) :
						while ( $loop->have_posts() ) :
						$loop->the_post();

					 ?>

					

					<div class="team_wrapper">
						<div class="team_prof">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

							<div class="dsktop_app">

								<?php if (get_field('book_appointment')): ?>
									
									<a class="book" href="<?php bloginfo('url'); ?>/contact-us">BOOK APPOINTMENT</a>

								<?php endif ?>
								<span>
									<?php if (get_field('facebook') != ''): ?>
										<a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook-f"></i></a>
									<?php endif ?>
									<?php if (get_field('instagram') != ''): ?>
										<a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
									<?php endif ?>
								</span>
							</div>

						</div>

						<div class="team_desc">
							<h4><?php the_title(); ?></h4>
							<span><?php the_field('job_title'); ?></span>

							<?php the_content(); ?>
							

							<?php if (have_rows('certifications_repeater')): ?>
								
							
							<span class="certificate">Certifications</span> 
							<ul>
							    <?php  while ( have_rows('certifications_repeater') ) : the_row(); ?>

							    <li><?php the_sub_field('headline'); ?></li>

								<?php endwhile; ?>
							</ul>
							<?php endif ?>
						</div>

						<div class="mb_app team_prof" style="display:none;">
							<?php if (get_field('book_appointment')): ?>
								
								<a class="book" href="<?php bloginfo('url'); ?>/contact-us">BOOK APPOINTMENT</a>

							<?php endif ?>
							<span>
								<?php if (get_field('facebook') != ''): ?>
									<a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook-f"></i></a>
								<?php endif ?>
								<?php if (get_field('instagram') != ''): ?>
									<a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
								<?php endif ?>
							</span>
						</div>
					</div>

					<?php endwhile; ?>		
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>




<?php get_footer();?>