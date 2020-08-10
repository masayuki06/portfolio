<?php /* Template Name: Scriptures - Shloka */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="cstm_hero shloka_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbgs-scriptures-shloka.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1><?php echo get_the_title() ?></h1>
					<p><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;  ?>
<section class="k_list " id="s_shloka">
	<div class="menu">
		<ul>
			<li class="all"><a class="active " href="#">SHLOKA <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			<li class="up"><a  href="<?php echo bloginfo('url');?>/scriptures/stuti/">Stuti <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
		</ul>
	</div>


	<div class="container">
		<div class="row">
			<div class="sh_wrap">
				<?php while ( have_rows('shloka') ) : the_row(); if(get_row_layout() == 'shloka_items'): ?>
					<?php while ( have_rows('downloadables') ) : the_row(); ?>
				<div class="col-md-6 item_wrap">
					<div class="item">
						<div class="icon">
						<a target="_blank" href="<?php echo get_sub_field('download_url'); ?>" download><img src="<?php echo bloginfo('template_directory');?>/assets/img/ico-pdf.png"></a>
						</div>

						<div class="desc">
							<a target="_blank" href="<?php echo get_sub_field('download_url'); ?>" download><img class="dl" src="<?php echo bloginfo('template_directory');?>/assets/img/icon-dl.png"></a>
							<h4><a target="_blank" href="<?php echo get_sub_field('download_url'); ?>" download><?php echo get_sub_field('shloka_title'); ?></a>	</h4>
						</div>
					</div>
				</div>
				<?php  endwhile; ?>
				<?php endif; endwhile; ?>
				
			</div>
		</div>
	</div>
</section>





<?php get_footer();?>