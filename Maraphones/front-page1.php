<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

 <!-- Home Intro Animation -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/createjs-2015.11.26.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mara-duo.js"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("E372EF1B6918431D97A71E89B652B025");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.Marahomeintro();
	stage = new lib.Stage(canvas);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	AdobeAn.makeResponsive(true,'both',false,1,[canvas,anim_container,dom_overlay_container]);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>


<!-- covid-19 ticker -->
<div class="covid"><a href="https://maraphones.com/sa/covid19discount/" target="_blank">Frontline Workers - Discount Alert</a></div>

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

				<br/><br/>

				<!-- <span class="promotxt">Free Screen Protector with every purchase!</span> <br> -->

				<?php if (get_user_geo_country() == "South Africa"): ?>
				<span class="promotxt">Free delivery for South Africa - Limited time only.</span>
				<?php endif; ?>
				
			</div>

			<!-- #### Static Hero #### -->
			<!-- <div class="col-md-7 col-sm-6 ftrd_x " data-aos-once="true" data-aos="fade-left"  data-aos-duration="1000">
				<img class="hero_ftrd" src="<?php the_field('background_image_h'); ?>" alt="">
			</div>
 -->

			<div class="col-md-7 col-sm-6 ftrd_x">
				<div id="animation_container" style="background-color:rgba(255, 255, 255, 0.00); width:625px; height:700px">
					<canvas id="canvas" width="625" height="700" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0.00);"></canvas>
					<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:625px; height:700px; position: absolute; left: 0px; top: 0px; display: block;">
					</div>
				</div>
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
					Experience the Mara Phone</a>
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
					<a href="https://www.android.com/one/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/android-logo.png" alt=""></a>
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

<section class="h_cta4" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/fast-charging-bg.jpg')no-repeat;"> 
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
						<p class="mtitle"><?php the_title(); ?></p>
						<p><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
					</div>

					<a class="read" href="<?php the_permalink(); ?>">Read more <i class="lnr lnr-chevron-right"></i></a>
				</div>
			</div>
			<?php endwhile; ?>		
			<?php endif; ?>
		</div>

	</div>
</section>


<?php get_footer();?>