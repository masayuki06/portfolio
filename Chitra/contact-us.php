<?php /* Template Name: Contact - us */ ?>
<?php get_header(); ?>

<section class="cstm_hero c_hero" >
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>Contact us</h1>

					<div class="crumbs">
						<ol class="breadcrumb">
							<li><a href="<?php echo bloginfo('url');?>/">Home</a></li>
							<li class="active">Contact us</li>
				        </ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="k_list " id="contact">
	<div class="menu">
		<div class="container">
			<ul>
				<li class="gen"><a class="active" href="">General <br>Inquiry <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
				<li class="audio"><a class="" href="<?php echo bloginfo('url');?>/contact-us/audio-video/">Katha Audio and Video <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
				<li class="book"><a class="" href="<?php echo bloginfo('url');?>/contact-us/katha-booklets-photos/">Katha Booklets and Photos <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			</ul>
		</div>
	</div>

	<div class="c_details">
		<img class="c_ftrd" src="<?php echo bloginfo('template_directory');?>/assets/img/contact-hero2.jpg">
		<div class="container	">
			<div class="row">
				<div class="col-md-8">
					<div class="wrapper ">
						<p><strong>For any general enquiries, please get in touch with Shree Chitrakutdham Trust</strong></p>
						<!-- <p class="add_ress">Shree Chitrakutdham Trust <br>
							Vill. Talgajarda <br>
							District Bhavnagar <br>
							Gujarat, India <br>
							Phone: <a href="tel:+91 2844 246400">+91 2844 246400</a>
						</p> -->

						<p><a href="mailto:chitrakutdham@yahoo.com">chitrakutdham@yahoo.com</a></p>

						<div class="frm_wrapper">
							<p>Please fill in the form below for any website related query only.</p>

							<?php echo do_shortcode('[contact-form-7 id="1629" title="Contact Us"]'); ?>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					&nbsp;
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>