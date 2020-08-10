<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>NorAlign – Functional Rehabilitation Centre</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png" type="image/x-icon" />

	<!-- frameworks -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/framework/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- font and style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/gotham/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/selectric.css">

	<!--  slick slider -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
	<?php wp_head(); ?>
</head>
<body>

<!-- header starts -->
<section class="miniheader">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<span><a href="tel:<?php the_field('phone',231); ?>"><i class="fa fa-phone"></i><?php the_field('phone',231); ?></a></span>

					<span><a href="mailto:<?php the_field('email',231); ?>"><i class="fa fa-envelope"></i><?php the_field('email',231); ?></a></span>

					<span>
					    <a href="<?php the_field('facebook',231); ?>"><i class="fa fa-facebook-f"></i></a>
					    <a href="<?php the_field('instagram',231); ?>"><i class="fa fa-instagram"></i></a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<nav class="navbar navbar-inverse m_header">
  <div class="container">
    <div class="navbar-header">
    	<button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
		  <div id="navbar-hamburger">
			 <span class="sr-only">Toggle navigation</span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
		  </div>
		</button>
      	<a class="navbar-brand" href="<?php bloginfo('url'); ?>/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
	    <ul class="nav navbar-nav  navbar-right">
	      <li <?php echo (is_front_page() ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/">Home</a></li>

	      
	      <li class=" <?php echo (is_page('about-us') ? 'active' : ''); ?> dropdown"><a href="<?php bloginfo('url'); ?>/about-us">about us <i class="lnr lnr-chevron-down mb"></i></a>
				<ul class="dropdown-menu">
					<li ><a  href="<?php bloginfo('url'); ?>/about-us">Who are we?</a></li>
				    <li ><a  href="<?php bloginfo('url'); ?>/our-team">OUR TEAM</a></li>
				    <li><a href="<?php bloginfo('url'); ?>/the-centre">THE CENTRE</a></li>
				</ul>
	      </li>

	    <!--   <li class=" dropdown"><a href="#"> Functional Rehabilitation </a>
				<ul class="dropdown-menu">
				    <li><a class="" href="<?php bloginfo('url'); ?>/chronic-pain">CHRONIC PAIN</a></li>
				    <li><a href="#">SPORTS REHAB</a></li>
				</ul>
	      </li>
	      <li><a href="#"> Physiotherapy</a></li>
	      <li><a href="#"> Spinal Therapy  </a></li>
	      <li><a href="#">pilates</a></li>
	      <li><a href="#">Orthopedics </a></li> -->


	        <li class="dropdown <?php echo (is_singular('service') ? 'active' : ''); ?>"><a href="#">SERVICES <i class="lnr lnr-chevron-down mb"></i></a>
				<ul class="dropdown-menu dropdown-menu2">

					<?php 
						
					 $args = array(
					 'post_type' => array('service'),
					'post_parent' => 0,
					'posts_per_page' => 7,
									                                     
					);

					$loop = new WP_Query( $args );
					 if ( $loop->have_posts() ) :
						while ( $loop->have_posts() ) :
						$loop->the_post();

					$child = get_children( get_the_id() );

					global $post;
					 ?>

					<li class="dropdown "><a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php echo (empty($child) ? '' : '<i class="lnr lnr-chevron-right"></i>'); ?></a>
					    <ul class="dropdown-menu dropdown-menu-layer1">

					    <?php if (!empty($child)): ?>
					    
					    <?php foreach ($child as $ch): ?>

					    	<?php if ($ch->post_title != 'hero_banner3'): ?>
					    		<li><a class="" href="<?php echo get_the_permalink(); ?><?php echo $ch->post_name; ?>"><?php echo $ch->post_title; ?></a></li>
					    	<?php endif ?>
					    	 
					    	 

					    <?php endforeach ?>

					    <?php endif ?>
						   
						</ul>
				    </li>


					<?php endwhile; ?>		
					<?php endif; ?>
				    <?php wp_reset_query(); ?>
				   
				</ul>
	      </li>





	      <li class="<?php echo (is_page('news') || is_singular('news-item') ? 'active' : ''); ?> dropdown"><a href="<?php bloginfo('url'); ?>/news">NEWS</a>
				<!-- <ul class="dropdown-menu">
				    <li><a href="<?php bloginfo('url'); ?>/training?cteg=1">TRAINERS</a></li>
				    <li><a href="<?php bloginfo('url'); ?>/training?cteg=2">PILATES</a></li>
				    <li><a href="<?php bloginfo('url'); ?>/training?cteg=3">Physiotherapy</a></li>
				</ul> -->
	      </li>

	      <li <?php echo (is_page('gallery') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/gallery">gallery</a></li>
	      <li <?php echo (is_page('contact-us') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/contact-us">contact</a></li>
	    </ul>
	</div>
  </div>
</nav>
<!--  header ends  -->