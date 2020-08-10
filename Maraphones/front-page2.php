<?php /* Template Name: Front Page duplicate */ ?>
<?php get_header(); ?>

<section class="h_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1><?php the_field('page_title'); ?></h1>
				<p><?php the_field('page_description'); ?></p>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 col-sm-6 desc " data-aos-once="true" data-aos="fade-up" data-aos-duration="1000" >
				
				<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/x.png" alt=""></span>
				<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/z.png" alt=""></span>
				<p><?php the_field('mara_headline'); ?></p>
				<a href="<?php bloginfo('url'); ?>/choose"><?php the_field('button_text'); ?></a>
			</div>

			<div class="col-md-7 col-sm-6 ftrd_x " data-aos-once="true" data-aos="fade-left"  data-aos-duration="1000">
				<img class="hero_ftrd" src="<?php the_field('background_image_h'); ?>" alt="">
			</div>
		</div>
	</div>
</section>

<section class="h_cta1" style="background:url('<?php the_field('background_image_v'); ?>')no-repeat;">
<!-- <div class="parallax" ></div> -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>
					<a class="modal-video" href="<?php the_field('video_url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="">
					PLAY VIDEO</a>
				</p>
			</div>
		</div>
	</div>
</section>


<section class="h_cta2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="intro "  >
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/android-logo.png" alt="">
					<p ><?php the_field('headline_f'); ?></p>
					<!-- <a href="">LEARN MORE <i class="lnr lnr-chevron-right"></i></a> -->
				</div>
			</div>
		</div>

		<div class="row">
			<div class="wrap">
				
				<?php  while ( have_rows('featured_repeater') ) : the_row(); ?>

				<div class="col-md-3 col-sm-3 col-xs-6" data-aos-once="true" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="600" >
					<img src="<?php the_sub_field('icon'); ?>" alt="">
					<span><?php the_sub_field('title'); ?></span>
				</div>

				<?php endwhile; ?>

				

				
			</div>

			<!-- <div>
				<img data-aos-once="true" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000" class="ftrd"  src="<?php the_field('background_image_feat'); ?>" alt="">
			</div> -->

			<div id="gm8" style="padding-top:70px">
				<img class="hidden mb_gm8" data-aos-once="true" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000" class="ftrd"  src="<?php echo get_template_directory_uri(); ?>/assets/img/gm8/horizontal-GM8-01.png" alt="">
				<div class="product-section yazilim padding-50-top-bottom" id="product-part-03" style="padding-bottom:0">
                    <div class="container text-center">
                        <div class="row">
                            <div class="product-img-container">
                            	<img class="product img-00 transition" src="<?php echo get_template_directory_uri(); ?>/assets/img/gm8/shdw-chz.png" /> 
                            	<img class="product img-01 transition" src="<?php echo get_template_directory_uri(); ?>/assets/img/gm8/horizontal-GM8.png" /> 
                            	<img class="product img-02 transition" src="<?php echo get_template_directory_uri(); ?>/assets/img/gm8/horizontal-blackscreen.png" /> 
                            	<img class="product img-03 transition" src="<?php echo get_template_directory_uri(); ?>/assets/img/gm8/wallpaper-bg.png" /> 
                            	<img class="product img-04 transition" src="<?php echo get_template_directory_uri(); ?>/assets/img/gm8/shdw-icon.png" /> 
                            	<img class="product img-05 transition" src="<?php echo get_template_directory_uri(); ?>/assets/img/gm8/horizontal-oreo.png" />
                            </div>
                        </div>
                    </div>
                </div>
			</div>

		</div>
	</div>
</section>

<section class="h_dolby" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg2.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="wrapper "  >
				<div class="" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="linear">
					<h2 class=""><?php the_field('headline'); ?></h2>
					<p class=""><?php the_field('sub_headline'); ?></p>
				</div>

				<div class="" data-aos-once="true" data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="500"  data-aos-easing="linear">
					<img  class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/dolby-logo.png" alt="">
					<span><?php the_field('dolby_title'); ?></span>
				</div>
				<!-- <img class="ftrd" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-audio.jpg" alt=""> -->
			</div>
		</div>
	</div>
</section>

<section class="h_security">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro " data-aos-once="true" data-aos="fade-up" data-aos-easing="linear">
				<h2>Security</h2>
			</div>
		</div>

		<div class="row">
			
			<?php  while ( have_rows('security_repeater') ) : the_row(); ?>

			<div class="col-md-6 item_wrapper col-sm-6 col-xs-6">
				<div class="item">
					<div class="description " data-aos-once="true" data-aos="fade-up" data-aos-delay="500"  >
						<img src="<?php the_sub_field('icon'); ?>" alt="">
						<span><?php the_sub_field('title'); ?></span>
						<p><?php the_sub_field('description'); ?></p>
					</div>

					<img class="ftrd " data-aos-once="true" data-aos="fade-right" data-aos-delay="700" src="<?php the_sub_field('background_image'); ?>" alt="">
				</div>
			</div>

			<?php endwhile; ?>  
			

			

		</div>
	</div>	
</section>

<section class="h_cta3" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-gg.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro " data-aos-once="true" data-aos="fade-up" data-aos-delay="500" data-aos-easing="linear" >
				<h2><?php the_field('title_gorilla'); ?></h2>
				<p><?php the_field('description_gorilla'); ?></p>
				
			</div>

			<img data-aos-once="true" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="900"   src="<?php echo get_template_directory_uri(); ?>/assets/img/gg.png" alt="">
		</div>
	</div>
</section>

<section class="made_in_africa" style="background:url('<?php the_field('background_image_made'); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper" data-aos-once="true" data-aos="fade-up" data-aos-easing="linear"  >
					<h2><?php the_field('title_made'); ?></h2>
					<p><?php the_field('description_made'); ?></p>
					<img class="logo" src="<?php the_field('logo_made'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="h_cta4" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg3.jpg')no-repeat;"> -->
<section class="h_cta4" style="background:#000;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro  " >
				<h2><?php the_field('title_charge'); ?></h2>
				<p><?php the_field('description_charge'); ?></p>
				<img data-aos-once="true" data-aos="fade-left"   data-aos-duration="1000"  data-aos-delay="900"  class="keyvisual" src="<?php the_field('background_image_charge'); ?>" alt="">
			</div>

			
		</div>
	</div>
</section>
<section class="h_updates">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="intro " data-aos-once="true" data-aos="fade-up"   data-aos-easing="linear"   >
				    <h2>Updates</h2>
					<!-- <p>Mara Corporation a technology centric, a proud African brand. Integrating technology to enable business growth and prosperity with innovative products and services delivered in a very localized manner.</p> -->
				</div>
			</div>
		</div>

		<div class="row social_feeds ">
			
			<?php 
	
			 $args = array(
			 'post_type' => array('blog'),
			'posts_per_page' => 3,
							                                     
			);

			$loop = new WP_Query( $args );
			 if ( $loop->have_posts() ) :
				while ( $loop->have_posts() ) :
				$loop->the_post();

			 ?>

			<div class="col-md-4 col-sm-6 col-xs-6 wrap" data-aos-once="true" data-aos="fade-up"  data-aos-easing="linear"  data-aos-delay="500">
				<div class="item">
					<span class="lbl">UPDATE</span>

					<div class="content">
						<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
						<span class="n_ews"><?php the_field('author'); ?></span>
						<p><?php the_title(); ?></p>
					</div>

					<a class="read" href="<?php the_permalink(); ?>">Read more <i class="lnr lnr-chevron-right"></i></a>
				</div>
			</div>
			
			<?php endwhile; ?>		
			<?php endif; ?>
			



			<div class=" animatable fadeInUp">
				<div class="col-md-4 col-sm-6 col-xs-6 wrap" data-aos-once="true" data-aos="fade-up"  data-aos-easing="linear"  data-aos-delay="800">
					<div class="item_feeds">
						<span class="lbl">Twitter</span>

						<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/MaraPhones" data-widget-id="942047000337571840"></a>
						<script>
						window.twttr = (function (d, s, id) {
							  var t, js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id; js.src= "https://platform.twitter.com/widgets.js";
							  fjs.parentNode.insertBefore(js, fjs);
							  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
							}(document, "script", "twitter-wjs"));
						</script>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-6 wrap" data-aos-once="true" data-aos="fade-up" data-aos-easing="linear"   data-aos-delay="900">
					<div class="item_feeds">
						<span class="lbl">Facebook</span>

						<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FMaraphone&width=280&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435" scrolling="yes" style="border:none; overflow:hidden; width:300px; height:305px; background: white; float:left; margin-top:5px;" allowtransparency="true" frameborder="0"></iframe>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-6 wrap" data-aos-once="true" data-aos="fade-up"  data-aos-easing="linear"  data-aos-delay="1000">
					<div class="item_feeds">
						<span class="lbl">Instagram</span>

						<!-- InstaWidget -->
						<a href="https://instawidget.net/v/user/MaraPhone" id="link-d6e715ed9e39b912fa2b8808939240b10eaea42f9919a6674305885879af9d8c" class="insta_wid">@MaraPhone</a>
						<script src="https://instawidget.net/js/instawidget.js?u=d6e715ed9e39b912fa2b8808939240b10eaea42f9919a6674305885879af9d8c&width=280px"></script>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>


<?php get_footer();?>