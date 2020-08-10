<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php echo get_the_title(); ?> | Moraribapu Official Website</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- frameworks -->
	<link href="<?php echo bloginfo('template_directory');?>/assets/framework/css/bootstrap.min.css" rel="stylesheet">

	<!-- font and style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link href="<?php echo bloginfo('template_directory');?>/assets/fonts/biko/stylesheet.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/assets/fonts/cabin/stylesheet.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/assets/fonts/choplin/stylesheet.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_directory');?>/assets/fonts/holland/stylesheet.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/style.css">

	<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/selectric.css">

	<!--  slick slider -->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/slick/slick-theme.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

	<style>
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover{ color: #999!important; border:none!important; }
		.dataTables_wrapper .dataTables_paginate .paginate_button.current, 
		.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{ color: #fff!important; border:none; }

		.dataTables_wrapper .dataTables_paginate .paginate_button{ color: #999!important; padding: 0;border: none;}
	</style>

	<?php wp_head(); ?>
</head>
<body>

<!-- header starts -->
<section class="miniheader" >
	<img class="bg_plus" data-toggle="modal" data-target="#notice" src="<?php echo bloginfo('template_directory');?>/assets/img/element-corner-peel.png">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-4 col-sm-4 left">
					<!-- <a href="<?php echo get_field('facebook',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/social-fb-1.png"></a>
					<a href="<?php echo get_field('twitter',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/social-tw-1.png"></a>
					<a href="<?php echo get_field('instagram',1265); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/social-ig-1.png"></a> -->
					<a href="<?php echo get_field('youtube',1265); ?>" target="_blank"><img src="<?php echo bloginfo('template_directory');?>/assets/img/social-yt-1.png"></a>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="logo">
						<a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo bloginfo('template_directory');?>/assets/img/ramkatha-logo-header.png" alt=""></a>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 right">
					<?php echo do_shortcode('[gtranslate]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="f_menu">
	<div class="container-fluid">
		 <div class="navbar-header">
	        <button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
			  <div id="navbar-hamburger">
				 <span class="sr-only">Toggle navigation</span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
			  </div>
			</button>
			<a href="index.html" class="mb_logo"><img src="<?php echo bloginfo('template_directory');?>/assets/img/ramkatha-logo-header.png" alt=""></a>
	    </div>

	    <div class="collapse navbar-collapse" id="myNavbar">
	       <ul class="nav navbar-nav ">
		   <?php $count = 1; ?>
		   	  <!-- <?php
					$menu = wp_get_nav_menu_items(6);
					$menu = add_has_children_to_nav_items($menu);
					 ?>

				<?php foreach($menu as $item): ?>
					<?php $post = get_post($item->ID);  ?>

        	  <?php if ($item->classes == 'has-childre'): ?>

						<?php else: ?>
							<li><a class="<?php echo (is_front_page() ? 'active' : ''); ?> <?php echo (is_page($post->post_name) ? 'active' : ''); ?>" href="<?php echo $item->url;?>"><?php echo $item->title; ?></a></li>
        	  <?php endif; ?>

				<?php endforeach; wp_reset_query(); ?> -->

				<li><a <?php echo (is_front_page() ? 'class="active"' : ''); ?> href="<?php echo bloginfo('url');?>/">Home</a></li>
        	  <li class="dropdown">
        	  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Ram Katha <i class="fa fa-angle-down"></i></a>
        	  	<ul class="dropdown-menu">
        	  		<li class="border border1"></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/about" <?php echo (is_page('about') ? 'class="active"' : ''); ?> >About Ram Katha</a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/kathas" <?php echo (is_page('kathas') ? 'class="active"' : ''); ?> >Full Katha List </a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/kathas/upcoming" <?php echo (is_page('upcoming') ? 'class="active"' : ''); ?> > Upcoming Ram Kathas </a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/kathas/translation" <?php echo (is_page('translations') ? 'class="active"' : ''); ?> >Katha Translations </a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/katha-chopais/" <?php echo (is_page('katha-chopais') ? 'class="active"' : ''); ?> >Katha Chopais </a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/kathas/glossary/" <?php echo (is_page('glossary') ? 'class="active"' : ''); ?> >Katha Glossary</a></li>
        	  	</ul>
        	  </li>

        	  <li class="dropdown">
        	  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Scriptures <i class="fa fa-angle-down"></i></a>
        	  	<ul class="dropdown-menu">
        	  		<li class="border border2"></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/scriptures/shloka/" <?php echo (is_page('shloka') ? 'class="active"' : ''); ?> >Shloka</a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/scriptures/stuti/" <?php echo (is_page('stuti') ? 'class="active"' : ''); ?> >Stuti</a></li>
        	  		<!-- <li><a href="#">Sankirtan</a></li> -->
        	  	</ul>
        	  </li>

        	 <li class="dropdown">
        	  	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery <i class="fa fa-angle-down"></i></a>
        	  	<ul class="dropdown-menu">
        	  		<li class="border border3"></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/gallery/bapu/" <?php echo (is_singular('gallery') ? 'class="active"' : ''); ?> >Photos</a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/media/" <?php echo (is_page('media') || is_page('media-gujarati') ? 'class="active"' : ''); ?> >Media</a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/kathas/booklets/" <?php echo (is_page('booklets') ? 'class="active"' : ''); ?> >Katha Booklets</a></li>
        	  	</ul>
        	  </li>

        	  <li><a  href="<?php echo bloginfo('url');?>/videos" <?php echo (is_page('videos') ? 'class="active"' : ''); ?> >Videos</a></li>

        	  <li class="dropdown">
        	  	<a  class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us <i class="fa fa-angle-down"></i></a>
        	  	<ul class="dropdown-menu">
        	  		<li class="border border4"></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/contact-us/" <?php echo (is_page('contact-us') ? 'class="active"' : ''); ?> >General Inquiry</a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/contact-us/audio-video/" <?php echo (is_page('audio-video') ? 'class="active"' : ''); ?> >Katha Audio and Video</a></li>
        	  		<li><a href="<?php echo bloginfo('url');?>/contact-us/katha-booklets-photos/" <?php echo (is_page('katha-booklets-photos') ? 'class="active"' : ''); ?> >Katha Booklets and Photos</a></li>
        	  		
        	  	</ul>
        	  </li>
        	  <li class="search"><a data-target="#search_modal" data-toggle="modal"><i class="lnr lnr-magnifier"></i></a></li>
	       </ul>
	    </div>
	</div>
</section>
<!--  header ends  -->


<!-- search modal starts -->
<div class="modal fade search_modal" id="search_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"><i class="lnr lnr-cross"></i></button>
			<div class="modal-body">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>
<!-- search modal ends -->
