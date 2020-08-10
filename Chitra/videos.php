<?php /* Template Name: Videos */ ?>
<?php get_header(); ?>

<section class="videos" >
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-6 item">
					<div class="bg" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/videos-hero.jpg')no-repeat;"></div>
				</div>

				<div class="col-md-6 item">
					<div class="desc">
						<h2>Tune in to our youtube channel</h2>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->

						<div class="yt_sub">
							<a href=""><img src="<?php echo bloginfo('template_directory');?>/assets/img/videos-yt-ico.png">Subscribe to our YouTube Channel for updates</a>
						</div>

						<!-- <p class="bold"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong></p> -->
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="vid_list">
				<div class="intro">
					<img src="<?php echo bloginfo('template_directory');?>/assets/img/about-message.png">
				</div>

				<div class="list_wrap">
					
					<?php echo do_shortcode('[youtube-feed]') ?>

					<?php // echo do_shortcode('[embedyt] https://www.youtube.com/embed?listType=playlist&list=UCnePvOdQ-uBSWSIgRoG55gA&layout=gallery[/embedyt]') ?>
				</div>
			</div>
		</div>
	</div>
</section>




<?php get_footer();?>