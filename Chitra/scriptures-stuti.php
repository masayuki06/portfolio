<?php /* Template Name: Scriptures - Stuti */ ?>
<?php get_header(); ?>

<section class="cstm_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbgs-scriptures-stuti.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>Stuti</h1>
					<p><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="k_list " id="s_stuti">
	<div class="menu">
		<ul>
			<li class="all"><a  href="<?php echo bloginfo('url');?>/scriptures/shloka/">SHLOKA <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			<li class="up"><a class="active" href="#">Stuti <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
		</ul>
	</div>

	<!-- <div class="stuti_video">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wrapper">
						<iframe src="https://www.youtube.com/embed/9xwazD5SyVg"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="stuti_list">
					<?php echo do_shortcode('[cue id="1396"]'); ?>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="sh_wrap">
				<div class="intro">
					<h2>Downloads</h2>
				</div>
				<?php while ( have_rows('stuti') ) : the_row(); ?>
				<div class="col-md-6 item_wrap">
					<div class="item">
						<div class="icon">
						<a href="<?php the_sub_field('download_url'); ?>" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/ico-pdf.png"></a>
						</div>

						<div class="desc">
							<a href="<?php the_sub_field('download_url'); ?>" target="_blank"><img class="dl" src="<?php echo bloginfo('template_directory');?>/assets/img/icon-dl.png"></a>
							<h4><a href="<?php the_sub_field('download_url'); ?>" target="_blank"><?php the_sub_field('title'); ?></a>	</h4>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				
			</div>
		</div>
	</div>
</section>




<?php get_footer();?>