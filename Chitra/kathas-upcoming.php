<?php /* Template Name: Kathas - Upcoming */ ?>
<?php get_header(); ?>

<section class="cstm_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbgs-kathas-upcoming.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>UPCOMING Ram kathas</h1>

					<div class="crumbs">
						<ol class="breadcrumb">
							<li><a href="">Home</a></li>
							<li class="active">Upcoming Kathas</li>
				        </ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="k_list k_upcoming">
	<div class="menu">
		<ul>
			<li class="all"><a  href="<?php echo bloginfo('url');?>/kathas">All kathas <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			<li class="up"><a class="active " href="#">Upcoming Kathas 2020<img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
		</ul>
	</div>


	<div class="container">
		<div class="row">
			<div class="up_wrapper">

				<div class="upcoming_notice">
						<br>

						<h3>Important Notice</h3>

						<p>Due to the Covid-19 outbreak, there are no fixed Katha schedules.  Online Katha's will be announced as soon as they are scheduled. <br><br></p>

						<h3>महत्वपूर्ण सूचना</h3>

						<p>कोरोना के प्रकोप के कारण कथा कार्यक्रम निर्धारित नहीं हैं। निर्धारित होने के साथ ही ऑनलाइन कथा की घोषणा की जाएगी.</p>
					
					</div>


				<?php 
					$k_year = (isset($_GET['k_year'] ) ? $_GET['k_year'] : '');
					$search = (isset($_GET['search'] ) ? $_GET['search'] : '');
					$args = array(
					'post_type' => array('katha'),
					'posts_per_page' => 6,
					'order'   => 'DESC',
					'meta_key'   => 'upcoming',
    				'meta_value' => true
																		
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
				<div style="display: none;" class="col-md-6 item_wrap">
					<div class="item">
						<div class="date_box">
						<?php 
								$strt_date = get_sub_field('start_date');
								$strt_arr = explode(' ',$strt_date);
							?>
							
							<span class="num"><?php echo get_field('katha_number'); ?></span>
							<span class="date"><?php echo $strt_arr[1]; ?> <span class="yr"><?php echo get_field('katha_year'); ?></span></span>
						</div>

						<div class="desc">
							<a class="aright"><i class="fa fa-angle-right"></i></a>
							<h4><img src="<?php echo bloginfo('template_directory');?>/assets/img/ico-pin.png"><a href="<?php the_permalink(); ?>"><?php echo get_sub_field('town-city'); ?></a></h4>
							<p><?php echo get_sub_field('start_date'); ?> - <?php echo get_sub_field('end_date'); ?></p>
							
							<!-- <a class="book">Book Now</a>/ -->
						</div>	
					</div>
				</div>
				<?php endif; ?>
				<?php endwhile; endwhile; ?>		
				<?php endif; wp_reset_query(); ?>
				
			</div>
		</div>
	</div>
</section>






<?php get_footer();?>