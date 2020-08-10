<?php /* Template Name: Solutions */ ?>
<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<section class="cstm_hero s_hero" >
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>


<section class="s_content s_research">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">

					<?php while( have_rows('solutions_main_layouts') ): the_row(); ?>
					<?php if ( get_row_layout() == 'contents'): ?> 

						<div class="intro">
							<h3><?php echo get_sub_field('section_headline'); ?></h3>
							<?php echo get_sub_field('subheadline'); ?>
						</div>

					<?php endif; ?>
					<?php endwhile; ?>

					<div class="me_nu">
						<ul class="t_menu nav nav-tabs">
						    <li class="active research"><a class="nav-link" data-toggle="tab" href="#tab_research"><img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-research.png">Research</a></li>
						    <li class="consult"><a class="nav-link" data-toggle="tab" href="#tab_consult"><img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-consultancy.png">Consultancy</a></li>
						    <li class="learn"><a class="nav-link" data-toggle="tab" href="#tab_learn"><img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-learning.png">Learning</a></li>
						    <li class="soft"><a class="nav-link" data-toggle="tab" href="#tab_software"><img src="<?php echo bloginfo('template_directory');?>/assets/img/icon-software.png">Software</a></li>
						    <li class="stag"><a class="nav-link" data-toggle="tab" href="#tab_stag"><img src="<?php echo bloginfo('template_directory');?>/assets/img/solutions-ico-stagfox@2x.png">StagFox</a></li>
						</ul>
					</div>
				</div>


				
				<div class="tab-content" id="sc_tab">
					<?php $i = 0; ?>

					<?php while( have_rows('solutions_main_layouts') ): the_row(); ?>
					<?php if ( get_row_layout() == 'solutions_intro'): ?> 
					<?php while ( have_rows('solutions_repeater') ) : the_row(); ?>	

					<!-- Tab -->
					<div id="<?php echo get_sub_field('tab_id'); ?>" class="tab-pane fade in <?php if ( $i == 0 ) : echo 'active'; else: echo ''; endif; ?>">
						<div class="s_main">
							<div class="col-md-6 col-sm-6">
								<div class="desc">
									<h4><?php echo get_sub_field('solution_title'); ?></h4>
									<?php echo get_sub_field('content'); ?>

										<div class="logos">

											<?php while ( have_rows('logos_repeater') ) : the_row(); ?>	
												<a target="_blank" href="<?php echo get_sub_field('logo_url'); ?>"><img class="logo_surv" src="<?php echo get_sub_field('logo'); ?>"></a>
											<?php endwhile; ?>

										</div>
									
								</div>	
							</div>

							<div class="col-md-6 col-sm-6">
								<img class="ftrd" src="<?php echo get_sub_field('solution_image'); ?>">
							</div>
						</div>
					</div>
					<?php $i++; ?>
					<?php endwhile; ?>

					</div>
					
					<?php endif; ?>
					<?php endwhile; ?>

				



				<?php while( have_rows('solutions_main_layouts') ): the_row(); ?>
				<?php if ( get_row_layout() == 'interested_in_finding_out_more'): ?> 

					<div class="find">
						<h4><?php echo get_sub_field('section_title'); ?></h4>
						<?php echo get_sub_field('subheadline'); ?>

						<a href="<?php echo get_sub_field('clickthrough_url'); ?>" class="bt_more">Get in touch</a>
					</div>

				<?php endif; ?>
				<?php endwhile; ?>

			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>


<?php get_footer();?>