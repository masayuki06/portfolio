<!doctype html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K5KS9T4');</script>
<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="Eb-wH8SXP7wGotLZoLjEpJfUU9H3dJylNck0gZ53iv8" />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php wp_title(''); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<?php
    global $wp;

    $magic_phrase = 'apply-db';
    $request_path = $wp->request;

    if (preg_match('/.*'. $magic_phrase .'.*/', $request_path)) {
        echo '<meta name="robots" content="noindex">';
    }

	?>
	<link rel="icon" href="<?php bloginfo('url'); ?>/wp-content/uploads/02/af_logo.png" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/wp-content/uploads/02/af_logo.png" type="image/x-icon" />
	<!-- frameworks -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/framework/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- font and style -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/customs.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/new-model.css">

	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/averta/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/cerebriSans/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/circular/stylesheet.css">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/selectric.css">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css" />
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css"> -->

     <!--  slick slider -->
	
	
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/intlTelInput.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/demo.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
	


	<?php if (is_front_page() || is_page('front-page')): ?>
	<!-- gm8 animation (02/08/19) -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/gm8.css" rel="stylesheet"/>
	 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gm8.js"></script>
	 <script>
	        $(document).ready(function () {
	            var marginTopH = $("body,html").offset().top;
	            var marginTopH = function () {
	                var marginTopContent = $(window).scrollTop();
	            };
	            marginTopH();
	            $(window).scroll(function () {
	                marginTopH();
	                var marginTopContent = $(window).scrollTop();
	              
	                if (marginTopContent > 1200) {
	                    $("#gm8 .yazilim .img-01, #gm8 .yazilim .img-00").addClass("showed");
	                    $("#gm8 .yazilim .line-pointer").fadeIn();
	                    $("#gm8 .yazilim .img-01, #gm8 .yazilim .img-00").addClass("animated");
	                    $("#gm8 .yazilim .img-01").removeClass("showed");
	                    $("#gm8 .yazilim .img-02, #gm8 .yazilim .img-03, #gm8 .yazilim .img-04, #gm8 .yazilim .img-05").addClass("showed animated");
	                } else {
	                    $("#gm8 .yazilim .img-00, #gm8 .yazilim .img-01, #gm8 .yazilim .img-02,#gm8 .yazilim .img-03,#gm8 .yazilim .img-04,#gm8 .yazilim .img-05").removeClass("animated");
	                }
	            });
	        });
	    </script>
	<?php endif ?>

    <?php wp_head(); ?>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '493251614603702');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=493251614603702&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
	<style>
		.my_container{
	padding: 0 200px;
}
		.story_image{
			display: block;
		}
		#section_about{
			padding: 70px 16px;
		}
		@media (max-width: 767px) {
	.pad480{
        padding: 48px 16px;
    }

	.lg_text{
		font-size: 56px;
		line-height: 72px;
	}
	.my_container{
		padding: 0 16px;
	}
			.story_image{
				display: none;
			}
			#section_foundation_home{
				background:none;
			}
			.mara-mentor-image{
				display: none;
			}
			.mara-mentor-content {
				width: 100%;
				padding: 32px !important;
			}


}
	</style>
<!--Faq Schema for All Pages-->

	<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How long will my order take?","acceptedAnswer":{"@type":"Answer","text":"<strong>maraphones</strong>, Standard delivery should take 3-5 working days. Once your order has been dispatched, a shipment notification email with an estimated delivery date will be send to you."}},{"@type":"Question","name":"Has my order been shipped?","acceptedAnswer":{"@type":"Answer","text":"<strong>We will send you a shipping confirmation email once your order is processed for shipping.</strong></li></ul>"}}]},</script>
	
	<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What is Mara Phones?
","acceptedAnswer":{"@type":"Answer","text":"Mara Phones is committed to providing the best smartphone experience for everyone!"}},{"@type":"Question","name":"Whats in the box?
","acceptedAnswer":{"@type":"Answer","text":"Smartphone, Earphones, Tubro Charger, Power Adaptor 2/3 Pin"}},{"@type":"Question","name":"How long will my order take?","acceptedAnswer":{"@type":"Answer","text":"Standard delivery should take 3-5 working days. Once your order has been dispatched, a shipment notification email with an estimated delivery date will be send to you."}}]},</script>


	<script type="application/ld+json">
	{
	  "@context": "https://schema.org/",
	  "@type": "website",
	  "name": "Maraphones",
	  "aggregateRating": {
	    "@type": "AggregateRating",
	    "ratingValue": "4.9",
	    "bestRating": "5",
	    "ratingCount": "185121"
	  }
	}
	</script>  


	<style>
		.covid{ position: absolute; right: 0; left: 0; }
		.covid a{  
		    display: inline-block;
		    color: #fff;
		    padding: 7px 25px;
		    background: #F14336;
		    font-size: 14px;
		    font-weight: bold;
		    width: 100%;
		    text-align: center;
		}

		footer .copy a:hover{ color: #fff; }


		section.mx_cta2 .wrapper h2 span{ color: #F14336; font-size:40px;margin-bottom: 0px;  }
		section.mx_cta2 .wrapper span.red{ margin-bottom: 0px;font-size: 16px;letter-spacing: 0px;display: block; }

		section.product_details_x .csoon_wrap{ margin-top: 175px;margin-left: 145px; }
		.csoon_wrap label{ margin-bottom: 8px; }
		.csoon_wrap{ margin-top: 188px;margin-left: 145px; }
		section.product_details_x .csoon_wrap label{ margin-bottom: 8px; }
		.woocommerce div.product form.cart .reset_variations{ margin-top: -12px!important; display: inherit; float: none;}

		section.h_security{     background: #000; }
		section.h_security .intro h2, section.h_cta4 .intro h2{ color: #fff; }
		section.h_security .item_wrapper:nth-child(2) img.ftrd{     padding-top: 32px; }
		section.h_security .item_wrapper{ border-right: 7px solid #100e0e; }

		section.mara_reg_interest .cta_reg{position: absolute;right: 0;top: -79px; }
		section.mara_reg_interest .cta_reg img{ width: 160px; }

		/*######### our_partners starts ##########*/
		section.our_partners{background: #fafafa; padding: 80px 0px 20px 0px;  }
		section.our_partners .intro{ text-align:center;}
		section.our_partners .intro h2{font-size: 36px;line-height: 46px;color: #222222;  }
		section.our_partners .ss_sep{  border-top: 1px solid #e1e1e1; width: 90%; margin-top: 0;margin-bottom: 0px; margin:0 auto;}

		section.our_partners .wrapper{ padding: 40px 0px; display: inline-block; width: 100%;text-align:center;}
		section.our_partners .wrapper h3{text-align: center;font-family: 'CircularBook'; font-size: 24px; line-height: 26px;margin-bottom: 40px;  }
		section.our_partners .item{border-right: 1px solid #E1E1E1; float: none;display: inline-block;width: 24.5%;margin-bottom: 30px;}

		section.our_partners .item a{  }
		section.our_partners .item img{ height: 82px; display: block; margin:0 auto; margin-bottom: 20px; }
		section.our_partners .item span{color: #BCBDBE;font-family: 'CircularBold';  }

		section.our_partners .wrapper2 .item:nth-last-child(3){ border-right:none; }
		section.our_partners .item:nth-last-child(1){ border-right:none; }
		/*########## our_partners ends ###########*/


		/*####### covid pledge starts ###########*/
		section.pledge_hero{ background: #fafafa; }
		section.pledge_hero .intro{  }
		section.pledge_hero .intro h1{font-family: 'CircularBlack';  }
		section.pledge_hero .intro p{color: #8A8B8C; font-family: 'CircularBook';width: 62%;  }

		section.pledge_frm{ background:#f1f1f1; padding: 60px 0px 100px 0px; }
		section.pledge_frm .c_frm{  width: 58%; }
		section.pledge_frm .c_frm p{ color: #8A8B8C; font-size:15px; line-height: 24px; }
		section.pledge_frm .c_frm p strong{ color: #222;  }
		section.pledge_frm .c_frm hr{ border-top: 3px solid #F14336; }
		section.pledge_frm .c_frm p span{ font-family: 'CircularBook'; color: #222; font-size:18px;line-height: 30px;  }

		section.pledge_frm .c_frm form{  }
		section.pledge_frm .c_frm fieldset{  }
		section.pledge_frm .c_frm fieldset br{ display: none; }
		section.pledge_frm .c_frm fieldset input::placeholder{color: #8A8B8C;   }
		section.pledge_frm .c_frm fieldset input{color: #8A8B8C; font-family: 'CircularBook'; }
		section.pledge_frm .c_frm fieldset.half{  float: none;display: inline-block; margin-right: 0px; }
		section.pledge_frm .c_frm fieldset.half input{  }
		section.pledge_frm .c_frm fieldset label{ color: #8A8B8C;  width: auto;padding-right: 20px; display: inline-block; font-weight: normal; }
		section.pledge_frm .c_frm fieldset label.lbl{ padding-right: 10px;font-size: 14px; }
		section.pledge_frm .c_frm fieldset input[type="radio"]{ float: left;height: auto;margin:0px;margin-right: 6px;position: relative;top: 4px;}
		section.pledge_frm .c_frm .wpcf7-list-item-label{ color: #8A8B8C; display: inline-block;padding-right:20px; }
		section.pledge_frm .c_frm .wpcf7-radio{ display: inline-block; margin-bottom: 20px; }


		section.pledge_frm .c_frm fieldset.half:nth-child(3), 
		section.pledge_frm .c_frm fieldset.half:nth-child(7){ margin-right: 10px;  }

		section.pledge_frm .c_frm  input[type="submit"]{ font-family: 'CircularBlack'; letter-spacing: 0.02em;text-transform: uppercase;}

		section.pledge_frm .c_frm span.wpcf7-not-valid-tip{ position: relative;top: -18px;margin-top: 0px!important; }


		section.pledge_hero_thanks{ background:#fafafa; text-align:center ;padding: 80px 0px 40px 0px; }
		section.pledge_hero_thanks .intro{  }
		section.pledge_hero_thanks .intro h1{font-family: 'CircularBlack'; font-size: 40px;line-height: 51px;letter-spacing: -0.02em;color: #222222;   }
		section.pledge_hero_thanks .intro p{font-family: 'CircularBlack'; font-size: 18px;line-height: 30px;color: #222; font-weight: normal;  }

		section.pledge_thanks{ text-align:center; }
		section.pledge_thanks .wrapper{ padding: 0px 30px; }
		section.pledge_thanks .wrapper img{ margin-bottom:20px; width: 45px; }
		section.pledge_thanks .wrapper p { font-family: 'CircularBlack'; font-size: 16px;line-height: 28px;color: #222; font-weight: normal;  }
		/*####### covid pledge ends #############*/

		/*####### covid discount starts #########*/
		section.covid_hero{ background:#fafafa; padding: 80px 0px 40px 0px; text-align: center;  }
		section.covid_hero .intro{  }
		section.covid_hero .intro h3{font-family: 'CircularBlack'; font-size: 40px;line-height: 51px;letter-spacing: -0.02em;color: #e84646;  }
		section.covid_hero .intro p{width: 75%;margin: 0 auto; margin-bottom:10px; }
		section.covid_hero .intro p strong{ font-family: 'CircularBlack'; font-size: 18px;line-height: 30px;color: #222; font-weight: normal; }


		section.covid_discount{  
		    padding:60px 0px;
		    background-size:cover!important;
		    background-position: center center!important;
		    text-align: center;
		}

		section.covid_discount .wrapper{  }
		section.covid_discount .wrapper h4{ font-family: 'CircularBlack'; font-size: 22px;line-height: 36px; margin-bottom: 20px; color: #fff; }
		section.covid_discount .wrapper p{color: #8A8B8C;font-size: 15px; line-height: 24px;margin-bottom:30px;  }
		section.covid_discount .wrapper p a{ display: block; font-family: 'CircularBlack'; color: #e84646;  }
		section.covid_discount .wrapper p span.white{ color: #fff; font-family: 'CircularBlack'; display: block; margin-bottom:10px;}
		section.covid_discount .wrapper p.bottom-confirmation { color: #fff;font-weight: bold;}
		/*####### covid discount ends ###########*/

		/*##### new model updates starts ########*/
		section.hn_hero .cta_reg{ position: absolute; right: 50px;     margin-top: -80px;}
		section.hn_hero .cta_reg img{ width: 160px; }

		section.hn_x1 .ftrs{ margin-top: 40px!important; }
		section.hn_x1 .intro img.ftrd{ height: 547px; margin-top: 30px; }

		section.hn_s .intro img.ftrd{ height: 550px; margin-top: 30px;}
		section.hn_hero img.ftrd{ padding-top: 70px;width: 1082px; }
		/*##### new model updates ends #########*/




		/*order received*/
		.addresses .col-1{max-width: 48%!important; }

		/*order pay*/
		.payment_buttons{  }
		.payment_buttons input#submit_paygate_payment_form{ width: 25%!important; display: block;margin: 15px 0px 10px 0px; }
		.payment_buttons a.cancel{ padding: 10px 36px!important; }
		.woocommerce ul.order_details li{ font-size: 12px!important; }

		.woocommerce-checkout #payment ul.payment_methods li img { width: 120px!important;display: block;  }



		@media(max-width: 1024px){
			.csoon_wrap{  margin-top: 211px; }
			section.product_details_x .csoon_wrap{ margin-top: 225px; }
			section.product_details_x .csoon_wrap label{ margin-bottom: 9px; }
			section.h_security .item_wrapper:nth-child(2) img.ftrd{ padding-top: 57px; }

			/*covid pledge*/
		    section.pledge_frm .c_frm fieldset.half:nth-child(3), 
		    section.pledge_frm .c_frm fieldset.half:nth-child(7){ margin-right: 8px; }
				}

		@media(max-width: 991px){
			.m_header .navbar-right li a { padding: 0px 20px; }
			section.h_security .item_wrapper:nth-child(2) img.ftrd{ width: 333px; }

			/*our partners*/
			 section.our_partners .item img{height: 60px;  }

			/*order pay*/
			.payment_buttons input#submit_paygate_payment_form{ width: 33.5%!important; }

			/*covid pledge*/
    		section.pledge_frm .c_frm{ width: 80%; }
		}

		@media(max-width: 768px){
			.csoon_wrap{  margin-top: 1046px; }
			section.product_details_x .csoon_wrap{ margin-top: 1044px; }
		}

		@media(max-width: 480px){

			.covid a{ font-size: 12px; }

			.csoon_wrap{  margin-top: 810px; }
			section.product_details_x .csoon_wrap{ margin-top: 800px; }

			section.mx_cta2 .wrapper h2 span{font-size: 26px; }
			section.mx_cta2 .wrapper span.red{ font-size:15px; }

			section.compare table{ border-left: 1px solid #efefef; }
			section.compare table tr td.spec{ display: none; }
			section.compare table tr td{ font-size: 13px!important;line-height: 22px!important;padding: 20px 15px!important; }

			section.compare h1{margin-bottom: 40px; }
			section.compare .item{ width: 40%;padding: 0px 10px; }

			section.h_security .item_wrapper:nth-child(2) img.ftrd{ padding-top: 19px; }

			/*.mara_love{ top: -45px!important; }*/


			/*our partners*/
		    section.our_partners{ padding: 40px 0px; }
		    section.our_partners .intro h2{font-size: 28px;line-height: 34px; }
		    section.our_partners .wrapper{ padding: 20px 0px; }
		    section.our_partners .wrapper h3{font-size: 22px;line-height: 24px; }
		    section.our_partners .item{ width: 49%; }
		    section.our_partners .item img{margin-bottom: 10px; height: 55px;  }

		    /*order pay*/
		    .payment_buttons input#submit_paygate_payment_form{ width: 70.5%!important; }
		    .woocommerce ul.order_details li{ margin-bottom: 15px; }
		    .woocommerce ul.order_details li strong{ font-size: 16px!important; }

		    /*covid pledge*/
		    section.pledge_hero .intro p{ width: 85%; }
		    section.pledge_frm .c_frm p{ font-size:15px; }
		    section.pledge_frm .c_frm p span{ font-size: 15px; line-height: 24px; }
		    section.pledge_frm .c_frm form{ padding-top: 15px; }
		    section.pledge_frm .c_frm input[type="submit"]{ margin-top: 0px; }
		    section.pledge_hero_thanks{ padding: 40px 0px 40px 0px; }
		    section.pledge_hero_thanks .intro h1{ font-size: 32px; line-height: 42px; }

		    /*covid discount*/
		    section.covid_hero{ padding: 40px 0px 40px 0px; }
		    section.covid_hero .intro{  padding: 0px 20px; }
		    section.covid_hero .intro h3{ font-size: 35px;line-height: 46px; }
		    section.covid_hero .intro p{ width: 100%; }
		    section.covid_hero .intro p strong{  font-size: 16px; line-height: 24px; }

		    section.covid_discount{  padding: 45px 0px; }
		    section.covid_discount .wrapper{ padding:0px 30px; }
		    section.covid_discount .wrapper h4{ font-size: 20px;line-height: 32px; }
		    section.covid_discount .wrapper p{ font-size: 14px; line-height: 23px; }
		}

		@media(max-width: 375px){
			.csoon_wrap{  margin-top: 800px; }

			section.h_security .item_wrapper:nth-child(2) img.ftrd{ padding-top: 41px; }
			
		}

		@media(max-width: 360px){
			.csoon_wrap{  margin-top: 825px !important; }

			/*order pay*/
			.payment_buttons input#submit_paygate_payment_form{     width: 73.5%!important; }
		}

		@media(max-width: 320px){
			.csoon_wrap{  margin-top: 859px; }
			section.product_details_x .csoon_wrap{  margin-top: 826px; }

			section.compare table tr td{ padding: 20px 10px!important; }

			section.h_security .item_wrapper:nth-child(2) img.ftrd{ padding-top: 37px; }

			/*order pay*/
			.payment_buttons input#submit_paygate_payment_form{     width: 83.5%!important; }
		}
	</style>


	


</head>
<body <?php if(is_front_page()) { echo 'onload="init();"'; } ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5KS9T4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- header starts -->
<nav class="navbar navbar-inverse m_header">
  <div class="container">
	   <div class="lang_switcher">
	   	<!-- <?php echo do_shortcode('[wpml_language_switcher]'); ?> -->
	  	<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag.png" alt=""> -->
	  </div>
  
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
	      <li <?php echo (is_page('mara-x') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/mara-x">Mara<img src="<?php echo get_template_directory_uri(); ?>/assets/img/x.png" alt=""></a></li>
	      
	      <li <?php echo (is_page('mara-z') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/mara-z">Mara<img src="<?php echo get_template_directory_uri(); ?>/assets/img/z.png" alt=""></a></li>


	      <li <?php echo (is_page('covid-19-pledge') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/covid-19-pledge">Covid-19 Pledge</a></li>

	      <li style="display: none;" <?php echo (is_page('register-your-interest') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/register-your-interest">Register your interest</a></li>


	      <li <?php echo (is_page('service-and-support') ? 'class="active"' : ''); ?>><a href="<?php bloginfo('url'); ?>/service-and-support">Service and Support</a></li>
	      <!-- <li><a href="#" class="buy">BUY NOW <i class="lnr lnr-chevron-right"></i></a></li>	 -->


	       <li><a href="<?php bloginfo('url'); ?>/cart" class="welcome"><!-- Welcome John  --><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.png" alt=""><span class="num_ber"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>

	       <!-- <li><a><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag.png" alt=""></a></li> -->
	    </ul>
	</div>
  </div>
</nav>
<!--  header ends  -->