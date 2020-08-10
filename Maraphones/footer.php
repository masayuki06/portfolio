  <?php global $post; ?>
<?php 
  function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}


  $p_name = $post->post_name;

  if ($p_name == 'maraz-z') {
    
    $purl = 'specification-z';

  }else{

    $purl = 'specification-z';
  }

 if((curPageURL()=='https://maraphones.com:443/mara-group/') || (curPageURL()=='https://maraphones.com:443/mara-foundation/') || (curPageURL()=='https://maraphones.com:443/mentor/')){
	 
	 }else{ ?>
<section class="cta_ftr">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6 ftr_wrap" >
            <a href="<?php bloginfo('url'); ?>/choose">BUY NOW <i class="lnr lnr-chevron-right"></i></a>
         <div class="bg" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-ftr1.jpg')no-repeat;"> </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-6 ftr_wrap" >
            <a href="<?php bloginfo('url'); ?>/gallery">GALLERY <i class="lnr lnr-chevron-right"></i></a>
           <div class="bg" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-ftr2.jpg')no-repeat;"></div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-6 ftr_wrap" >
           <a href="<?php bloginfo('url'); ?>/service-and-support">SERVICE AND SUPPORT <i class="lnr lnr-chevron-right"></i></a>
          <div class="bg" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-ftr3.jpg')no-repeat;"> </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-6 ftr_wrap"> 
          <a href="<?php bloginfo('url'); ?>/compare">COMPARE <i class="lnr lnr-chevron-right"></i></a>
        <div class="bg" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-ftr4.jpg')no-repeat;"> </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<footer>
  <div class="container-fluid upper-footer-bg">
  	<div class="container">
    <div class="row">

      <div class="col-12 col-lg-2 col-md-2 col-sm-3" style="margin-bottom: 32px;">

      	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ftr-logo.png" alt="" width="112px">

    </div>
      <div class="col-4 col-lg-2 col-md-2 col-sm-3 item">
        <h4>About</h4>
        <ul>
            <!-- <li><a href="<?php bloginfo('url'); ?>/about-us">About Mara</a></li>
            <li><a href="<?php bloginfo('url'); ?>/careers">Careers</a></li> 
            <li><a href="<?php bloginfo('url'); ?>/mara-group">Mara Group</a></li>
            <li><a href="<?php bloginfo('url'); ?>/mara-foundation">Mara Foundation</a></li>
            <li><a href="<?php bloginfo('url'); ?>/mentor">Mara Mentor</a></li>
			-->
			
			      <li><a target="_blank" href="<?php bloginfo('url'); ?>/mara-corporation/">Mara Corporation</a></li>
            <li><a target="_blank" href="<?php bloginfo('url'); ?>/philanthropy/">Philanthropy</a></li>
            <li style="display: none;"><a href="#">Mara Mentor</a></li>
			
            <li><a href="<?php bloginfo('url'); ?>/careers">Careers</a></li>
			
        </ul>
      </div>

      <div class="col-4 col-lg-2 col-md-2 col-sm-3 item">
        <h4>Sections</h4>
        <ul class="">
            <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
            <li><a href="<?php bloginfo('url'); ?>/mara-x">Mara X</a></li>
            <li><a href="<?php bloginfo('url'); ?>/mara-z">Mara Z</a></li>
            <li><a href="<?php bloginfo('url'); ?>/compare">Compare</a></li>
            <li><a href="<?php bloginfo('url'); ?>/choose">Buy Now</a></li>
            <li><a class="smoothScroll" href="<?php bloginfo('url'); ?>/choose#whats-in-the-box">What’s inside the Box</a></li>
            <li><a href="<?php bloginfo('url'); ?>/latest-updates">Blog</a></li>
            <li><a href="<?php bloginfo('url'); ?>/gallery">Gallery</a></li>
        </ul>
      </div>

      <div class="col-4 col-lg-2 col-md-2 col-sm-3 item">
        <h4>Support</h4>
        <ul>
            <li><a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a></li>
            <li><a href="<?php bloginfo('url'); ?>/service-and-support">Service and Support</a></li>
            <!-- <li><a href="#">Tracking</a></li> -->
        </ul>
      </div>

      <!-- <div class="col-md-2 item">
        <h4>Follow Mara Phones</h4>
        <ul class="social">
            <li><a href="https://www.facebook.com/MaraPhone/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/MaraPhones" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/MaraPhone/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCycUUKm-wc_hII1BUVmxANA/videos " target="_blank"><i class="fab fa-youtube"></i></a></li>
        </ul>

        <script src="https://apis.google.com/js/platform.js"></script>
        <div class="g-ytsubscribe" data-channelid="UCycUUKm-wc_hII1BUVmxANA" data-layout="default" data-count="hidden"></div>
      </div> -->

      <div class="col-12 col-lg-3 col-md-3 col-sm-12 item">
        <h4>Connect</h4>
        <p>Subscribe to have latest updates on Mara Phones</p>
        <?php echo do_shortcode('[contact-form-7 id="907" title="Footer"]'); ?>

        <ul class="social">
            <li><a href="https://www.facebook.com/MaraPhones/" target="_blank"><i class="fab fa-facebook-f" style="padding-left: 4px;"></i></a></li>
            <li><a href="https://twitter.com/MaraPhones" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/Mara.Phones/" target="_blank"><i class="fab fa-instagram" style="padding-left: 2px;"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCycUUKm-wc_hII1BUVmxANA/videos " target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://www.linkedin.com/company/maraphones/ " target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>

        <!-- <script src="https://apis.google.com/js/platform.js"></script>



        <span class="payment_gateway">
          <a> <img class="visa" src="<?php echo get_template_directory_uri(); ?>/assets/img/visa.png" alt=""></a>
          <a> <img class="master" src="<?php echo get_template_directory_uri(); ?>/assets/img/mastercard.png" alt=""></a>

          <a> <img class="visa" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-paypal.png" alt=""></a>
          <a> <img class="master" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dhl.png" alt=""></a>
        </span> -->
      </div>
    </div>
    </div>
</div>

<div class="container-fluid bottom-footer-bg">
	<div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="copy">
          
          <span>
            <a href="<?php bloginfo('url'); ?>/terms-and-conditions">Terms and Conditions</a> | 
            <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> |
            <a href="<?php bloginfo('url'); ?>/cookie-policy">Cookie Policy</a>  |
             <a href="<?php bloginfo('url'); ?>/warranty-policy">Warranty Policy</a> 
          </span>
          <p>Copyright 2020. Mara Phones Limited</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-12 ftr_pay_ment" style="text-align: right;">
      	<span class="payment_gateway">
          <!-- <a class="ml-4"><img class="dhl" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dhl.png" alt=""></a> -->
          <!-- <a class="ml-3"><img class="visa" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-visa.png" alt=""></a> -->
          <!-- <a class="ml-3"><img class="mastercard" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mastercard.png" alt=""></a>  -->

          <a class="ml-3"><img style="height: 40px;" class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/visa-mastercard-logo.png" alt=""></a>

          <a class="ml-3"><img style="height: 45px; margin-bottom: 5px;" class="paygate" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dpo-sa.png" alt=""></a>
          
        </span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="ftr_msg">
          <p>The content and images used on this site are protected by copyright and the copyright belongs to the respective owners. The use of the content and images on the site is intended to promote the members. Spam and unauthorised use are prohibited and punishable by law.</p><br><br>
        </div>
      </div>
    </div>
</div>

    
  </div>
</footer>
<!-- footer ends   -->
<?php if (is_front_page() || is_page('front-page')): ?>
  <!-- cookie notice for homepage only -->
<?php if (!isset($_COOKIE['dp'])): ?>
  
  <section class="cookie_notice">
  <a class="bt_close"><i class="lnr lnr-cross"></i></a>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>COOKIE NOTICE</h4>
        <p>We use cookies on our site to track certain metrics. Read our privacy policy <a href="<?php bloginfo('url'); ?>/privacy-policy">here</a> to see how we keep your personal data confidential and secure.</p>

        <button class="ok" id="ok" >OK</button>
      </div>
    </div>
  </div>
</section>
<?php do_action('my_action'); ?>
<?php endif ?>
<!-- cookie notice ends -->
<?php endif ?>
<!-- ////////////////   SCRIPT AREA  ///////////////-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/framework/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/framework/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/smooth-scroll.min.js"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/animate.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.selectric.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.js"></script>

  <script>
        $(document).ready(function() {
         $('.modal-image').magnificPopup({type:'image'});
       });
  </script>

<!-- for careers page (02/22/19) -->
<script>
  $(function () {
      $('#c input').prop('disabled', true);
      $('#c input').prop('checked', true);
  });
</script>

<script>
  $('.wpcf7-file').bind('change', function () {
      var filename = $(".wpcf7-file").val();
      if (/^\s*$/.test(filename)) {
        $(".file-upload").removeClass('active');
        $("#noFile").text("No file chosen..."); 
      }
      else {
        $(".file-upload").addClass('active');
        $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
      }
    });
</script>
<!-- for careers page (02/22/19) -->

<script>
   $('#ok').click(function(){

    $(this).parent().parent().parent().parent().hide();
  });
</script>

<!-- cookie notice (02/07/19) -->
    <script>
         $(document).ready(function() {
            $('.bt_close').click(function(){
              $('.cookie_notice').hide();
            });
        });
   </script>
<?php if (is_page('latest-updates')): ?>
  
  <script>
  $(function () {
 
      $('#tab1_loadmore').click(function () {
          $('#tab_home .item:hidden').slice(0, 2).show();
          if ($('#tab_home .item').length == $('#tab_home .item:visible').length) {
              $('#tab1_loadmore ').hide();
          }
      });

      $('#tab2_loadmore').click(function () {
          $('#tab_product .item:hidden').slice(0, 2).show();
          if ($('#tab_product .item').length == $('#tab_product .item:visible').length) {
              $('#tab2_loadmore ').hide();
          }
      });

      $('#tab3_loadmore').click(function () {
          $('#tab_engineering .item:hidden').slice(0, 2).show();
          if ($('#tab_engineering .item').length == $('#tab_engineering .item:visible').length) {
              $('#tab3_loadmore ').hide();
          }
      });

       $('#tab3_loadmore').click(function () {
          $('#tab_editorial .item:hidden').slice(0, 2).show();
          if ($('#tab_editorial .item').length == $('#tab_editorial .item:visible').length) {
              $('#tab3_loadmore ').hide();
          }
      });
  });
 </script>
 
<?php endif ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.a_slider').slick({
      nextArrow: '<i class="lnr lnr-chevron-right next"></i>',
          prevArrow: '<i class="lnr lnr-chevron-left prev"></i>',
      autoplay: false,
      autoplaySpeed: 3000,
      slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade:true
        
      });
  });
 </script>

  <!-- accordion -->
 <script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function(){
          this.classList.toggle("active");
          this.nextElementSibling.classList.toggle("show");
    }
  }
</script>

<script>
  $('select').selectric();
</script>

<script>
  AOS.init({
    easing: 'ease-in-out'
  });
</script>

<!-- smoothscroll starts-->
<script>
  $(function() {
  // This will select everything with the class smoothScroll
  // This should prevent problems with carousel, scrollspy, etc...
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-70
        }, 900); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
});

</script>
<!-- smoothscroll ends-->
<script>
    (function() {
 
      window.inputNumber = function(el) {

        var min = el.attr('min') || false;
        var max = el.attr('max') || false;

        var els = {};

        els.dec = el.prev();
        els.inc = el.next();

        el.each(function() {
          init($(this));
        });

        function init(el) {

          els.dec.on('click', decrement);
          els.inc.on('click', increment);

          function decrement() {
            var value = el[0].value;
            value--;
            if(!min || value >= min) {
              el[0].value = value;
            }
          }

          function increment() {
            var value = el[0].value;
            value++;
            if(!max || value <= max) {
              el[0].value = value++;
            }
          }
        }
      }
    })();

    inputNumber($('.input-number'));
  </script>
 <script>
         $(document).ready(function() {
          $('.modal-video').magnificPopup({type:'iframe'});
        });
   </script>


<?php if (is_single()): ?>
<!-- accordion -->
 <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
      }
    }
</script>
<!-- accrordion ends -->
<?php endif ?>

<?php if (is_page('choose')): ?>
<!-- accordion -->
 <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
      }
    }
</script>
<!-- accrordion ends -->
<?php endif ?>

<?php if (is_page('gallery')): ?>
  <!-- gallery -->

  <script>
        $(document).ready(function() {
         $('.modal-image').magnificPopup({type:'image'});
       });
  </script>

  <script>
  $(function(){
       var $container = $('.grid'),
       $filter = $('#filter').find('a#all');

       $container.isotope({
        itemSelector: '.element-item',
         filter: '.gmarax'
      });

      // $('#filter a#all').click( function() {
      //     $container.isotope('updateSortData').isotope({
      //       sortBy: ''
      //     });
      //  });
  });
</script>
  
  <script>
  /* project Sorting */
  jQuery(document).ready(function($){
    (function ($) { 
      var container = $('.grid');
      function getNumbColumns() { 
        var winWidth = $(window).width(), 
          columnNumb = 1;
        
        if (winWidth > 1500) {
          columnNumb = 4;
        } else if (winWidth > 1200) {
          columnNumb = 3;
        } else if (winWidth > 900) {
          columnNumb = 2;
        } else if (winWidth > 600) {
          columnNumb = 2;
        } else if (winWidth > 300) {
          columnNumb = 1;
        }
        
        return columnNumb;
      }
      
      
      function setColumnWidth() { 
        var winWidth = $(window).width(), 
          columnNumb = getNumbColumns(), 
          postWidth = Math.floor(winWidth / columnNumb);
      }
      
      $('.project_filter #filter a').click(function () { 
        var selector = $(this).attr('data-filter');
        
        $(this).parent().parent().find('a').removeClass('current');
        $(this).addClass('current');
        
        container.isotope( { 
          filter : selector 
        });
        
        return false;
      });
      
    
    } )(jQuery);
  } );
</script>



<?php endif ?>

<?php if (!is_singular()): ?>
  <!-- cf7 script -->
  <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://maraphones.com/sa/apply-thanks/';
}, false );
</script>

<?php endif ?>

<?php if (is_page('careers')): ?>
  
  <!-- for career listing (Mar 14, 2019) -->
<script>
  $(function () {
      $('.snr_more #jmore').click(function () {
          $('.snr_lvl .item:hidden').slice(0, 2).show();
          if ($('.snr_lvl .item').length == $('.snr_lvl .item:visible').length) {
              $('.snr_more #jmore').hide();
          }
      });

       $('.tech_more #jmore').click(function () {
          $('.tech_lvl .item:hidden').slice(0, 2).show();
          if ($('.tech_lvl .item').length == $('.tech_lvl .item:visible').length) {
              $('.tech_more #jmore').hide();
          }
      });

       $('.biz_more #jmore').click(function () {
          $('.biz_lvl .item:hidden').slice(0, 2).show();
          if ($('.biz_lvl .item').length == $('.biz_lvl .item:visible').length) {
              $('.biz_more #jmore').hide();
          }
      });

       $('.back_more #jmore').click(function () {
          $('.back_lvl .item:hidden').slice(0, 2).show();
          if ($('.back_lvl .item').length == $('.back_lvl .item:visible').length) {
              $('.back_more #jmore').hide();
          }
      });
      
  });
 </script>
<!-- for career listing (Mar 14, 2019) -->

<?php endif ?>

<?php if (is_page('checkout')): ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#billing_phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
     // preferredCountries: ['rw', 'za'],
      // separateDialCode: true,
      utilsScript: "<?php echo get_template_directory_uri(); ?>/assets/js/utils.js",
    });
  </script>
  
<?php endif ?>

<?php if (is_singular('apply-now')): ?>
  <!-- Apply now script -->

  <script defer src="https://unpkg.com/imask"></script>

  <script>
     document.addEventListener("DOMContentLoaded", function () {
    

    var dateMask = new IMask(
      document.getElementById('date-mask'),
      {
        mask: Date,
        pattern: 'Y `m',
        min: new Date(1990, 0, 1),
        max: new Date(2020, 0, 1),
        lazy: false
      }
    ).on('accept', function() {
      document.getElementById('date-value').innerHTML = dateMask.masked.date || '-';
    });

   
  });

  </script>

  <script>
    function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode

         if (charCode > 33 && ( charCode < 45 || charCode > 57) )
            return false;

         return true;
      }

  </script>
  <script>
  $('.c-file-upload .wpcf7-file').bind('change', function () {
      var filename = $(".wpcf7-file").val();
      if (/^\s*$/.test(filename)) {
        $(".c-file-upload").removeClass('active');
        $("#cnoFile").text("No file chosen..."); 
      }
      else {
        $(".c-file-upload").addClass('active');
        $("#cnoFile").text("Your file is attached"); 
      }
    });
</script>


<script>
  
  
  $('#u_employment').change(function(){

    var slct_val = this.value;

    if (slct_val == 'Employed' || slct_val == 'Unemployed') {

       if (slct_val == 'Employed') {

        $('#h_change').html('Present Job Experience');

      }else{

        $('#h_change').html('Past Job Experience');

      }
      
      $('.past_job input').removeAttr('disabled');
      $('.past_job select').removeAttr('disabled');
      $('#other_lang').attr('disabled','disabled');


      $('.past_job').show();
      $('.fresh_lang').hide();

 
    }else{

      $('.past_job input').attr('disabled','disabled');
      $('.past_job select').attr('disabled','disabled');
      $('#other_lang').removeAttr('disabled');

      $('.past_job').hide();
      $('.fresh_lang').show();


    }

  });


$("#aFile_upload").on("change", function (e) {

    var count=1;
    var files = e.currentTarget.files; // puts all files into an array

    // call them as such; files[0].size will get you the file size of the 0th file
    for (var x in files) {

        var filesize = ((files[x].size/1024)/1024).toFixed(4); // MB

        if (files[x].name != "item" && typeof files[x].name != "undefined" && filesize <= 10) { 

            if (count > 1) {

                approvedHTML += ", "+files[x].name;
            }
            else {

                approvedHTML += files[x].name;
            }

            count++;
        }
    }
    $("#approvedFiles").val(approvedHTML);

});

var uploadField = document.getElementById("user_cv");

var uploadName = document.getElementById("cnoFile");

uploadField.onchange = function() {
    if(this.files[0].size > 5807200){
       alert("File is too big!");
       this.value = "";
       uploadName.innerHTML = "";
    };
};

</script>


<script>
  
function alphaOnly(event) {
  var key = event.keyCode;
  return (key > 64 && key < 91) || (key > 96 && key < 123) || key == 32 || key == 46 || key == 44 || key == 38;

};

</script>


  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
     preferredCountries: ['za','rw'],
      // separateDialCode: true,
      utilsScript: "<?php echo get_template_directory_uri(); ?>/assets/js/utils.js",
    });
  </script>


<?php endif ?>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'RarnVJq1IQ';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

<?php wp_footer(); ?>
</body>
</html>

