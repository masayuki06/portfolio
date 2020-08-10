<?php /* Template Name: Career Listing Page */ ?>
<?php get_header(); ?>


<?php 
	

	if ($_GET['country'] != '') {
		
		$meta_query =  array('relation'	=> 'AND');

		$var_push = array(

					'key' => 'country',

					'value' => $_GET['country'],

					'compare' => '=',

				);

	 	array_push($meta_query, $var_push );

	}else{

		$meta_query =  array('relation'	=> 'AND');

		$var_push = array(

					'key' => 'country',

					'value' => 'South Africa',

					'compare' => '=',

				);

	 	array_push($meta_query, $var_push );
	}

	if($_GET['region'] != ''){
		$var_push = array(
			'key' => 'region',
			'value' => $_GET['region'],
			'compage' => '=',
		);
		array_push($meta_query,$var_push);
	}else{

	}


 ?>
<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 left">
				<span>Mara Phones Careers</span>
			</div>

			<div class="col-md-8 col-sm-8 right">
				<!-- <ul>
					<li><a href="#">Features</a></li>
					<li><a href="x-specifications.html">Tech specs</a></li>
					<li><a href="#">Buy</a></li>
					<li><a href="#">Apps</a></li>
					<li><a href="accessories.html">Accessories</a></li>
				</ul> -->
			</div>
		</div>
	</div>
</section>


<section class="c_hero car_eer_head">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>Careers</h1>
				<p>
					<span>View openings for</span>
					<span class="loca_tion">South Africa</span>
					<a href="<?php bloginfo('url'); ?>/careers/?country=South Africa&region=DURBAN">Durban</a> 
					<span class="cspace">|</span>
					<a href="<?php bloginfo('url'); ?>/careers/?country=South Africa&region=JOHANNESBURG" class="">Johannesburg</a>

				</p>
			</div>
		</div>
	</div>
</section>

<section class="car_eer_listing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h2>Openings for <?php echo ($_GET['country'] != '' ? strtoupper($_GET['country']) : 'SOUTH AFRICA'); ?></h2>
				<p class="c_note">Note: We only review the CVs uploaded through the Application form. CVs submitted through other channels may not be reviewed by HR.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">

					<?php 
						$q1 = get_posts(array(
									'fields' => 'ids',
							        'post_type' => array('apply-now'),
									 'tax_query' => array(
														array(
															'taxonomy' => 'types-of-job',
															'field'    => 'slug',
															'terms'    => 'senior-level',
														),
													),
									 'meta_query' => $meta_query,
									'posts_per_page' => -1,
							));

					

					 ?>
					<?php if (!empty($q1)): ?>
						
						<div class="snr_lbl group_lbl">
						<h3>SENIOR LEVEL</h3>
					</div>

					<div class="snr_lvl">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('apply-now'),
						 'tax_query' => array(
											array(
												'taxonomy' => 'types-of-job',
												'field'    => 'slug',
												'terms'    => 'senior-level',
											),
										),
						 'meta_query' => $meta_query,
						'posts_per_page' => -1,
						
						);
						$var_x = 0;			                                     

						$loop = new WP_Query( $args );
						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();

						$var_x++;
						 ?>

						 <div class="item">
							<div class="meta_items">
								<h4><?php the_title(); ?> 
								<?php if (get_field('slots_available') != ''): ?>
									
								<span>(<?php the_field('slots_available'); ?>)</span>
								<?php endif ?></h4>
								<?php if( have_rows('required_skills') ): ?>
								<div class="req_skl">

								<?php  while ( have_rows('required_skills') ) : the_row(); ?>

								<span class="creq">required skills:</span>
								<p><img src="<?php the_sub_field('icon'); ?>" alt=""><?php the_sub_field('title'); ?></p>

								<?php endwhile; ?> 
								</div>
								<?php endif; ?>
								<?php if(get_field('region') != '' ): ?>
								
								<div class="loc">
									<span class="creq">Location</span>
									<p><?php echo get_field('region'); ?></p>
								</div>

								<?php endif ?>
							</div>

							<div class="apply_btn">
								<a class="c_apply" href="<?php the_permalink(); ?>">apply now</a>
							</div>
							
							
						</div>

						<?php endwhile; ?>		
						<?php endif; ?>

						

						
					</div>
					<?php if ($var_x >= 6): ?>

					<div class="cmore snr_more">
						<a id="jmore">MORE JOBS <i class="fa fa-chevron-down"></i></a>
					</div>

					<?php endif ?>
					<?php endif ?>


					<!--  -->
					<?php 
						$q1 = get_posts(array(
									'fields' => 'ids',
							        'post_type' => array('apply-now'),
									 'tax_query' => array(
														array(
															'taxonomy' => 'types-of-job',
															'field'    => 'slug',
															'terms'    => 'technical-level',
														),
													),
									 'meta_query' => $meta_query,
									'posts_per_page' => -1,
							));

					

					 ?>
					<?php if (!empty($q1)): ?>

					<div class="tech_lbl group_lbl">
						<h3>TECHNICAL LEVEL</h3>
					</div>
						
					<div class="tech_lvl">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('apply-now'),
						 'tax_query' => array(
											array(
												'taxonomy' => 'types-of-job',
												'field'    => 'slug',
												'terms'    => 'technical-level',
											),
										),
						 'meta_query' => $meta_query,
						'posts_per_page' => -1,
						
						);
						$var_x = 0;			                                     

						$loop = new WP_Query( $args );
						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();

						$var_x++;
						 ?>

						 <div class="item">
							<div class="meta_items">
								<h4><?php the_title(); ?> 
								<?php if (get_field('slots_available') != ''): ?>
									
								<span>(<?php the_field('slots_available'); ?>)</span>
								<?php endif ?></h4>

								<?php if( have_rows('required_skills') ): ?>
								<div class="req_skl">

								<?php  while ( have_rows('required_skills') ) : the_row(); ?>

								<span class="creq">required skills:</span>
								<p><img src="<?php the_sub_field('icon'); ?>" alt=""><?php the_sub_field('title'); ?></p>

								<?php endwhile; ?> 
								</div>
								<?php endif; ?>
								<?php if(get_field('region') != '' ): ?>
								
								<div class="loc">
									<span class="creq">Location</span>
									<p><?php echo get_field('region'); ?></p>
								</div>

								<?php endif ?>
							</div>

							<div class="apply_btn">
								<a class="c_apply" href="<?php the_permalink(); ?>">apply now</a>
							</div>
							
							
						</div>

						<?php endwhile; ?>		
						<?php endif; ?>

					</div>

					<?php if ($var_x >= 6): ?>

					<div class="cmore tech_more">
						<a id="jmore">MORE JOBS <i class="fa fa-chevron-down"></i></a>
					</div>

					<?php endif ?>
					<?php endif ?>



					<!--  -->
					<?php 
						$q1 = get_posts(array(
									'fields' => 'ids',
							        'post_type' => array('apply-now'),
									 'tax_query' => array(
														array(
															'taxonomy' => 'types-of-job',
															'field'    => 'slug',
															'terms'    => 'business-development-and-sales',
														),
													),
									 'meta_query' => $meta_query,
									'posts_per_page' => -1,
							));

					

					 ?>
					<?php if (!empty($q1)): ?>
					<div class="biz_lbl group_lbl">
						<h3>BUSINESS DEVELOPMENT AND SALES</h3>
					</div>
						
					<div class="biz_lvl">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('apply-now'),
						 'tax_query' => array(
											array(
												'taxonomy' => 'types-of-job',
												'field'    => 'slug',
												'terms'    => 'business-development-and-sales',
											),
										),
						 'meta_query' => $meta_query,
						'posts_per_page' => -1,
						
						);
						$var_x = 0;			                                     

						$loop = new WP_Query( $args );
						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();

						$var_x++;
						 ?>

						 <div class="item">
							<div class="meta_items">
								<h4><?php the_title(); ?> 

								<?php if (get_field('slots_available') != ''): ?>
									
								<span>(<?php the_field('slots_available'); ?>)</span>
								<?php endif ?>
							</h4>

							<?php if( have_rows('required_skills') ): ?>
								<div class="req_skl">

								<?php  while ( have_rows('required_skills') ) : the_row(); ?>

								<span class="creq">required skills:</span>
								<p><img src="<?php the_sub_field('icon'); ?>" alt=""><?php the_sub_field('title'); ?></p>

								<?php endwhile; ?> 
								</div>
								<?php endif; ?>
								<?php if(get_field('region') != '' ): ?>
								
								<div class="loc">
									<span class="creq">Location</span>
									<p><?php echo get_field('region'); ?></p>
								</div>

								<?php endif ?>
							</div>

							<div class="apply_btn">
								<a class="c_apply" href="<?php the_permalink(); ?>">apply now</a>
							</div>
							
							
						</div>

						<?php endwhile; ?>		
						<?php endif; ?>

					</div>

					<?php if ($var_x >= 6): ?>

					<div class="cmore biz_more">
						<a id="jmore">MORE JOBS <i class="fa fa-chevron-down"></i></a>
					</div>

					<?php endif ?>
					<?php endif ?>


					<!--  -->
					<?php 
						$q1 = get_posts(array(
									'fields' => 'ids',
							        'post_type' => array('apply-now'),
									 'tax_query' => array(
														array(
															'taxonomy' => 'types-of-job',
															'field'    => 'slug',
															'terms'    => 'back-office',
														),
													),
									 'meta_query' => $meta_query,
									'posts_per_page' => -1,
							));

					

					 ?>
					<?php if (!empty($q1)): ?>
					<div class="back_lbl group_lbl">
						<h3>BACK OFFICE</h3>
					</div>
						
					<div class="back_lvl">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('apply-now'),
						 'tax_query' => array(
											array(
												'taxonomy' => 'types-of-job',
												'field'    => 'slug',
												'terms'    => 'back-office',
											),
										),
						 'meta_query' => $meta_query,
						'posts_per_page' => -1,
						
						);
						$var_x = 0;			                                     

						$loop = new WP_Query( $args );
						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();

						$var_x++;
						 ?>

						 <div class="item">
							<div class="meta_items">
								<h4><?php the_title(); ?> 
								<?php if (get_field('slots_available') != ''): ?>
									
								<span>(<?php the_field('slots_available'); ?>)</span>
								<?php endif ?></h4>

								<?php if( have_rows('required_skills') ): ?>
								<div class="req_skl">

								<?php  while ( have_rows('required_skills') ) : the_row(); ?>

								<span class="creq">required skills:</span>
								<p><img src="<?php the_sub_field('icon'); ?>" alt=""><?php the_sub_field('title'); ?></p>

								<?php endwhile; ?> 
								</div>
								<?php endif; ?>
								<?php if(get_field('region') != '' ): ?>
								
								<div class="loc">
									<span class="creq">Location</span>
									<p><?php echo get_field('region'); ?></p>
								</div>

								<?php endif ?>
							</div>

							<div class="apply_btn">
								<a class="c_apply" href="<?php the_permalink(); ?>">apply now</a>
							</div>
							
							
						</div>

						<?php endwhile; ?>		
						<?php endif; ?>

					</div>

					<?php if ($var_x >= 6): ?>

					<div class="cmore back_more">
						<a id="jmore">MORE JOBS <i class="fa fa-chevron-down"></i></a>
					</div>

					<?php endif ?>
					<?php endif ?>

				</div>
			</div>
		</div>

		

	</div>
</section>



<?php get_footer();?>