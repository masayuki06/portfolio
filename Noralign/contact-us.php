<?php /* Template Name: Contact Us Page */ ?>
<?php get_header(); ?>


<section class="a_hero" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>Contact us</h1>
			</div>
		</div>
	</div>
</section>

<section class="a_content c_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h2><?php the_field('headline'); ?></h2>
				<hr>
				
				<?php the_field('sub_headline'); ?>
				<span class="social">
					<a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook-f"></i></a>
					<a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="c_frm">
				<div class="col-md-8">
					<h4>Request an appointment</h4>
					<?php echo do_shortcode('[contact-form-7 id="116" title="Contact Us"]'); ?>
				</div>

				<div class="col-md-4">
					<div class="contact_details">
						<h4>Contact Details </h4>
						<ul>
						    <li>
						    	<span><i class="fa fa-map-marker"></i></span>
								<p><?php the_field('address'); ?></p>
						    </li>

						    <li>
						    	<span><i class="fa fa-envelope"></i></span>
						    	<p>
						    		<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
						    	</p>
						    </li>

						    <li>
						    	<span><i class="fa fa-phone"></i></span>
						    	<p>
						    		<a href="tel:<?php echo get_field('phone'); ?>"><?php the_field('phone'); ?></a>
						    	</p>
						    </li>

						   <li>
						    	<span><i class="fa fa-clock-o"></i></span>
						    	<p><?php the_field('schedule'); ?></p>
						    </li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row map">
		        <div class="col-md-12">
		             <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANt6Xy9LQccwaqMhnj1MQ9_CFVftSYuKA&callback=initMap"></script>
		              <script>
		                    function init() {
		                      var mapOptions = { "center": {  "lat":25.2138435,  "lng": 55.2589035 }, "clickableIcons": true, "disableDoubleClickZoom": false, "draggable": true, "fullscreenControl": true, "keyboardShortcuts": true, "mapMaker": false, "mapTypeControl": true, "mapTypeControlOptions": {  "text": "Default (depends on viewport size etc.)",  "style": 0 }, "mapTypeId": "roadmap", "rotateControl": true, "scaleControl": true, "scrollwheel": false, "streetViewControl": true, 

		                        "styles": 

		                        [{ "featureType": "administrative", "elementType": "all",
		                  "stylers": [ {"saturation": "-100"}]},
		                  {"featureType": "administrative.province","elementType": "all",
		                   "stylers": [{"visibility": "off"}]},
		                  {"featureType": "landscape","elementType": "all",
		                    "stylers": [{"saturation": -100},
		                          {"lightness": 65},
		                          {"visibility": "on"}]},
		                  {"featureType": "poi","elementType": "all",
		                  "stylers": [{"saturation": -100},{"lightness": "50"},
		                          {"visibility": "simplified"}]},
		                  {"featureType": "road","elementType": "all",
		                  "stylers": [{"saturation": "-100"}]},
		                  {"featureType": "road.highway","elementType": "all",
		                  "stylers": [{"visibility": "simplified"}]},
		                  {"featureType": "road.arterial","elementType": "all",
		                  "stylers": [{"lightness": "30"}]},
		                  {"featureType": "road.local","elementType": "all",
		                  "stylers": [ {"lightness": "40"}]},
		                  {"featureType": "transit","elementType": "all",
		                  "stylers": [{ "saturation": -100},
		                  {"visibility": "simplified"}]},
		                  {"featureType": "water","elementType": "geometry",
		                  "stylers": [{"hue": "#ffff00"},
		                          {"lightness": -25},
		                          {"saturation": -97}]},
		                  {"featureType": "water","elementType": "labels",
		                  "stylers": [{"lightness": -25},
		                          {"saturation": -100}]}], 


		                      "zoom": 20, "zoomControl": true};

		                        var mapElement = document.getElementById('ez-map');
		                        var map = new google.maps.Map(mapElement, mapOptions);

		                        var marker0 = new google.maps.Marker({title: "Noralign", icon:'', position: new google.maps.LatLng(25.2138435, 55.2589035), map: map});

		                        var infowindow0 = new google.maps.InfoWindow({content: "<?php the_field('google_map_content'); ?>",map: map});
		                        marker0.addListener('click', function () { infowindow0.open(map, marker0) ;});infowindow0.close();

		                        
		                        google.maps.event.addDomListener(window, "resize", function() { var center = map.getCenter(); google.maps.event.trigger(map, "resize"); map.setCenter(center); });
		                      }
		                    google.maps.event.addDomListener(window, 'load', init);
		                  </script>
		                  <style>
		                    #ez-map{min-height:150px;min-width:150px;height: 500px;width: 100%;}
		                    #ez-map p{ margin-bottom: 5px; }
		                    #ez-map p span a{ color: #c74f1b; }
		                    #ez-map .infoTitle{ color: #262120; font-size: 24px; line-height: 30px; }
		                    #ez-map .infoWebsite a{color: #c74f1b;}
		                    #ez-map .infoEmail{}
		                    #ez-map .infoTelephone{}
		                    #ez-map .infoDescription{}
		                  </style>
		                  <div id='ez-map'></div> 
		                  <!-- End of EZ Map code - https://ezmap.co -->
		        </div>
		      </div>
	</div>
</section>





<?php get_footer();?>