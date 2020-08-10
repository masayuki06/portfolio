<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>


<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-4 left">
				<span>Mara Phones Blog</span>
			</div>
		</div>
	</div>
</section>

<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>Blog</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="t_menu nav nav-tabs">
				    <li class="active"><a data-toggle="tab"  href="#tab_home">Home</a></li>
				    <li><a data-toggle="tab" href="#tab_product">Product</a></li>
				    <!-- <li><a data-toggle="tab" href="#tab_engineering">Engineering</a></li> -->
				    <li><a data-toggle="tab" href="#tab_editorial">Editorial</a></li>
				</ul>
				
			</div>
		</div>

		<div class="row">
			<div class="wrapper">
				<div class="tab-content">
					
					<!-- 1st tab -->
					<div id="tab_home" class="tab-pane fade in active">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('blog'),
						'posts_per_page' => -1,
										                                     
						);
						$x = 0;
						$loop = new WP_Query( $args );
						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();

						$x++;
						 ?>

						<div class="col-md-6 col-sm-6 item">
							<div class="m_post">
								<a href="<?php the_permalink(); ?>"><div class=" bg" style="background:url('<?php the_field('thumbnail'); ?>')no-repeat;"></div></a>
								<div class="desc">
									<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

									<p><?php echo get_the_excerpt(); ?></p>

									<a href="<?php the_permalink(); ?>" class="read">Read More <i class="lnr lnr-chevron-right"></i></a>
								</div>
							</div>
						</div>


						<?php endwhile; ?>		
						<?php endif; ?>

						
						<?php if ($x >= 7): ?>
							
						<div class="row">
							<div class="col-md-12">
								<div class="more">
									<a id="tab1_loadmore">LOAD MORE</a>
								</div>
							</div>
						</div>
						<?php endif ?>
						
					</div>

					<!-- 2nd tab -->
					<div id="tab_product" class="tab-pane fade acive">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('blog'),
						 'tax_query' => array(
											array(
												'taxonomy' => 'blog-category',
												'field'    => 'slug',
												'terms'    => 'product',
											),
										),

						'posts_per_page' => -1,
										                                     
						);

						$x = 0;
						$loop = new WP_Query( $args );

						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();

						 $x++;
						 ?>

						<div class="col-md-6 col-sm-6 item">
							<div class="m_post">
								<a href="<?php the_permalink(); ?>"><div class=" bg" style="background:url('<?php the_field('thumbnail'); ?>')no-repeat;"></div></a>
								<div class="desc">
									<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

									<p><?php echo get_the_excerpt(); ?></p>

									<a href="<?php the_permalink(); ?>" class="read">Read More <i class="lnr lnr-chevron-right"></i></a>
								</div>
							</div>
						</div>


						<?php endwhile; ?>		
						<?php endif; ?>
						<?php if ($x >= 7): ?>
						
						<div class="row">
							<div class="col-md-12">
								<div class="more">
									<a id="tab2_loadmore">LOAD MORE</a>
								</div>
							</div>
						</div>

						<?php endif ?>
						
					</div>

					<!-- 3rd tab -->
					<div id="tab_engineering" class="tab-pane fade  ">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('blog'),
						 'tax_query' => array(
											array(
												'taxonomy' => 'blog-category',
												'field'    => 'slug',
												'terms'    => 'engineering',
											),
										),
						 
						'posts_per_page' => -1,
										                                     
						);

						$x = 0;
						$loop = new WP_Query( $args );
						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();
						$x++;
						 ?>

						<div class="col-md-6 col-sm-6 item">
							<div class="m_post">
								<a href="<?php the_permalink(); ?>"><div class=" bg" style="background:url('<?php the_field('thumbnail'); ?>')no-repeat;"></div></a>
								<div class="desc">
									<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

									<p><?php echo get_the_excerpt(); ?></p>

									<a href="<?php the_permalink(); ?>" class="read">Read More <i class="lnr lnr-chevron-right"></i></a>
								</div>
							</div>
						</div>


						<?php endwhile; ?>		
						<?php endif; ?>

						<?php if ($x >= 7): ?>
						<div class="row">
							<div class="col-md-12">
								<div class="more">
									<a id="tab3_loadmore">LOAD MORE</a>
								</div>
							</div>
						</div>
						<?php endif; ?>
					</div>

					<!-- 4th tab -->
					<div id="tab_editorial" class="tab-pane fade ">
						
						<?php 
	
						 $args = array(
						 'post_type' => array('blog'),
						 'tax_query' => array(
											array(
												'taxonomy' => 'blog-category',
												'field'    => 'slug',
												'terms'    => 'editorial',
											),
										),
						 
						'posts_per_page' => -1,
										                                     
						);

						$x = 0;

						$loop = new WP_Query( $args );
						 if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();
						$x++;
						 ?>

						<div class="col-md-6 col-sm-6 item">
							<div class="m_post">
								<a href="<?php the_permalink(); ?>"><div class=" bg" style="background:url('<?php the_field('thumbnail'); ?>')no-repeat;"></div></a>
								<div class="desc">
									<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

									<p><?php echo get_the_excerpt(); ?></p>

									<a href="<?php the_permalink(); ?>" class="read">Read More <i class="lnr lnr-chevron-right"></i></a>
								</div>
							</div>
						</div>


						<?php endwhile; ?>		
						<?php endif; ?>

						<?php if ($x >= 7): ?>
						<div class="row">
							<div class="col-md-12">
								<div class="more">
									<a id="tab4_loadmore">LOAD MORE</a>
								</div>
							</div>
						</div>
						<?php endif; ?>
					</div>

				</div>

			<!-- 	<div class="row">
					<div class="col-md-12">
						<div class="page-nation">
							<ul class="pagination pagination-large text-center">
								<li class="text-center active "><a href="">1</a></li>
								<li class="text-center "><a href="">2</a></li>
								<li class="text-center "><a href="">3</a></li>
								<li class="next"><a href="">&gt;</a> </li>
							</ul>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</div>
</section>




<?php get_footer();?>
