
<section class="a_hero s_hero" style="background:url('<?php the_field('featured_image'); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="services secrvices_chronic">
	<div class="container">
		<div class="row item_wrapper">
			<div class="col-md-12 item">
				<?php if (get_field('field_5c501b616268a') != ''): ?>
					<img class="ftrd dsk" src="<?php the_field('field_5c501b616268a'); ?>" alt="">
				<?php endif ?>
				
				<div class="desc_wrapper">
					<!-- <h2></h2>
					<hr> -->
					<?php 
					the_content();
					?>
				</div>

				<?php if (get_field('field_5c501b616268a') != ''): ?>
					<img class="ftrd mb hidden" src="<?php the_field('field_5c501b616268a'); ?>" alt="">
				<?php endif ?>
			</div>

			<!-- <div class="col-md-6 item">
				
			</div> -->
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="description">
					<?php the_field('other_description'); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="therapist">
				<div class="col-md-12 intro">
					<h2>Therapist</h2>
					<hr>
				</div>

				<?php $post_objects = get_field('therapist'); ?>

				<?php if ($post_objects): ?>
				
				<?php foreach ( $post_objects as $post ): ?>
					 <?php setup_postdata($post); ?>
				<div class="col-md-6 col-sm-6 item">
					<div class="team_wrapper">
						<div class="team_prof">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							<div class="serv_dsktop"><a class="book" href="<?php bloginfo('url'); ?>/contact-us">BOOK APPOINTMENT</a></div>
						</div>

						<div class="team_desc">
							<h4><?php the_title(); ?></h4>
							<span><?php the_field('job_title'); ?></span>
						</div>

						<div class="serv_mb_app team_prof" style="display:none;">
							<a class="book" href="<?php bloginfo('url'); ?>/contact-us">BOOK APPOINTMENT</a>
						</div>		

					</div>
				</div>

				<?php endforeach ?>


				<?php endif ?>
				

				
			</div>
		</div>
		
	</div>
</section>