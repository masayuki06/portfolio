<?php /* Template Name: Apply Thank you Page */ ?>
<?php get_header(); ?>


<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 left">
				<span>Mara Phones Careers</span>
			</div>

			<div class="col-md-8 col-sm-8 right">
				<!-- <ul>
					<li><a href="#">Features</a></li>
					<li><a href="x-specifications.html">Tech specs</a></li>
					<li><a href="#">Buy</a></li>
					<li><a href="#">Apps</a></li>
					<li><a href="accessories.html">Accessories</a></li>
				</ul> -->
			</div>
		</div>
	</div>
</section>

<section class="c_hero car_eer_head">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1>Careers</h1>
				<p>
					<span>View openings for</span>
					<a href="<?php bloginfo('url'); ?>/careers/?country=Rwanda"  >Rwanda</a> 
					<span class="cspace">|</span>
					<a href="<?php bloginfo('url'); ?>/careers/?country=South Africa" >South Africa</a>
				</p>
			</div>
		</div>
	</div>
</section>


<section class="thank_you_page car_err_thanks  c_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<h2>You application has been submitted!</h2>

				<div class="wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/success.png" alt="">
					<p>We shall contact you when you are shortlisted.</p>
					<p>Good luck!</p>
				</div>				
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>