<?php /* Template Name: Katha Booklets */ ?>
<?php get_header(); ?>

<section class="cstm_hero booklets_hero" >
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>Katha BookletS</h1>

					<div class="crumbs">
						<ol class="breadcrumb">
							<li><a href="<?php echo bloginfo('url');?>/">Home</a></li>
							<li class="active">Katha Booklets</li>
				        </ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="book_lets">
	<div class="container">
		<div class="row">
			<div class="wrapper">
			<?php 
					$args = array(
					'post_type' => array('katha_booklets'),
					'posts_per_page' => -1,
					'orderby'   => 'meta_value_num',
    				// 'meta_key'  => 'katha_number',
    				'order'   => 'DESC',
																		
				);
				$x = 0;
				$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) :
					while ( $loop->have_posts() ) :
					$loop->the_post();

				$x++;
				while ( have_rows('booklets') ) : the_row();
					if( get_row_layout() == 'booklet_details' ):
					?>
				<div class="col-md-3 item_wrap">
					<div class="item">
						<div class="bg" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;"></div>

						<div class="desc">
							<div class="me_ta">
								<span class="num"><?php echo get_sub_field('katha_num'); ?></span>
								<h4><?php echo get_the_title(); ?></h4>
								<p><?php echo get_sub_field('location'); ?></p>
							</div>

							<div class="dl">
								<?php if(get_sub_field('en_download_url') != ""): ?>
								<a target="_blank" href="<?php echo get_sub_field('en_download_url'); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/ico-download.png">ENGLISH</a>
								<?php endif; ?>
								<?php if(get_sub_field('hindi_download_url') != ''): ?>
								<a target="_blank" href="<?php echo get_sub_field('hindi_download_url'); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/ico-download.png">Hindi</a>
								<?php endif; ?>

								<?php if(get_sub_field('gujarati_download_url') != ''): ?>
								<a target="_blank" href="<?php echo get_sub_field('gujarati_download_url'); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/ico-download.png">Gujarati</a>
								<?php endif; ?>
							</div>
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