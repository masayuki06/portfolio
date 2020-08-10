<?php /* Template Name: Media GUJARATI */ ?>
<?php get_header(); ?>


<section class="cstm_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbgs-media.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>Media</h1>

					<div class="crumbs">
						<ol class="breadcrumb">
							<li><a href="">Home</a></li>
							<li class="active">Media</li>
				        </ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="k_list k_upcoming " id="media">
	<div class="menu">
		<ul>
			<li class="all"><a class="" href="<?php echo bloginfo('url');?>/kathas/media/" >ENGLISH <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			<li class="up"><a class="active " href="#">GUJARATI <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
		</ul>
	</div>


	<div class="container">
		<div class="row">
			<div class="up_wrapper">
                <?php while ( have_rows('media_repeater') ) : the_row(); ?>
                <div class="col-md-12 item_wrap">
                    <?php 
                    $date_string = get_sub_field('date');
                    $date = DateTime::createFromFormat('d/m/Y', $date_string);
                    ?>
					<div class="item">
						<div class="date_box">
							<span class="num"><?php echo $date->format('j'); ?></span>
							<span class="date"><?php echo $date->format('F'); ?>  <span class="yr"><?php echo $date->format('Y'); ?></span></span>
						</div>

						<div class="desc">
							<a href="<?php the_sub_field('news_url'); ?>" class="aright" ><i class="fa fa-angle-right"></i></a>
							<h4><a href="<?php the_sub_field('news_url'); ?>" target="_blank"><?php the_sub_field('title'); ?></a></h4>
							<p><?php the_sub_field('news_source'); ?></p>
						</div>	
					</div>
				</div>
                <?php endwhile; ?>
				
			</div>
		</div>
	</div>
</section>




<?php get_footer();?>