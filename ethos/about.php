<?php /* Template Name: About us */ ?>
<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<section class="cstm_hero a_hero" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/header-swirl-bg.png')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>


<section class="cstm_half a_grid " >
	<div class="container-fluid">
		<div class="row">

			<?php while( have_rows('about_us_layouts') ): the_row(); ?>
			<?php if ( get_row_layout() == 'our_history'): ?> 

				<div class="col-md-6 col-sm-6 col-xs-12 item_hidden"></div>

				<div class="bg" style="background: url('<?php echo get_sub_field('section_image'); ?>')no-repeat;" data-opacity="0"></div>
				
				<div class="container">
					<div class=" col-md-5  col-sm-5  col-xs-12 item">
						<div class="desc">
							<hr>
							<h2><?php echo get_sub_field('section_title'); ?></h2>
							<?php echo get_sub_field('subheadline'); ?>
						</div>

					</div>
				</div>

			<?php endif; ?>
			<?php endwhile; ?>

		</div>
	</div>
</section>


<section class="cstm_half accm_half  a_grid2 " >
	<div class="container-fluid">
		<div class="row">

			<?php while( have_rows('about_us_layouts') ): the_row(); ?>
			<?php if ( get_row_layout() == 'knowledge_and_experience'): ?> 
			
				<div class="bg" style="background: url('<?php echo get_sub_field('section_image'); ?>')no-repeat;" data-opacity="0"></div>
				<div class="col-md-6 col-sm-6 col-xs-12 item_hidden"></div>

				<div class="container">
					<div class=" col-md-5  col-sm-5  col-xs-12 item">
						<div class="desc">
							<hr>
							<h2><?php echo get_sub_field('section_title'); ?></h2>
							<?php echo get_sub_field('subheadline'); ?>
						</div>
					</div>
				</div>

			<?php endif; ?>
			<?php endwhile; ?>
			
		</div>
	</div>
</section>

<section class="cstm_half a_grid3 " >
	<div class="container-fluid">
		<div class="row">

			<?php while( have_rows('about_us_layouts') ): the_row(); ?>
			<?php if ( get_row_layout() == 'global_impact'): ?> 

				<div class="col-md-6 col-sm-6 col-xs-12 item_hidden"></div>
				<div class="bg" style="background: url('<?php echo get_sub_field('section_image'); ?>')no-repeat;" data-opacity="0"></div>
				
				<div class="container">
					<div class=" col-md-5  col-sm-5  col-xs-12 item">
						<div class="desc">
							<hr>
							<h2><?php echo get_sub_field('section_title'); ?></h2>
							<?php echo get_sub_field('subheadline'); ?>
						</div>
					</div>
				</div>

			<?php endif; ?>
			<?php endwhile; ?>

		</div>
	</div>
</section>


<section class="a_award">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<div class="item">

						<?php while( have_rows('about_us_layouts') ): the_row(); ?>
						<?php if ( get_row_layout() == 'multi_awards'): ?> 

							<h4><?php echo get_sub_field('section_headline'); ?></h4>
							<?php echo get_sub_field('subheadline'); ?>

							<img class="ftrd" src="<?php echo get_sub_field('section_image'); ?>">
							<span class="yr">2019</span>
							<div class="award_slider">
								
								<?php while ( have_rows('awards_repeater') ) : the_row(); ?>

										
									<div class="slide">				
										<div class="meta">
											<div class="i_tem"><?php echo get_sub_field('award_title'); ?></div>
										</div>
									</div>
									<?php endwhile; ?>

								

							</div>

						<?php endif; ?>
						<?php endwhile; ?>

						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="a_proj">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<?php while( have_rows('about_us_layouts') ): the_row(); ?>
				<?php if ( get_row_layout() == 'over_300_projects_completed'): ?> 

					<h3><?php echo get_sub_field('section_title'); ?></h3>
					<img class="ftrd" src="<?php echo get_sub_field('section_image'); ?>">

				<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>


<!-- <section class="a_clients">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h4>Happy Clients</h4>

				<div class="logos">

					<?php while( have_rows('about_us_layouts') ): the_row(); ?>
					<?php if ( get_row_layout() == 'happy_clients'): ?> 	

						<?php while ( have_rows('clients_repeater') ) : the_row(); ?>

							<a><img src="<?php echo get_sub_field('client_logo'); ?>"></a>

						<?php endwhile; ?>

					<?php endif; ?>
					<?php endwhile; ?>
					
				</div>
			</div>
		</div>
	</div>
</section> -->
<?php endwhile; ?>

<?php get_footer();?>


