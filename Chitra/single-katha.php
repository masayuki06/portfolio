<?php get_header(); ?>

<section class="cstm_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbgs-kathas-list.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>kathas list</h1>

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

<section class="k_list single_katha">
	<div class="menu">
		<ul>
			<li class="all"><a <?php echo (get_field('upcoming') == false ? 'class="active "' : ''); ?> href="<?php echo bloginfo('url');?>/kathas/">All kathas <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			<li class="up"><a <?php echo (get_field('upcoming') == true ? 'class="active "' : ''); ?> href="<?php echo bloginfo('url');?>/kathas/upcoming/">upcoming Kathas<img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
		</ul>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<a class="back" href="<?php echo bloginfo('url');?>/kathas/"><i class="fa fa-angle-left"></i>Back</a>

					<div class="da_te">
						<h4><?php the_title(); ?></h4>
						<?php while ( have_rows('kathas_list') ) : the_row();
						    if( get_row_layout() == 'katha_details' ): ?>
						<p><strong><?php echo get_sub_field('start_date'); ?> - <?php echo get_sub_field('end_date'); ?></strong></p>
						<p><strong><?php echo get_sub_field('town-city'); ?></strong></p>
						<?php endif; endwhile; ?>
					</div>

					<div class="wrap_list">
						<?php echo get_the_content(); ?>
						<?php
						if( get_row_layout() == 'content_inclusion' ):
						if (get_sub_field('include_katha_chopais') == 'Yes') {
							echo content_inclusion('chopais',$katha_number);
						}

						if (get_sub_field('include_katha_translation') == 'Yes') {
							echo content_inclusion('translation',$katha_number);
						}
					endif;
						 ?>
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
						<h4>Upcoming <br> Kathas</h4>
						<!-- <p><?php echo get_field('upcoming_description',994); ?></p> -->
					</div>
				</div>

				<div class="col-md-8">

				<?php
					$args = array(
					'post_type' => array('katha'),
					'posts_per_page' => 4,
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

						<div class="item" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/element-upcoming-more.png')no-repeat;">
							<div class="date_box">
								<span class="date"><?php echo get_the_date('j'); ?></span>
								<span class="month"><?php echo get_the_date('F'); ?></span>
							</div>

							<div class="up_desc">
								<h5><a href="<?php the_permalink(); ?>"><?php echo get_sub_field('town-city'); ?></a></h5>
								<span><?php echo get_sub_field('start_date'); ?> - <?php echo get_sub_field('end_date'); ?></span>
							</div>

							<div class="num">
								<span><?php echo get_field('katha_number'); ?></span>
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
