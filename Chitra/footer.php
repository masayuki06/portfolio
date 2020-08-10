
<!-- footer starts -->
<footer >
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="ftr_logo">
					<a href="<?php echo bloginfo('url');?>/"><img src="<?php echo bloginfo('template_directory');?>/assets/img/ramkatha-logo-footer.png"></a>
				</div>

				<div class="col-md-3 item">
					<div class="contact">
						<h4>CONTACT US</h4>
						<p><a href="mailto:chitrakutdham@yahoo.com">chitrakutdham@yahoo.com</a></p>
						<!-- <p>
						<?php echo get_field('address',1009); ?>
						Phone:<a href="tel:<?php echo get_field('phone_number',1009); ?>"><?php echo get_field('phone_number',1009); ?></a>
						</p> -->
					</div>
				</div>

				<div class="col-md-2 item">
					<div class="about">
						<h4>About</h4>
						<a href="<?php echo bloginfo('url');?>/about">Ram Katha </a>
						<a href="<?php echo bloginfo('url');?>/about">Morari Bapu</a>
					</div>
				</div>

				<div class="col-md-4 item">
					<div class="sec_tions">
						<h4>Sections</h4>
						<ul>
							<li><a href="<?php echo bloginfo('url');?>/about">About Ram Katha </a></li>
							<li><a href="<?php echo bloginfo('url');?>/kathas">Full Katha List </a></li>
							<li><a href="<?php echo bloginfo('url');?>/kathas/upcoming">Upcoming Kathas </a></li>
							<li><a href="<?php echo bloginfo('url');?>/kathas/translations">Katha Translations </a></li>
							<li><a href="<?php echo bloginfo('url');?>/katha-chopais">Katha Chopais </a></li>
							<li><a href="<?php echo bloginfo('url');?>/kathas/glossary">Katha Glossary </a></li>
							<li><a href="<?php echo bloginfo('url');?>/scriptures/shloka">Shloka</a></li>
							<li><a href="<?php echo bloginfo('url');?>/scriptures/stuti">Stuti</a></li>
							<li><a href="<?php echo bloginfo('url');?>/gallery/bapu">Photos</a></li>
							<li><a href="<?php echo bloginfo('url');?>/media">Media</a></li>
							<li><a href="<?php echo bloginfo('url');?>/kathas/booklets">Katha Booklets</a></li>
							<li><a href="<?php echo bloginfo('url');?>/videos">Videos</a></li>
							<li><a href="<?php echo bloginfo('url');?>/contact-us">Contact Us</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 item">
					<div class="up_coming">
						<h4>Upcoming Kathas</h4>
						<?php 
							$args = array(
							'post_type' => array('katha'),
							'posts_per_page' => 4,
							'orderby'   => 'meta_value_num',
							'meta_key'  => 'katha_number',
							'order'   => 'DESC',
																				
						);
						$x = 0;
						$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) :
							while ( $loop->have_posts() ) :
							$loop->the_post();

						$x++;
						while ( have_rows('kathas_list') ) : the_row();
							if( get_row_layout() == 'katha_details' ):
							?>
						<a href="<?php the_permalink(); ?>"><?php echo get_sub_field('town-city'); ?></a>
							<?php endif; ?>
						<?php endwhile; endwhile; ?>		
						<?php endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="copy">
				<div class="col-md-8">
					<p>© 2020 Shree Chitrakutdham Trust - All rights reserved    |    Official website of Morari Bapu</p>
				</div>

				<div class="col-md-4">
					<div class="social">
						<span>Follow us</span>
						<!-- <a href="<?php echo get_field('facebook',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/social-fb-fff.png"></a>
						<a href="<?php echo get_field('twitter',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/social-tw-fff.png"></a>
						<a href="<?php echo get_field('instagram',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/social-ig-fff.png"></a> -->
						<a href="<?php echo get_field('youtube',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/social-yt-fff.png"></a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="dl">
				<hr class="ftr_sep">
				<div class="col-md-8">
					<p><?php echo get_field('text',1265); ?></p>
				</div>

				<div class="col-md-4">
					<div class="g_store">
						<a href="<?php echo get_field('android',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/emblem-appstore.png"></a>
						<a href="<?php echo get_field('ios',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/emblem-googleplay.png"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer ends   -->


<!-- popout starts -->
<div class="modal fade  media" id="notice">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"><i class="lnr lnr-cross"></i></button>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="wrapper">
								<h2>IMPORTANT NOTICE</h2>
				
								<div class="desc">
									<?php 
									$my_postid = 1631;//This is page id or post id
									$content_post = get_post($my_postid);
									$content = $content_post->post_content;
									echo $content;
									?>
								</div>	

								<div class="disclaimer">
									<?php echo get_field('disclaimer',1631); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- popout ends -->


<!-- ////////////////   SCRIPT AREA  ///////////////-->
<script src="<?php echo bloginfo('template_directory');?>/assets/framework/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/framework/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo bloginfo('template_directory');?>/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/js/jquery.magnific-popup.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

<script>
	$(document).ready( function () {
    $('#table_id').DataTable(
    	{
    		"bSort" : false,
    		"info": false,
    		 "language": {
    			"lengthMenu": "Show _MENU_ ",
    			"sSearch":    "", 
    			"searchPlaceholder" : "Search",

    			"paginate": {
		            "next":     "<i class='fa fa-angle-right'>",
		            "previous": "<i class='fa fa-angle-left'>" 
	        	}
			}
    	});
	});
</script>




<script type="text/javascript">
	$(document).ready(function(){
		$('.h_slider').slick({
			nextArrow: '<i class="fa fa-angle-right aright "></i>',
		    prevArrow: '<i class="fa fa-angle-left aleft"></i>',	
	 		autoplay: true,
	 		autoplaySpeed: 5000,
	 		slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			adaptiveHeight: true
		});
	});
</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('.vid_slider').slick({
			arrows:false,
	 		autoplay: false,
	 		autoplaySpeed: 3000,
	 		slidesToShow: 4,
			slidesToScroll: 4,
			dots: false,
			adaptiveHeight: true,
			responsive:[
				{
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 2,
			        adaptiveHeight: true
			      }
			    }
			]
		});
	});
 </script>
 
 <script>
    $(document).ready(function(){
		$("#notice .close").click(function(){
			$("#notice").hide();
		});
    });
</script>

 <script>
     $(document).ready(function() {
      $('.modal-video').magnificPopup({type:'iframe'});
    });
</script>


 <script>
 	$(function() {
	  $('.k_glossary #kCollapsed1').addClass('in');
	});
 </script>

<script>
$(document).ready(function(){
	$('#gall_modal').click(function() {
      $('#gall_modal').hide();
    });

    $(".modal-content").click(function(e) {
	   e.stopPropagation();
	});
});
</script>

 <?php wp_footer(); ?>
 
</body>
</html>