<?php /* Template Name: Choose Page */ ?>
<?php get_header(); ?>



<section class="cta_steps">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="steps"> 
					<a class="active"><span>1</span>Choose Phone </a>
					<div class="sep"></div>
				</div>
				<div class="steps"> 
					<a><span>2</span>Customise Order </a>
					<div class="sep"></div>
				</div>
				<div class="steps"> 
					<a><span>3</span>Checkout </a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="a_hero choose_hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro " data-aos-once="true" data-aos="fade-up"  data-aos-easing="linear"  data-aos-delay="100">
				<h1>Choose your phone</h1>
			</div>
		</div>

		<div class="row">
			<div class="item_wrapper">
				<div class="col-md-12">
					<div class="item " data-aos-once="true" data-aos="fade-right"  data-aos-easing="linear"  data-aos-delay="200" >
						<a href="<?php bloginfo('url'); ?>/product/mara-x/"><img class="p_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/x.png" alt="">
						<div class="wrap"><img class="ftrd" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-x.png" alt=""></div></a>
						<a class="choose" href="<?php bloginfo('url'); ?>/product/mara-x">CHOOSE</a>
					</div>

					<div class=" item " data-aos-once="true" data-aos="fade-left"  data-aos-easing="linear"  data-aos-delay="200">
						<a href="<?php bloginfo('url'); ?>/product/mara-z/"><img class="p_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/z.png" alt="">
						<div class="wrap"><img class="ftrd" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-z.png" alt=""></div></a>
						<a class="choose" href="<?php bloginfo('url'); ?>/product/mara-z/">CHOOSE</a>
					</div>
				</div>

		</div>
	</div>
</section>

<section class="a_slide">
	<div class="container-fluid">
		<div class="row">
			<div class="a_slider">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Accessories-hero.jpg" alt="">
				</div>

				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Accessories-hero.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="a_hero c_box">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro " >
				<h1>What’s in the Box</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 c_left">
				<div class="vid_frame">
					<iframe src="https://www.youtube.com/embed/hVN8Tb6e2Mk"></iframe>
				</div>
			</div>
			
			<div class="col-md-4 c_right">
				<div class="col-md-6 col-sm-6 col-xs-6 item " >
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Accessories-01.jpg" alt="">
					<div class="desc">
						<p>Earphones</p>
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-6 item " >
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Accessories-02.jpg" alt="">
					<div class="desc">
						<p>Turbo Charger</p>
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-6 item " >
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Accessories-03.jpg" alt="">
					<div class="desc">
						<p>Power Adaptor (2 pin)<br>(Coming Soon) </p>
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-6 item " >
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Accessories-04.jpg" alt="">
					<div class="desc">
						<p>Power Adaptor (3 pin)</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="c_compare">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper" >
					<img class="ftrd" src="<?php echo get_template_directory_uri(); ?>/assets/img/compare-gm8.png" alt="">
					<div class="desc">
						<h4>Compare Mara Phones Model</h4>
						<p>Find the best Mara Phone for you</p>
					</div>
				</div>
			</div>

			
		</div>
	</div>
</section>

<section class="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="accor_dion"  >
					<button class="accordion">How long will my order take?</button>
					<div class="panel">
					  <p>Standard delivery should take 3-5 working days. Once your order has been dispatched, a shipment notification email with an estimated delivery date will be send to you.</p>
					</div>

					<button class="accordion">Has my order been shipped?</button>
					<div class="panel">
					  <p>We will send you a shipping confirmation email once your order is processed for shipping.</p>
					</div>

					<button class="accordion">Can I ship to multiple addresses?</button>
					<div id="foo" class="panel">
					  <p>As of the moment, we do not have the option to ship one order to multiple addresses. You cannot send a single transaction to different locations. To ship to multiple addresses, you need to place a separate order for each location.</p>
					</div>

				</div>	
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>