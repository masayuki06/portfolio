<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php echo get_the_title(); ?> - Ethos Integrated Solutions</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/x-icon" />

	<!-- frameworks -->
	<link href="<?php echo bloginfo('template_directory');?>/assets/framework/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- font and style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/fonts/elegant_font/HTML_CSS/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/fonts/popins/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/fonts/droidkufi/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/style.css">

	<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/selectric.css">

	<!--  slick slider -->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/slick/slick-theme.css">

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANt6Xy9LQccwaqMhnj1MQ9_CFVftSYuKA&callback=initMap"></script>
	<?php wp_head(); ?>
</head>


<body>

<?php global $post; ?>

<!-- header starts -->
<?php if ( ! is_page('Homepage')): ?>


<section class="miniheader">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<?php while( have_rows('header_elements', 292) ): the_row(); ?>
				<?php if ( get_row_layout() == 'socials'): ?> 
				<div class="col-md-6 col-sm-6">
					<div class="social">
						<a href="<?php echo get_sub_field('facebook_url'); ?>" target="_blank"><i class="fb fa fa-facebook-square"></i></a>
						<a href="<?php echo get_sub_field('twitter_url'); ?>" target="_blank"><i class="tw fa fa-twitter"></i></a>
						<a href="<?php echo get_sub_field('instagram_url'); ?>" target="_blank"><i class="insta fa fa-instagram"></i></a>
						<a href="<?php echo get_sub_field('linkedin_url'); ?>" target="_blank"><i class="link fa fa-linkedin"></i></a>
					</div>
				</div>
				<?php endif; ?>
				<?php endwhile; ?>

				<?php while( have_rows('header_elements', 292) ): the_row(); ?>
				<?php if ( get_row_layout() == 'contacts'): ?> 
				<div class="col-md-6 col-sm-6">
					<div class="cinfo">
						<span>
							<a href="mailto:<?php echo get_sub_field('field_5ea1b7db7e317'); ?>"><?php echo get_sub_field('field_5ea1b7db7e317'); ?></a> |  
							<a href="tel:<?php echo get_sub_field('field_5ea1b7db7e318'); ?>"><?php echo get_sub_field('field_5ea1b7db7e318'); ?></a>
						</span>     
					</div>
				</div>
				<?php endif; ?>
				<?php endwhile; ?>


			</div>
		</div>
	</div>
</section>


<?php endif ?>



<?php if (is_page('Homepage')): ?>

<nav class="navbar navbar-inverse m_header home_header">

	<?php else: ?>

		<nav class="navbar navbar-inverse m_header">

	<?php endif ?>


	<div class="container">
	    <div class="navbar-header ">
	    	<button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
			  <div id="navbar-hamburger">
				 <span class="sr-only">Toggle navigation</span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
			  </div>
			</button>

			<?php if (is_page('Homepage')): ?>

	      		<a class="navbar-brand" href="<?php echo bloginfo('url');?>"><img class="logo" src="<?php echo bloginfo('template_directory');?>/assets/img/logo-ethos-main.png" alt=""></a>

	      	<?php else: ?>

	      		<a class="navbar-brand" href="<?php echo bloginfo('url');?>"><img class="logo" src="<?php echo bloginfo('template_directory');?>/assets/img/logo-ethos-white.png" alt=""></a>

	      	<?php endif ?>

	    </div>

	    <div class="collapse navbar-collapse  " id="myNavbar">
		    <ul class="nav navbar-nav  navbar">
				<li><a class="<?php echo (is_front_page() ? 'active' : ''); ?>" href="<?php echo bloginfo('url');?>">Home</a></li>
				<li><a class="<?php echo (is_page('about-us') ? 'active' : ''); ?>" href="<?php echo bloginfo('url');?>/about-us">About us</a></li>	
				<li class="dropdown"><a class="<?php echo (is_page('solutions') || $post->post_parent ? 'active' : ''); ?>" href="<?php echo bloginfo('url');?>/solutions">Solutions</a>

					<?php include 'mega_menu.php';?>
				  	

				</li>

				<li><a  class="<?php echo (is_page('media') || is_single('') ? 'active' : ''); ?> "  href="<?php echo bloginfo('url');?>/media">Media</a></li>
				<li><a class="<?php echo (is_page('contact-us') ? 'active' : ''); ?>" href="<?php echo bloginfo('url');?>/contact-us">Contact Us</a></li>

				<li class="lang">
						<a class="bt_lang" href="#">العربية</a>
				</li>
		    </ul>
		</div>
	</div>
</nav>
<!--  header ends  -->


