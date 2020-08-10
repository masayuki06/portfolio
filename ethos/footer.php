

<!-- footer starts -->
<footer style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/bg-ftr.png')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a class="ftr_logo"><img src="<?php echo bloginfo('template_directory');?>/assets/img/Ethos_white.png"></a>
			</div>

			<div class="col-md-8">
				<ul class="lnks">
					<li class="<?php echo (is_front_page() ? 'active' : ''); ?>"><a href="<?php echo bloginfo('url');?>">Home</a></li>
					<li class="<?php echo (is_page('about-us') ? 'active' : ''); ?>"><a href="<?php echo bloginfo('url');?>/about-us">About Us</a></li>
					<li class="<?php echo (is_page('solutions') ? 'active' : ''); ?>"><a href="<?php echo bloginfo('url');?>/solutions">Solutions</a></li>
					<li class="<?php echo (is_page('media') ? 'active' : ''); ?>"><a  href="<?php echo bloginfo('url');?>/media">Media</a></li>
			      	<li class="<?php echo (is_page('contact-us') ? 'active' : ''); ?>"><a  href="<?php echo bloginfo('url');?>/contact-us">Contact Us</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="copy">
				<?php while( have_rows('header_elements', 292) ): the_row(); ?>
				<?php if ( get_row_layout() == 'copyright_and_menu'): ?> 
				<div class="col-md-8">
					<p><?php echo get_sub_field('field_5ee52b222039b'); ?> &nbsp; | &nbsp; 
						<?php while( have_rows('footer_menu_repeater', 292) ): the_row(); ?>
						<a href="<?php echo get_sub_field('field_5ee532b54aef9'); ?>"><?php echo get_sub_field('field_5ee532a94aef8'); ?></a>&nbsp;&nbsp;
						<?php endwhile; ?>
					</p>
				</div>
				<?php endif; ?>
				<?php endwhile; ?>


				<?php while( have_rows('header_elements', 292) ): the_row(); ?>
				<?php if ( get_row_layout() == 'socials'): ?> 
				<div class="col-md-4 social">
					<a href="<?php echo get_sub_field('facebook_url'); ?>" target="_blank"><i class="fb fa fa-facebook-square"></i></a>
						<a href="<?php echo get_sub_field('twitter_url'); ?>" target="_blank"><i class="tw fa fa-twitter"></i></a>
						<a href="<?php echo get_sub_field('instagram_url'); ?>" target="_blank"><i class="insta fa fa-instagram"></i></a>
						<a href="<?php echo get_sub_field('linkedin_url'); ?>" target="_blank"><i class="link fa fa-linkedin"></i></a>
				</div>
				<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</footer>
<!-- footer ends   -->

<!-- ////////////////   SCRIPT AREA  ///////////////-->
<script src="<?php echo bloginfo('template_directory');?>/assets/framework/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/framework/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo bloginfo('template_directory');?>/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/assets/js/jquery.selectric.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/js/jquery.magnific-popup.min.js"></script>



<!-- selectric -->
<script>
	$('select').selectric();
</script>

<!-- modal video -->
 <script>
     $(document).ready(function() {
      $('.modal-video').magnificPopup({type:'iframe'});
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.h_slider').slick({
	 		autoplay: false,
	 		autoplaySpeed: 3000,
	 		slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			adaptiveHeight: true,
			arrows:false,
			responsive: [
  			  {
				  breakpoint: 480,
				  settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1,
				 
				  }
				}
			]
						
		  });
	});
 </script>

 <script type="text/javascript">
	$(document).ready(function(){
		$('.tool_slider').slick({
	 		autoplay: false,
	 		autoplaySpeed: 3000,
	 		slidesToShow: 4,
			slidesToScroll: 4,
			dots: true,
			arrows:false,
			adaptiveHeight: true,
			responsive: [
  			  {
				  breakpoint: 480,
				  settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2,
				  autoplay: true,
				  }
				}
			]
	  	});
	});
 </script>

 <script type="text/javascript">
	$(document).ready(function(){
		$('.award_slider').slick({
	 		autoplay: false,
	 		autoplaySpeed: 3000,
	 		slidesToShow: 4,
			slidesToScroll: 4,
			dots: true,
			arrows:false,
			adaptiveHeight: true,
			responsive: [
  			  {
				  breakpoint: 480,
				  settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2,
				  
				  }
				}
			]
		});
	});

	$('.award_slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
	    console.log(currentSlide);  
		if(currentSlide == 4){
			$('.yr').text('2020');
		}else{
			$('.yr').text('2019');
		}
	});
 </script>

<script>
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('.nav-link').on('shown.bs.tab', function(e) {
		  var href = $(this).attr('href');
		  $('html, body').animate({
		    scrollTop: $(href).offset().top-50
		  }, 'slow');
		});
	}
</script>



<?php wp_footer(); ?>



</body>
</html>
