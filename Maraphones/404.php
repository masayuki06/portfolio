<?php /* Template Name: 404 */ ?>
<?php get_header(); ?>


<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 left">
				<span>Page not found</span>
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


<section class="thank_you_page car_err_thanks  c_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<h2><span style="font-size: 60px;">404</span></h2>

				<div class="wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/success.png" alt="">
					<p>We cannot find the page you are looking for. Go back to <a href="https://maraphones.com/sa/">home</a>.</p>
					
				</div>				
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>