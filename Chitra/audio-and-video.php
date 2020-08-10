<?php /* Template Name: Contact Audio and Videos */ ?>
<?php get_header(); ?>



<section class="cstm_hero c_hero" >
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>Contact us</h1>

					<div class="crumbs">
						<ol class="breadcrumb">
							<li><a href="<?php echo bloginfo('url');?>/">Home</a></li>
							<li class="active">Contact us</li>
				        </ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="k_list cstm_contact c_av" id="contact">
	<div class="menu">
		<div class="container">
			<ul>
            <li class="gen"><a class="" href="<?php echo bloginfo('url');?>/contact-us">General <br>Inquiry <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
				<li class="audio"><a class="active" href="<?php echo bloginfo('url');?>/contact-us/audio-video/">Katha Audio and Video <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
				<li class="book"><a class="" href="<?php echo bloginfo('url');?>/contact-us/katha-booklets-photos/">Katha Booklets and Photos <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			</ul>
		</div>
	</div>

	<div class="c_details">
		<div class="bg" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;">
			<div class="container">
				<div class="desc">
					<h4>Katha Audio and Video</h4>
					<p>
                        <!-- <?php echo (get_field('address') != '' ? get_field('address') : ''); ?> -->
                        <?php if(get_field('telephone_number') != '' ): ?>
                        Tel: <a href="tel:<?php echo get_field('telephone_number'); ?>"><?php echo get_field('telephone_number'); ?></a> <br>
                        <?php endif; ?>
                        <?php if(get_field('email') != ''): ?>
                        Email: <a href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a><br>
                        <?php endif; ?>
                        <?php if(get_field('website') != ''): ?>
                        Web: <a target="_blank" href="<?php echo get_field('website'); ?>"><?php echo get_field('website'); ?></a>
                        <?php endif; ?>
					</p>
				</div>
			</div>
		</div>
		
	</div>
</section>


<?php get_footer();?>