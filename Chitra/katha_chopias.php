<?php /* Template Name: Katha Chopias */ ?>
<?php get_header(); ?>



<section class="cstm_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbgs-katha-chopais.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>Katha CHOPAIS</h1>
					<p><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="k_translations k_chopais">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                    <?php 
                        $args = array(
                        'post_type' => array('chopais'),
                        'posts_per_page' => 25,
                        'orderby'   => 'meta_value_num',
                        'meta_key'  => 'katha_number',
                        'order'   => 'DESC',
                                                                            
                    );
                    $x = 0;
                    $args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$temp_query = $wp_query;
						$wp_query   = NULL;
						$wp_query = new WP_Query( $args );
                        if ( $wp_query->have_posts() ) :
                        while ( $wp_query->have_posts() ) :
                        $wp_query->the_post();

                    $x++;
                        ?>
                        <div class="panel panel-default">
	                        <div class="panel-heading" role="tab" id="k_<?php echo $x; ?>">
	                            <h4 class="panel-title">
	                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#kCollapsed<?php echo $x; ?>" aria-expanded="false" aria-controls="kCollapsed<?php echo $x; ?>">
	                                 <span class="k_num">Ram Katha <span class="num"><?php echo get_field('katha_number'); ?></span></span>
									 <h5 class="desc"><?php echo get_the_title(); ?>
									 <span class="loc"><?php echo chopais_location(get_field('katha_number')); ?></span>
									</h5>
									 
									 
									</a>
	                            </h4>
	                        </div>

	                        <div id="kCollapsed<?php echo $x; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="k_<?php echo $x; ?>">
	                            <div class="panel-body">
	                            	<div class="intro_desc">
	                            		<?php echo get_the_content(); ?>
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