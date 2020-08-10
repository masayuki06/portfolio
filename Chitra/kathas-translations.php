<?php /* Template Name: Kathas - Translations */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="cstm_hero trans_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbgs-kathas-translations.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1><?php echo get_the_title(); ?></h1>
					<p><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;  ?>
<section class="k_translations">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
					<?php          
						$count = 0;     
						$args = array(
							'post_type' => array('translation'),
							'order'=> 'DESC',
						   'posts_per_page' => 10,
																				
						   );

						$args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$temp_query = $wp_query;
						$wp_query   = NULL;
						$wp_query = new WP_Query( $args );
						                 
						if ($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); $count++; ?>
							
	                    <div class="panel panel-default">
	                        <div class="panel-heading" role="tab" id="k_<?php echo $count; ?>">
	                            <h4 class="panel-title">
	                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#kCollapsed<?php echo $count; ?>" aria-expanded="false" aria-controls="kCollapsed<?php echo $count; ?>">
	                                 <span class="k_num">Ram Katha <span class="num"> <?php echo get_field('katha_number'); ?></span></span>
									 <h5 class="desc"><?php the_title(); ?> 
									 <?php while ( have_rows('katha_translations') ) : the_row();
											if(get_row_layout() == 'katha_details'):									 
									 ?>
									 <span class="loc"><?php echo get_sub_field('location'); ?></span>

									 <?php endif; endwhile; ?>
									</h5>
	                                </a>
	                            </h4>
	                        </div>

	                        <div id="kCollapsed<?php echo $count; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="k_<?php echo $count; ?>">
	                            <div class="panel-body">
	                            	<div class="intro_desc">
									<?php the_content(); ?>
	                            	</div>

	                            	<ul class="nav nav-tabs">
										<?php
										$x = 0;
										while ( have_rows('katha_translations') ) : the_row();
												if(get_row_layout() == 'translations'):		
												$x++;	
										?>
										<?php for ($i=1; $i <= 20; $i++) {
												$day = 'day_'.$i;						 
											?>
											<?php if($i == 1){ ?>
												<li class="active"><a data-toggle="tab" href="#<?php echo $count; ?>day1">Day 1</a></li>
											<?php } elseif(get_sub_field($day) == ''){ break; ?>
											<?php }else{ ?>
												<li><a data-toggle="tab" href="#<?php echo $count; ?>day<?php echo $i; ?>">Day <?php echo $i; ?>	</a></li>
											<?php } ?>	
											
										<?php } ?>
										<?php endif; endwhile; ?>
									</ul>

									<div class="tab-content">

									<?php
										$x = 0;
										while ( have_rows('katha_translations') ) : the_row();
												if(get_row_layout() == 'translations'):		
												$x++;	
										?>
										<?php for ($i=1; $i <= 20; $i++) {
												$day = 'day_'.$i;						 
											?>
											<?php if($i == 1){ ?>
												<div id="<?php echo $count; ?>day1" class="tab-pane fade in active">
													<?php echo get_sub_field($day); ?>
												</div>
											<?php } elseif(get_sub_field($day) == ''){ break; ?>
											<?php }else{ ?>
												<div id="<?php echo $count; ?>day<?php echo $i; ?>" class="tab-pane fade in ">
													<?php echo get_sub_field($day); ?>
												</div>
											<?php } ?>	
											
										<?php } ?>
										<?php endif; endwhile; ?>
										

										

										
									</div>
	                            </div>
	                        </div>
	                    </div>
						<?php endwhile; ?> 
						<?php katha_paging_nav(); endif; wp_reset_query(); ?>
	                </div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="h_upcoming">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12 intro">
					<h2>UPCOMING</h2>
					<hr>
				</div>

				<div class="col-md-4">
					<div class="up_box">
						<h4><?php the_field('upcoming_title',994); ?></h4>
						<!-- <p><?php the_field('upcoming_description',994); ?></p> -->
					</div>
				</div>

				<div class="col-md-8">
				<?php 
					$args = array(
					'post_type' => array('katha'),
					'posts_per_page' => 4,
					'meta_key'  => 'upcoming',
					'meta_value' => true,
    				'order'   => 'DESC',
																		
				);
				$x = 0;
				$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) :
					while ( $loop->have_posts() ) :
					$loop->the_post();

				$x++;
				while ( have_rows('kathas_list') ) : the_row();
					if( get_row_layout() == 'katha_details' ):
					?>
					
					<div class="item" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/element-upcoming-more.png')no-repeat;">
						<div class="date_box">

							<?php 
								$strt_date = get_sub_field('start_date');
								$strt_arr = explode(' ',$strt_date);
							?>
							<span class="date"><?php echo $strt_arr[0]; ?></span>
							<span class="month"><?php echo $strt_arr[1]; ?></span>
						</div>

						<div class="up_desc">
							<h5><a href="<?php the_permalink(); ?>" ><?php echo get_sub_field('town-city'); ?></a></h5>
							<span><?php echo get_sub_field('start_date'); ?> - <?php echo get_sub_field('end_date'); ?></span>
						</div>

						<div class="num">
							<?php if(get_field('katha_number') != ''): ?>
							<span><?php echo get_field('katha_number'); ?></span>
							<?php endif; ?>
						</div>
					</div>
					<?php endif; ?>
					<?php endwhile; endwhile; ?>		
					<?php endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</section>




<?php get_footer();?>