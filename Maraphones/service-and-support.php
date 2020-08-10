<?php /* Template Name: Service and Support */ ?>
<?php get_header(); ?>

<style type="text/css">
div.warranty_table {
  font-family: 'CircularBook', Arial, Helvetica, sans-serif;
  border: 1px solid #FFFFFF;
  background-color: #FAFAFA;
  color: #222222;
  width: 80%;
  text-align: left;
  border-collapse: collapse;
}
.divTable.warranty_table .divTableCell, .divTable.warranty_table .divTableHead {
  border: 1px solid #FFFFFF;
  padding: 7px 7px;
}
.divTable.warranty_table .divTableBody .divTableCell {
  font-size: 13px;
  border-bottom: 1px #ccc solid;
}

.divTable.warranty_table .divTableCell:nth-child(even) {
  background: #EBEBEB;
}
.divTable.warranty_table .divTableHeading {
  background: #000000;
  border-bottom: 5px solid #FFFFFF;
}
.divTable.warranty_table .divTableHeading .divTableHead {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 1px solid #424242;
}
.divTable.warranty_table .divTableHeading .divTableHead:first-child {
  border-left: none;
}

.warranty_table .tableFootStyle {
  font-size: 14px;
}
/* DivTable.com */
.divTable{ display: table; }
.divTableRow { display: table-row; }
.divTableHeading { display: table-header-group;}
.divTableCell, .divTableHead { display: table-cell;}
.divTableHeading { display: table-header-group;}
.divTableFoot { display: table-footer-group;}
.divTableBody { display: table-row-group;}

section.faq .accor_dion .panel{ background:transparent; }
</style>


<section class="service_hero" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-service-support.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h1>Service and Support</h1>
					<p>Get quick help through our Service Channels</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="q_help">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h2>Get Quick Help</h2>
				<div class="item col-md-4 col-sm-4">
					<a href="mailto:customercare@maraphones.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/quickhelp-ico-email.png"></a>

					<span><a href="mailto:customercare@maraphones.com" target="_blank">customercare@maraphones.com</a> </span>
				</div>

				<div class="item col-md-4 col-sm-4">
					<a href="javascript:void(0)" onclick="jivo_api.open(); return false;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/quickhelp-ico-chat.png"></a>

					<span><a >Chat with us</a> </span>
				</div>

				<div class="item col-md-4 col-sm-4">
					<a href="tel:+250 252502525"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/quickhelp-ico-call.png"></a>

					<span><a href="tel:+27 32 815 3250">+27 32 815 3250</a> </span>
				</div>
			</div>
			<div class="border"></div>
		</div>

		<div class="row">
			<div class="wrapper2">
				<div class="item_wrap">
					<div class="item">
						<a href="mailto: customercare@maraphones.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/quickhelp-ico-remote.png"></a>
						<h4>Remote</h4>
						<span>
							<a href="mailto: customercare@maraphones.com" target="_blank">Email us</a> 
							<a href="javascript:void(0)" onclick="jivo_api.open(); return false;">Live Chat</a> 
							<a href="https://maraphones.com/sa/contact-us">Contact Us</a> 
						</span>
					</div>
				</div>

				<div class="item_wrap">
					<div class="item">
						<a href="<?php echo bloginfo("url") ?>/repair-request"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/quickhelp-ico-repair.png"></a>
						<h4>Repair</h4>
						<span>
							<a href="<?php echo bloginfo("url") ?>/repair-request">Put in a Repair Request</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="find_us">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h2>Where to find us</h2>
			</div>
		</div>

		<div class="row">
			<div class="wrapper">
				<div class="col-md-3 col-sm-6 item_wrap">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag-safrica.png">
						<h4>South Africa</h4>
						<span class="red">DURBAN</span>
						<p>Dube TradePort <br> Plot No. 5, Umkhomazi Drive La Mercy, Durban 4399 <a href="tel:+27 32 815 3250">+27 32 815 3250</a></p>

						<span><a href="https://www.google.com/maps/place/Mara+Phones+South+Africa+Pty+Limited/@-29.6380424,31.1115657,17z/data=!3m1!4b1!4m5!3m4!1s0x1ef7113d487d2cff:0x2526975b8f384ec!8m2!3d-29.6380424!4d31.1137544?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pin.png">LOCATION</a> </span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 item_wrap">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag-safrica.png">
						<h4>South Africa</h4>
						<span class="red">JOHANNESBURG</span>
						<p>15 Alice Lane <br> Sandhurst <br> Sandton <br> 2191</p>

						<span><a href="https://goo.gl/maps/hKV3yLEhkRz6EA33A" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pin.png">LOCATION</a> </span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 item_wrap">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag-rwanda.png">
						<h4>Rwanda</h4>

						<span class="red">KIGALI</span>
						<p>Plot No 2166, Kigali Special Economic Zone, Masoro, Ndera, Gasabo District, Kigali, Rwanda <a href="tel:+250 252 502 525">+250 252 502 525</a></p>

						<span><a href="https://www.google.com/maps/place/Mara+Phones/@-1.955551,30.1574153,17z/data=!3m1!4b1!4m5!3m4!1s0x19db59b04db1e847:0x6ea70467824dc658!8m2!3d-1.9555564!4d30.159604?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pin.png">LOCATION</a> </span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 item_wrap">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag-uae.png">
						<h4>UAE</h4>
						<span class="red">DUBAI</span>
						<p>Unit 403, Emaar Square 4 <br> Downtown, Dubai <br> PO Box 27153 <a href="tel:+971 4 275 2900">+971 4 275 2900</a></p>

						<span><a href="https://www.google.com/maps/place/Emaar+Square+Bldg.+4/@25.2006795,55.2718266,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f6828e5e50f2b:0x3575a9058fd314bf!8m2!3d25.2006747!4d55.2740206" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pin.png">LOCATION</a> </span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 item_wrap">
					<div class="item">
						<img class="lion" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-flag-mara-lion.png">
						<h4>Mara Experience Store</h4>
						<span class="red">KIGALI BUSINESS CENTER</span>
						<p>Kigali Business Center Ltd Boulevard de l'umuganda KN 5 Road, <br> 599 plot number <br>  Ground floor Block D 9 <br> Kigali, Rwanda <a href="tel:+250 731 000 010">+250 731 000 010</a></p>

						<span><a href="https://www.google.com/maps/place/Mara+Experience+Store/@-1.9524035,30.0892928,17z/data=!3m1!4b1!4m5!3m4!1s0x19dca72f0dac1a01:0x522dcded1fbf7543!8m2!3d-1.9524035!4d30.0914815?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pin.png">LOCATION</a> </span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 item_wrap">
					<div class="item">
						<img class="lion" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-flag-mara-lion.png">
						<h4>Mara Experience Store</h4>
						<span class="red">UTC</span>
						<p>Kigali City Mall <br>KN 4 Avenue, Kigali, Rwanda, <br>No. 2.6, Level 2, Shop 6 <a href="tel:+250 788 204 346">+250 788 204 346</a></p>

						<span><a href="https://goo.gl/maps/epJxzbDurAWcqUyN8" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-pin.png">LOCATION</a> </span>

						<!-- <span class="red cs_red">- Coming soon -</span> -->
					</div>
				</div>

				<div class="col-md-3 col-sm-6 item_wrap">
					<div class="item">
						<img class="lion" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-flag-mara-lion.png">
						<h4>Mara Experience Store</h4>
						<span class="red">AIRPORT</span>

						<p>Airport Arrivals Kiosk <br> Kigali International Airport Arrivals</p>

						<span class="red ">- Coming soon -</span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 item_wrap">
					<!-- <div class="item">
						<img class="lion" src="<?php echo get_template_directory_uri(); ?>/assets/img/service-flag-mara-lion.png">
						<h4>Mara Experience Store</h4>

						<p>Maponya Mall Kiosk <br> Soweto</p>

						<span class="red ">- Coming soon -</span>
					</div> -->
				</div>






			</div>
		</div>
	</div>
</section>


<section class="our_partners">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h2>Our Partners</h2>
			</div>
		</div>

		<div class="row">
			<div class="wrapper">
				<h3>South Africa</h3>

				<div class="col-md-3 item">
					<a target="_blank" href="https://www.vodacom.co.za/cloud/shopping/product-details/MARA_X">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-vodacom.png">
						<span>vodacom</span>
					</a>
				</div>

				<div class="col-md-3 item">
					<a target="_blank" href="https://www.rsamade.co.za/product/mara-x/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-rsa-made.png">
						<span>RSA Made</span>
					</a>
				</div>

				<div class="col-md-3 item">
					<a target="_blank" href="https://www.pnp.co.za/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/pick-n-pay.png">
						<span>Pick n Pay</span>
					</a>
				</div>

				<div class="col-md-3 item">
					<a target="_blank" href="https://www.fnb.co.za/fnb-connect/catalogue_devices.html">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/fnb.png">
						<span>First National Bank</span>
					</a>
				</div>
			</div>
		</div>

		<div class="ss_sep"></div>

		<div class="row">
			<div class="wrapper wrapper2">
				<h3>Nigeria</h3>

				<div class="col-md-3 item">
					<a target="_blank" href="http://samrego.com/services-2/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-samrego.png">
						<span>SAMREGO GLOBAL</span>
					</a>
				</div>

				<div class="col-md-3 item">
					<a target="_blank" href="https://www.jumia.com.ng/android-phones/mara/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-jumia.png">
						<span>JUMIA</span>
					</a>
				</div>

				<div class="col-md-3 item">
					<a target="_blank" href="https://www.konga.com/search?search=mara%20phone">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/konga.png">
						<span>Konga.com</span>
					</a>
				</div>

				<div class="col-md-3 item">
					<a target="_blank" href="https://jiji.ng/search?query=maraphones">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/jiji.png">
						<span>Jiji.ng</span>
					</a>
				</div>

				<div class="col-md-3 item">
					<a target="_blank" href="https://swoop.com.ng/?s=maraphone&post_type=product">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/swoop.png">
						<span>Swoop</span>
					</a>
				</div>

				<div class="col-md-3 item">
					<a target="_blank"  href="https://computervillage.ng/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/cv.png">
						<span>Computer Village</span>
					</a>
				</div>
			</div>
		</div>

		<div class="ss_sep"></div>

		<div class="row">
			<div class="wrapper">
				<h3>UAE</h3>

				<div class="col-md-3 item">
					<a target="_blank" href="https://www.noon.com/uae-en/search?q=mara%20phones">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/partner-noon.png">
						<span>Noon.com</span>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="faq service_faq" style="background:#fff;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h3>Frequently Asked Questions</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="accor_dion"  >
					<button class="accordion">What is the easiest channel to report an issue regarding my Mara Phone?</button>
					<div class="panel">
					  <p>You can directly submit your request on the services and support page and you should receive a request within 48 hours.</p>
					</div>

					<button class="accordion">For the repair, how can I ship back my phone and what is the processing time?</button>
					<div class="panel">
					  <p>Once you have spoken to one of our customer service representatives, we will send you the logistic return slip and you can ship it to our Durban address and we will process it within 5/10 days.</p>
					</div>

					<button class="accordion">What are the types of defects covered within the warranty?</button>
					
					<div class="panel">
					  
					 <div class="divTable warranty_table">
						<div class="divTableHeading">
						<div class="divTableRow">
						<div class="divTableHead">S NO.</div>
						<div class="divTableHead">Products</div>
						<div class="divTableHead">Mobile<br />(Month)</div>
						<div class="divTableHead">Battery<br />(Month)</div>
						<div class="divTableHead">Adaptor<br />(Month)</div>
						<div class="divTableHead">Cable<br />(Month)</div>
						<div class="divTableHead">Earphone<br />(Month)</div>
						<div class="divTableHead">Touch Damage</div>
						<div class="divTableHead">DOA</div>
						</div>
						</div>
						<div class="divTableBody">
						<div class="divTableRow">
						<div class="divTableCell">1</div>
						<div class="divTableCell">Mara X</div>
						<div class="divTableCell">12+1</div>
						<div class="divTableCell">6</div>
						<div class="divTableCell">6</div>
						<div class="divTableCell">3</div>
						<div class="divTableCell">3</div>
						<div class="divTableCell">N/A</div>
						  <div class="divTableCell">7 Days</div>
						</div>
						<div class="divTableRow">
						<div class="divTableCell">2</div>
						<div class="divTableCell">Mara Z</div>
						<div class="divTableCell">12+1</div>
						<div class="divTableCell">6</div>
						<div class="divTableCell">6</div>
						<div class="divTableCell">3</div>
						<div class="divTableCell">3</div>
						<div class="divTableCell">N/A</div>
						<div class="divTableCell">7 Days</div>
						</div>
						</div>
						</div>
					</div>


					<button class="accordion">Why should I purchase a Mara Phone?</button>
					<div id="foo" class="panel">
					  <p>Mara Phones is introducing the first high tech, quality, affordable smartphone, manufactured in Africa. Mara Z and X are built with premium quality materials. With it’s Gorilla Glass that is crisp and sharp you get a great immersive experience and good visual quality. Our objectives are inclined and committed to enhancing and enriching the lives of the people of Africa. It aims at contributing to Africa’s industrialization by being the Pioneer in building a modern smartphone manufacturing factories across Africa with the state of art technologies and will boost Africa’s position as a high-tech manufacturing destination. This opportunity will create a lot of jobs in the country and address youth unemployment.</p>
					</div>


					<button class="accordion">Why Android One?</button>
					<div class="panel">
					  <p>Android One is Google's initiative to provide a secure and pure Android experience. Android One phones receive at least two years of OS upgrades. With the latest version of Android, you'll get software that auto-adjusts to your needs, and helps you get things done more easily throughout the day. You can get more information on <a href="https://www.android.com/one/" target="_blank">https://www.android.com/one/</a></p>
					</div>

				</div>	
			</div>
		</div>
	</div>
</section>

<section class="warranty" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-warranty.jpg')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<h4>Warranty Policies</h4>
					<a href="<?php bloginfo("url") ?>/warranty">Find out more</a> <span> <a style="display: none;" href="#">|</a> </span>
					<a style="display: none;" href="<?php bloginfo("url") ?>/warranty-policy#replacement">Replacement Warranty</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>