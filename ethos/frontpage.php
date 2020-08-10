<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>




<?php while ( have_posts() ) : the_post(); ?>

<section class="h_hero" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/home-hero-bg@2x.png')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="h_slider">

					<?php while( have_rows('homepage') ): the_row(); ?>
					<?php if ( get_row_layout() == 'hero_slider'): ?> 

						<?php while ( have_rows('slider_repeater') ) : the_row(); ?>

							<div class="item">
								<div class="col-md-7">
									<div class="h_desc">
										<h1><?php echo get_sub_field('headline'); ?></h1>
										<?php echo get_sub_field('subheadline'); ?>
										<a href="<?php echo get_sub_field('clickthrough_url'); ?>" class="bt_more">Learn More <i class="arrow_right"></i></a>
									</div>
								</div>

								<div class="col-md-5">
									<div class="img_wrap">
										<img class="ftrd" src="<?php echo get_sub_field('slide_image'); ?>">
									</div>
								</div>
							</div>

						<?php endwhile; ?>

					<?php endif; ?>
					<?php endwhile; ?>

				</div>
			</div>
		</div>
	</div>
</section>


<section class="h_intro">
	<div class="container">
		<div class="row">

			<?php while( have_rows('homepage') ): the_row(); ?>
			<?php if ( get_row_layout() == 'intro'): ?> 

			<div class="wrapper">
				<div class="col-md-7 col-sm-7">
					<div class="desc">
						<h2><?php echo get_sub_field('section_headline'); ?></h2>
						<?php echo get_sub_field('content'); ?>
						<a href="<?php echo get_sub_field('clickthrough_url'); ?>" class="bt_more">Learn More <i class="arrow_right"></i></a>
					</div>
				</div>

				<div class="col-md-5 col-sm-5">
					<div class="img_wrap">
						<img src="<?php echo get_sub_field('section_image'); ?>">
					</div>
				</div>
			</div>

			<?php endif; ?>
			<?php endwhile; ?>

		</div>
	</div>
</section>


<section class="h_how">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<?php while( have_rows('homepage') ): the_row(); ?>
				<?php if ( get_row_layout() == 'contents'): ?> 		

				<div class="col-md-12 intro">
					<h2><?php echo get_sub_field('section_headline'); ?></h2>
					<?php echo get_sub_field('subheadline'); ?>
				</div>

				<?php endif; ?>
				<?php endwhile; ?>


				<div class="item_wrap">
					<div class="row gro_up">

						<?php while( have_rows('homepage') ): the_row(); ?>
						<?php if ( get_row_layout() == 'content_research'): ?> 		

							<div class="col-md-6 item item_img">
								<img class="ftrd" src="<?php echo get_sub_field('section_image'); ?>">
							</div>

							<div class="col-md-6 item">
								<div class="desc">
									<img class="icon" src="<?php echo get_sub_field('icon'); ?>">
									<h4><?php echo get_sub_field('section_title'); ?></h4>
									<?php echo get_sub_field('subheadline'); ?>
									<?php echo get_sub_field('contents'); ?>
								</div>
							</div>

						<?php endif; ?>
						<?php endwhile; ?>
					</div>


					<div class="row gro_up">

						<?php while( have_rows('homepage') ): the_row(); ?>
						<?php if ( get_row_layout() == 'content_consultancy'): ?> 		

							<div class="col-md-6 item item_img">
								<img class="ftrd" src="<?php echo get_sub_field('section_image'); ?>">
							</div>

							<div class="col-md-6 item">
								<div class="desc">
									<img class="icon" src="<?php echo get_sub_field('icon'); ?>">
									<h4><?php echo get_sub_field('section_title'); ?></h4>
									<?php echo get_sub_field('subheadline'); ?>
									<?php echo get_sub_field('contents'); ?>
								</div>
							</div>

						<?php endif; ?>
						<?php endwhile; ?>
					</div>

					<div class="row gro_up">

						<?php while( have_rows('homepage') ): the_row(); ?>
						<?php if ( get_row_layout() == 'content_learning'): ?> 		

							<div class="col-md-6 item item_img">
								<img class="ftrd" src="<?php echo get_sub_field('section_image'); ?>">
							</div>

							<div class="col-md-6 item">
								<div class="desc">
									<img class="icon" src="<?php echo get_sub_field('icon'); ?>">
									<h4><?php echo get_sub_field('section_title'); ?></h4>
									<?php echo get_sub_field('subheadline'); ?>
									<?php echo get_sub_field('contents'); ?>
								</div>
							</div>
							
						<?php endif; ?>
						<?php endwhile; ?>
					</div>

					<div class="row gro_up">

						<?php while( have_rows('homepage') ): the_row(); ?>
						<?php if ( get_row_layout() == 'content_software'): ?> 		

							<div class="col-md-6 item item_img">
								<img class="ftrd" src="<?php echo get_sub_field('section_image'); ?>">
							</div>

							<div class="col-md-6 item">
								<div class="desc">
									<img class="icon" src="<?php echo get_sub_field('icon'); ?>">
									<h4><?php echo get_sub_field('section_title'); ?></h4>
									<?php echo get_sub_field('subheadline'); ?>
									<?php echo get_sub_field('contents'); ?>
								</div>
							</div>
							
						<?php endif; ?>
						<?php endwhile; ?>
					</div>

					
					<div class="bt_discover">
						<span class="dot"><img src="<?php echo bloginfo('template_directory');?>/assets/img/dot.png"></span>
						<a href="<?php echo bloginfo('url');?>/solutions">Discover more</a>
					</div>

					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>
</section>


<section class="h_tools">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<div class="item">

						<?php while( have_rows('homepage') ): the_row(); ?>
						<?php if ( get_row_layout() == 'our_online_tools'): ?> 	

							<h3><?php echo get_sub_field('section_headline'); ?></h3>
							<?php echo get_sub_field('subheadline'); ?>

							<div class="logo">
								<div class="tool_slider">
									<?php while ( have_rows('tools_repeater') ) : the_row(); ?>

										<a href="<?php echo get_sub_field('product_url'); ?>" target="_blank"><img src="<?php echo get_sub_field('product_image'); ?>"></a>
										
									<?php endwhile; ?>
								</div>
							</div>

						<?php endif; ?>
						<?php endwhile; ?>

					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="sec_ceo">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<div class="desc">

						<?php while( have_rows('homepage') ): the_row(); ?>
						<?php if ( get_row_layout() == 'a_word_from_our_ceo'): ?> 

							<h3>A word from our CEO</h3>
							
							<div class="grey_box"></div>
							<div class="box">
								<img class="ceo" src="<?php echo get_sub_field('section_image'); ?>">
								<div class="msg">
									<?php echo get_sub_field('name_and_designation'); ?>
									<?php echo get_sub_field('contents'); ?>
								</div>
							</div>

						<?php endif; ?>
						<?php endwhile; ?>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer();?>