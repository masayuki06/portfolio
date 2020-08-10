<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<section class="cstm_hero c_hero" >
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="c_contact">
	<div class="container">
		<div class="row">
			<div class="wrapper">

				<div class="intro">
					<div class="col-md-12">
						<?php the_content(); ?>
					</div>
				</div>

				<?php while( have_rows('contact_details') ): the_row(); ?>
				<?php if ( get_row_layout() == 'contacts'): ?> 

				<div class="add_ress">
					<div class="col-md-4 col-sm-5">
						<div class="item_wrap">
							<div class="off_ice">
								<h4><?php echo get_sub_field('office_title'); ?></h4>
								<?php echo get_sub_field('office_address'); ?>
							</div>

							<div class="con_tact">
								<h4><?php echo get_sub_field('get_in_touch_title'); ?></h4>
								<?php echo get_sub_field('contact_numbers'); ?>
							</div>
						</div>
					</div>

					<div class="col-md-8 col-sm-7">
						<div class="loca_tion">
							<div id="map">
								<!-- Google map code from EZ Map - https://ezmap.co -->
								
								<script>
								  function init() {
								    var mapOptions = { "center": { "lat": <?php echo get_sub_field('latitude'); ?>,  "lng": <?php echo get_sub_field('longitude'); ?> }, "clickableIcons": true, "disableDoubleClickZoom": false, "draggable": true, "fullscreenControl": true, "keyboardShortcuts": true, "mapMaker": false, "mapTypeControl": true, "mapTypeControlOptions": {  "text": "Default (depends on viewport size etc.)",  "style": 0 }, "mapTypeId": "roadmap", "rotateControl": true, "scaleControl": true, "scrollwheel": false, "streetViewControl": true, "styles": false, "zoom": 15, "zoomControl": true};

								    var mapElement = document.getElementById('<?php echo get_sub_field('map_id'); ?>');
								    var map = new google.maps.Map(mapElement, mapOptions);

								    var marker0 = new google.maps.Marker({title: "Ethos", icon:'<?php echo bloginfo('template_directory');?>/assets/img/map-marker.png', position: new google.maps.LatLng(<?php echo get_sub_field('latitude'); ?>, <?php echo get_sub_field('longitude'); ?>), map: map});


								    var infowindow0 = new google.maps.InfoWindow({content: "<?php echo get_sub_field('google_map_marker_contents'); ?>",map: map});
			                        marker0.addListener('click', function () { infowindow0.open(map, marker0) ;});infowindow0.close();

								    
								    
								    google.maps.event.addDomListener(window, "resize", function() { var center = map.getCenter(); google.maps.event.trigger(map, "resize"); map.setCenter(center); });
								  }
								google.maps.event.addDomListener(window, 'load', init);
								</script>
								<style>
								  #<?php echo get_sub_field('map_id'); ?>{min-height:150px;min-width:150px;height: 420px;width: 100%;}
								  #ez-map .infoTitle{}
								  #ez-map .infoWebsite{}
								  #ez-map .infoEmail{}
								  #ez-map .infoTelephone{}
								  #ez-map .infoDescription{}
								</style>
								<div id='<?php echo get_sub_field('map_id'); ?>'></div>
								<!-- End of EZ Map code - https://ezmap.co -->
							</div>
						</div>
					</div>

					<div class="border"></div>
				</div>

				<?php endif; ?>
				<?php endwhile; ?>
				
				

				<div class="enq">
					<div class="col-md-12">
						<div class="cfrm">
							<h4>Leave a Message</h4>
							<?php echo do_shortcode ('[contact-form-7 id="169" title="Contact Us"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>



<?php get_footer();?>