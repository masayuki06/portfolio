
<!-- footer starts -->
<footer class="<?php echo (is_front_page() ? 'home_footer' : ''); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-6 left">
				<p ><?php the_field('label',70); ?></p>
			</div>

			<div class="col-md-6 right">
				<span class="social">
					<a href="<?php the_field('facebook',70); ?>"><i class="fa fa-facebook-f"></i></a>
					<a href="<?php the_field('instagram',70); ?>"><i class="fa fa-instagram"></i></a>
				</span>

				<span>
					<a href="#">Privacy Policy</a>
				</span>

				<span>
					Crafted by<a href="https://www.thedesignhat.com/">The Design Hat</a>
				</span>
			</div>
		</div>
	</div>
</footer>


<!-- footer ends   -->

<!-- ////////////////   SCRIPT AREA  ///////////////-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/framework/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/framework/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.selectric.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>

<!-- crossbrowser (detecting Mac OS)-->
<script>
	if(navigator.userAgent.indexOf('Mac') > 0)
		$('body').addClass('mac-os');
	if(navigator.userAgent.indexOf('Safari') > 0)
		$('body').addClass('safari');
	if(navigator.userAgent.indexOf('Chrome') > 0)
		$('body').addClass('chrome');
</script>

<!-- <script>
	if( /iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$(function () {
		    $('body').addClass('ios');
		});
	}
</script> -->
<!-- crossbrowser -->



<script>
	
	var url_string = window.location.href;

	var url = new URL(url_string);
	var c = url.searchParams.get("cteg");
	
	if (c == 1) {

		$('#mkclick1').click();

	}else if (c == 2) {
		$('#mkclick2').click();
	}else if (c == 3) {
		$('#mkclick3').click();
	}

</script>

<script>
	$(document).ready(function(){
		$("#all ").addClass('active');
		$(".nav-tabs li").removeClass('active');
		$("#tab_PHYSIOTHERAPY , #tab_PILATES , #tab_SCOLIOSIS , #tab_SPINAL , #tab_TRAINING").addClass('in active');
        

	    $("#all").click(function(){
	    	$("#all").addClass('active');
	    	$("#tab_PHYSIOTHERAPY , #tab_PILATES , #tab_SCOLIOSIS , #tab_SPINAL , #tab_TRAINING").addClass('in active');
	    });

	    $("#mkclick1 , mkclick2 , mkclick3 , mkclick4 , mkclick5").click(function(){
	    	$("#all ").removeClass('active');
	    });
	});
</script>


<!-- selectric -->
<script>
	$('select').selectric();
</script>

 <script>
         $(document).ready(function() {
          $('.modal-image').magnificPopup({type:'image'});
        });
   </script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.hero_slider').slick({
	 		autoplay: true,
	 		autoplaySpeed: 3000,
	 		slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				fade:true

				
		  });
	});
 </script>

  <script>
		 $('.slider-for').slick({
			nextArrow: '<i class="lnr lnr-chevron-right right-arrow"><i>',
			prevArrow: '<i class="lnr lnr-chevron-left left-arrow"><i>',
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: true,
		  fade: true,
		  asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
			
		  slidesToShow: 15,
		  slidesToScroll: 0,
		  asNavFor: '.slider-for',
		  dots: true,
		  centerMode: false,
		  focusOnSelect: true
		});
	</script>

 <?php wp_footer(); ?>
</body>
</html>
