<?php /* Template Name: Training Page */ ?>
<?php get_header(); ?>


<section class="a_hero training_hero" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>News</h1>
			</div>
		</div>
	</div>
</section>

<section class="training_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h2><?php the_field('headline'); ?></h2>
				<hr>
				<p><?php the_field('sub_headline'); ?></p>
				
			</div>
		</div>

		<?php 

	      $args_cat = [
					'orderby' => 'name',
					'order' => 'ASC',
					'taxonomy' => 'category',
					'hide_empty' => 0,
				];

			$categories = get_categories($args_cat);

			



	       ?>
<!-- 
		<div class="row">
			<div class="col-md-12">
				<ul class="t_menu nav nav-tabs"> -->
					
					<!-- <li> <a href="" id="all" data-toggle="tab">ALL</a> </li> -->
					
					<?php //$var_count = 1; ?>
					<?php //foreach ($categories as $c): ?>

					<?php //if ($c->name !== "Uncategorized"): ?>
					
						<!-- <li class="<?php //echo ($var_count == 1 ? 'active' : ''); ?>"><a id='mkclick<?php //echo $var_count; ?>' data-toggle="tab"  href="#tab_<?php //echo str_replace(" ", "_", $c->name); ?>"><?php echo $c->name; ?></a></li> -->

					<?php //endif; ?>

					<?php //$var_count++; endforeach ?>
				    
				<!--     
				</ul>
				
			</div>
		</div> -->

		<div class="row">
			<div class="wrapper">
				<div class="tab-content">
					

					<?php ///foreach ($categories as $c): <?php echo str_replace(" ", "_", $c->name); ?>
						
					
					<!-- 1st tab -->
					<div id="tab_1" class="tab-pane fade in active">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('news-item'),
						 
						 // 'tax_query' => array(
							// 				array(
							// 					'taxonomy' => 'category',
							// 					'field'    => 'slug',
							// 					'terms'    => $c->slug,
							// 				),
							// 			),
						'posts_per_page' => -1,
										                                     
						);

						$x = 0;
						$loop = new WP_Query( $args );
						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();

						 ?>

						 <div class="col-md-6 col-sm-6 item">
							<div class="image_post">
								<a href="<?php the_permalink(); ?>"><div class="post bg" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;"></div></a>
								<div class="desc">
									<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

									<?php echo wp_trim_words( get_the_content(), 25, '...' ); ?>
								</div>
							</div>
						</div>

						<?php $x++; endwhile; ?>		
						<?php endif; ?>

						

						<?php if ($x >= 5): ?>
							<div class="row">
							<div class="col-md-12">
								<div class="more">
									<a id="tab1_loadmore">LOAD MORE</a>
								</div>
							</div>
						</div>
						<?php endif ?>

					</div>

					<?php //endforeach ?>

				</div>
			</div>
		</div>
	</div>
</section>




<?php get_footer();?>