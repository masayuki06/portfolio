 <?php get_header(); ?>

<section class="cta_steps">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="steps"> 
					<a href="<?php bloginfo('url'); ?>/choose" ><span>1</span>Choose phone </a>
					<div class="sep"></div>
				</div>
				<div class="steps"> 
					<a class="active"><span>2</span>Customise order </a>
					<div class="sep"></div>
				</div>
				<div class="steps"> 
					<a><span>3</span>Checkout </a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $var_pid = get_the_id(); ?>

<!-- <?php echo $var_pid; ?> -->
<section class="product_details <?php echo ($var_pid == 414 || $var_pid == 2207  ? 'product_details_x' : ''); ?>">
	<div class="container">
		<div class="row">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; endif; ?>

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
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Accessories-2-pin.jpg" alt="">
					<div class="desc">
						<p>Power Adaptor (2 pin)</p>
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-6 item " >
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Accessories-04.jpg" alt="">
					<div class="desc">
						<p>Power Adaptor (3 pin) </p>
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
				<div class="accor_dion">
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