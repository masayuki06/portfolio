<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php while ( have_rows('homepage_details') ) : the_row(); ?>
<section class="h_hero" >
	<div class="wrapper">
		<ul class="h_slider">
			<?php  if( get_row_layout() == 'hero_unit_slider'): ?>
				<?php while( have_rows('slider_items') ): the_row(); ?>
			<li class="bg" style="background:url('<?php echo get_sub_field('photo'); ?>')no-repeat;"></li>

				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>
</section>
<?php endwhile; ?>
			<?php endwhile; endif;  ?>

<?php while ( have_rows('homepage_details') ) : the_row(); ?>
		<?php  if( get_row_layout() == 'intro_elements'): ?>
<section class="h_intro">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-3">
					<div class="ftrd">
						<img class="ftrd_img" src="<?php echo bloginfo('template_directory');?>/assets/img/home-feature.jpg">
						<img class="text_img" src="<?php echo get_sub_field('overly_title'); ?>">
					</div>
				</div>
				<div class="col-md-9">
					<div class="a_desc">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		<?php endif; ?>
<?php endwhile; ?>

<section class="h_upcoming home_up">
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

				<!-- #MARK 2020-07-12 -->
				<div class="home_notice">
					<br>

					<h3>Important Notice</h3>

					<p>Due to the Covid-19 outbreak, there are no fixed Katha schedules.  Online Katha's will be announced as soon as they are scheduled. <br><br></p>

					<h3>महत्वपूर्ण सूचना</h3>

					<p>कोरोना के प्रकोप के कारण कथा कार्यक्रम निर्धारित नहीं हैं। निर्धारित होने के साथ ही ऑनलाइन कथा की घोषणा की जाएगी.</p>
				
				</div>

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


				<!-- #MARK 2020-07-12 -->
					<div style="display: none;" class="item" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/element-upcoming-more.png')no-repeat;">
						<div class="date_box">
							<?php 
								$strt_date = get_sub_field('start_date');
								//echo $strt_date;
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
				<?php 
					$args = array(
					'post_type' => array('katha'),
					'posts_per_page' => 1,
					'orderby'   => 'meta_value_num',
    				'meta_key'  => 'katha_number',
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
					
					<!-- <div class="item" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/element-upcoming-more.png')no-repeat;">
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
							<span><?php echo get_field('katha_number'); ?></span>
						</div>
					</div> -->
					<?php endif; ?>
					<?php endwhile; endwhile; ?>		
					<?php endif; wp_reset_query(); ?>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="whats_new">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="intro">
						<h2>what’s new</h2>
						<hr>
					</div>
					<?php 
						$args = array(
						'post_type' => array('katha'),
						'posts_per_page' => 1,
						'orderby'   => 'meta_value_num',
						'meta_key'  => 'katha_number',
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

							$katha_number = get_field('katha_number');
						?>	
					<div class="news">
						<span class="clrd"><?php the_title(); ?></span>
						<h3><span class="n_num"><?php the_field('katha_number'); ?></span><?php the_title(); ?></h3>
						<span class="auth"><?php echo get_sub_field('town-city'); ?> </span>
						<span class="date"><?php echo get_sub_field('start_date'); ?> - <?php echo get_sub_field('end_date'); ?></span>
					</div>

					<div class="desc">
						<?php 
						$post = get_post(); 

						if ( has_blocks( $post->post_content ) ) {
							$blocks = parse_blocks( $post->post_content );
						
						// echo $blocks[0]['innerHTML'];
						}
						echo get_the_content();
						
						
						?>
						<?php 
						
						
						if( get_row_layout() == 'content_inclusion' ){

						if (get_sub_field('include_katha_chopais') == 'Yes') {
							echo content_inclusion('chopais',$katha_number);
						}

						if (get_sub_field('include_katha_translation') == 'Yes') {
							echo content_inclusion('translation',$katha_number);
						}
							}; 
							
							?>

						<a href="<?php the_permalink(); ?>" class="read">READ MORE <i class="fa fa-angle-right"></i></a>
					</div>
					<?php endif; ?>
					<?php endwhile; endwhile; ?>		
					<?php endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php while ( have_rows('homepage_details') ) : the_row();
if( get_row_layout() == 'featured_videos' ): ?>

<section class="daily_vid">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="intro">
					<h2>Daily Video Clips</h2>
					<hr>
				</div>

				<div class="vid">
					<div class="vid_slider">
						<!-- <?php while( have_rows('videos') ): the_row(); ?>
						<div class="col-md-3 item">
							<a href="<?php echo get_sub_field('video_url'); ?>">
							<div class="bg" style="background:url('<?php echo get_sub_field('video_thumbnail'); ?>');"></div>
							</a>
						</div>
						<?php endwhile; ?> -->
						<?php
						$url = "https://www.youtube.com/feeds/videos.xml?user=moraribapu";
						$xml = file_get_contents($url);
						$feed = simplexml_load_string($xml);
						$ns=$feed->getNameSpaces(true);

						$i = 0;

						foreach ($feed->entry as $entry) {
						    $group=$entry->children($ns["media"]);
						    $group=$group->group;
						    $thumbnail_attrs=$group->thumbnail[0]->attributes();
						    $image=$thumbnail_attrs["url"];
						    
						    $id = $feed->entry[$i]->id;
						    $id = str_replace('yt:video:','',$id);

						    //echo $image .' | '. $id . '<br />';
						  ?>

						  <div class="col-md-3 item">
						  	<div class="yt_thumb">
								<div class="bg" style="background:url('<?php echo $image; ?>');">
									<a href="https://www.youtube.com/watch?v=<?php echo $id; ?>" class="modal-video">
										<img class="play" src="<?php echo bloginfo('template_directory');?>/assets/img/play.png">
									</a>
								</div>
							</div>
						</div>

						 <?php
						    $i++;
						 }
						?>

					</div>
				</div>

			

			</div>
		</div>
	</div>
</section>

<?php endif; endwhile; ?>


<?php while ( have_rows('homepage_details') ) : the_row();
if( get_row_layout() == 'about_ram_katha' ): ?>
<section class="h_about">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-3">
					<div class="ftrd">
						<img class="ftrd_img" src="<?php echo get_sub_field('thumbnail'); ?>">
						<img class="text_img" src="<?php echo get_sub_field('title_overlay'); ?>">
					</div>
				</div>

				<div class="col-md-9">
					<div class="a_desc">
						<?php echo get_sub_field('content'); ?>

						<div class="more">
							<a style="display: none;" href="<?php echo bloginfo('url');?>/about">READ MORE <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; endwhile; ?>


<?php get_footer();?>
