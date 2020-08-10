<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="cstm_hero g_hero" >
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>GALLERY</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="k_list gall_ery" id="gallery">
	<div class="menu">
		<div class="container">
			<ul>
				<li class="all"><a class="<?php echo ($post->post_name == '' ? '' : ''); ?>" href="">ALL<img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
				<li class="bapu"><a class="<?php echo ($post->post_name == 'bapu' ? 'active' : ''); ?>" href="<?php echo bloginfo('url');?>/gallery/bapu/">Bapu <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
				<li class="temp"><a class="<?php echo ($post->post_name == 'temples-in-talgajarda' ? 'active' : ''); ?>" href="<?php echo bloginfo('url');?>/gallery/temples-in-talgajarda/">Temples in Talgajarda <img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
				<li class="ram"><a class="<?php echo ($post->post_name == 'ram-katha' ? 'active' : ''); ?>" href="<?php echo bloginfo('url');?>/gallery/ram-katha/">Ram Katha<img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
				<li class="event"><a class="<?php echo ($post->post_name == '' ? '' : ''); ?>" href="<?php echo bloginfo('url');?>/gallery/events/">Events<img src="<?php echo bloginfo('template_directory');?>/assets/img/element-navpointer.png"></a></li>
			</ul>
		</div>
	</div>

	<div class="gallery_list">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
					$count = 1;
					$images = get_field('gallery');
					$size = 'thumbnail ';
					 ?>
					<?php  foreach($images as $image_id): ?>
					
					<div class="col-md-4 item">
						<a class="bg_wrap">
							<div class="bg" onclick="openModal();currentSlide(<?php echo $count; ?>)" style="background:url('<?php echo $image_id['url']; ?>')no-repeat;">
								<img class="hover" src="<?php echo bloginfo('template_directory');?>/assets/img/icon-hover.png" >
							</div>
						</a>
					</div>
					<?php $count++; endforeach; ?>
					<!-- modal of gallery -->
					<div id="gall_modal" class="modal fade in">
						<div class="modal-content">
							<span class="close" onclick="closeModal()"><i class="lnr lnr-cross"></i></span>
							
							<?php $count = 1; ?>
							<?php foreach($images as $image_id): ; ?>
							
							<div class="mySlides">
								<img src="<?php echo $image_id['url']; ?>" >
								<div class="cap_tion">
									<?php echo $image_id['title']; ?><br>
									<?php echo $image_id['description'];; ?>
								</div>
							</div>

							<?php $count++; endforeach; ?>

							<a class="prev" onclick="plusSlides(-1)"><i class="fa fa-angle-left"></i></a>
							<a class="next" onclick="plusSlides(1)"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<script>
	// Open the Modal
	function openModal() {
	  document.getElementById("gall_modal").style.display = "block";
	}

	// Close the Modal
	function closeModal() {
	  document.getElementById("gall_modal").style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  var captionText = document.getElementById("caption");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	  captionText.innerHTML = dots[slideIndex-1].alt;
	}
</script>

<script>
	$("#gall_modal").on("show", function () {
  $("body").addClass("modal-open");
}).on("hidden", function () {
  $("body").removeClass("modal-open")
});
</script>

<?php endwhile; endif; ?>
<?php get_footer();?>