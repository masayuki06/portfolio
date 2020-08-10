<?php /* Template Name: Media */ ?>
<?php get_header(); ?>


<section class="cstm_hero m_hero" >
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>


<section class="m_content">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">

					<?php               
						$args = array(
							'post_type' => array('post'),
							'order'=> 'DESC',
						   'posts_per_page' => 6,
																				
						   );

						$args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$temp_query = $wp_query;
						$wp_query   = NULL;
						$wp_query = new WP_Query( $args );
						                 
						if ($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
						    $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );  ?>



						<div class="item">
							<a href="<?php the_permalink(); ?>">
								<div class="bg" style="background:url('<?php echo $feat_image; ?>')no-repeat;">
									<span class="tag">
										<span class="date"><?php echo get_the_date( 'd' ); ?></span>
										<?php echo get_the_date( 'M' ); ?>
									</span>
								</div>
							</a>

							<div class="desc">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>

								<p><?php the_excerpt();?></p>

								<a href="<?php the_permalink(); ?>" class="bt_more">Read More <i class="arrow_right"></i></a>
							</div>
						</div>

					 <?php endwhile; ethos_paging_nav(); endif; ?> 

					
					

					<!--  -->

					<!-- <div class="m_pagination">
						<span class="active"><a href="">1</a></span>
						<span><a href="">2</a></span>
						<span><a href=""><i class="lnr lnr-arrow-right"></i></a></span>
					</div> -->


						

				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>
