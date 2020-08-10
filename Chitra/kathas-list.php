<?php /* Template Name: Katha List */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="cstm_hero" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>

					<div class="crumbs">
						<ol class="breadcrumb">
							<li><a href="<?php echo bloginfo('url');?>/">Home</a></li>
							<li class="active">Kathas List </li>
				        </ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;  ?>
<section class="k_list">
	<div class="menu">
		<ul>
			<li class="all"><a class="active " href="<?php echo bloginfo('url');?>/kathas/">All kathas <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			<li class="up"><a  href="<?php echo bloginfo('url');?>/kathas/upcoming/">UPCOMING KATHAS<img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
		</ul>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="all_list">
					<div class="filter">
					<form method="GET" action="<?php echo bloginfo('url');?>/kathas/">
						<div class="disp_yr">
							<?php $k_year = (isset($_GET['k_year'] ) ? $_GET['k_year'] : ''); ?>
							<span class="disp">DISPLAY KATHAS BY YEAR</span>
							<input type="radio" onclick="submit()" <?php echo ($k_year == '' ? 'checked' : ''); ?> name='k_year' value=""><span>All</span>
							<input type="radio" onclick="submit()" <?php echo ($k_year == '2020' ? 'checked' : ''); ?> name='k_year' value="2020"><span>2020</span>
							<input type="radio" onclick="submit()" <?php echo ($k_year == '2019' ? 'checked' : ''); ?> name='k_year' value="2019"><span>2019</span>
							<input type="radio" onclick="submit()" <?php echo ($k_year == '2018' ? 'checked' : ''); ?> name='k_year' value="2018"><span>2018</span>
							<input type="radio" onclick="submit()" <?php echo ($k_year == '2017' ? 'checked' : ''); ?> name='k_year' value="2017"><span>2017</span>
							<input type="radio" onclick="submit()" <?php echo ($k_year == '2016' ? 'checked' : ''); ?> name='k_year' value="2016"><span>2016</span>
							<input type="radio" onclick="submit()" <?php echo ($k_year == '2015' ? 'checked' : ''); ?> name='k_year' value="2015"><span>2015</span>
							<input type="radio" onclick="submit()" <?php echo ($k_year == 'Older' ? 'checked' : ''); ?> name='k_year' value="Older"><span>Older</span>
						</div>

						<!-- <div class="f_seacrh">
							<form method="GET">
								<fieldset class="frm_show">
									<label>Show 
										<?php
											$p_page = (isset($_GET['p_page']) ? $_GET['p_page'] : '10' );
										?>
										<select onchange="submit()" name="p_page" id="p_page">
											<option <?php echo ($p_page == 10 ? 'selected' : ''); ?> value="10">10</option>
											<option <?php echo ($p_page == 25 ? 'selected' : ''); ?> value="25">25</option>
											<option <?php echo ($p_page == 50 ? 'selected' : ''); ?> value="50">50</option>
											<option <?php echo ($p_page == 100 ? 'selected' : ''); ?> value="100">100</option>
										</select>
									</label>
								</fieldset>

								<fieldset class="frm_srch">
									<input type="text" name="search" placeholder="Search">
									<input type="submit" name="" value="&#xe86f;">
								</fieldset>
							</div> -->
						</form>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="tbl_list">
					<table class="" id="table_id">
						<thead>
							<tr>
								<th class="num">#</th>
								<th class="yr">YEAR</th>
								<th class="dates">Dates</th>
								<th class="kname">Katha Name</th>
								<th class="city">Town/City</th>
								<th class="coun_try">Country</th>
								<th class="lang">Language</th>
							</tr>
						</thead>

						<tbody>
						<?php 
							$arr = array();
							$search = (isset($_GET['search'] ) ? $_GET['search'] : '');
							$k_compare = ($k_year == 'Older' ? '<=' : '');
							if($k_year == 'Older'){
								$k_year = '2014';
							}
							if ($k_year != '') {
								$arr = array(
									'key' => 'katha_year',
									'value'=> $k_year,
									'compare' => $k_compare,
								);
							}
							$args = array(
							'post_type' => array('katha'),
							// 'posts_per_page' => $p_page,
							'posts_per_page' => -1,
							's' => $search,
							'orderby'   => 'meta_value_num',
							'meta_key'   => 'katha_number',
							'meta_query' => array(
								'relation' => 'OR',
								'katha_year' => $arr, 
							),
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
						while ( have_rows('kathas_list') ) : the_row();
							if( get_row_layout() == 'katha_details' ):
							?>
							<tr>
								<td class="num"><span><?php echo get_field('katha_number'); ?></span></td>
								<td class="yr"><?php echo get_field('katha_year'); ?></td>
								<td class="dates"><span><?php echo get_sub_field('start_date'); ?> - <?php echo get_sub_field('end_date'); ?></span></td>
								<td class="k_name"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></td>
								<td><img class="pin" src="<?php echo bloginfo('template_directory');?>/assets/img/ico-pin.png"><?php echo get_sub_field('town-city'); ?>	</td>
								<td><img class="flag" src="<?php echo get_custom_flag(get_sub_field('country')); ?>"><?php echo get_sub_field('country'); ?></td>
								<td><img class="audio" src="<?php echo bloginfo('template_directory');?>/assets/img/ico-audio.png"><?php echo get_sub_field('language'); ?> <span class="ar_row"><a href="<?php echo get_the_permalink(); ?>"><i class="fa fa-angle-right"></i></a></span></td>
							</tr>
							<?php endif; ?>
							<?php endwhile; endwhile; ?>		
							
					
							
						</tbody>
					</table>
				</div>

				<!-- <div class="pagination">
					<a href="" class="prev"><i class="fa fa-angle-left"></i></a>
					<a href="" class="active">1</a>
					<a href="">2</a>
					<a href="">3</a>
					<a href="">4</a>
					<a href="">5</a>
					<a href="">6</a>
					<a href="">7</a>
					<a href="" class="next"><i class="fa fa-angle-right"></i></a>
				</div> -->

				<!-- <?php katha_paging_nav(); ?> -->
				
				<?php else: ?>
					<div class="tbl_list">
					<table></table>

					</div>
				
			
				<?php endif; wp_reset_query(); ?>
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
					
					<div style="display: none;" class="item" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/element-upcoming-more.png')no-repeat;">
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