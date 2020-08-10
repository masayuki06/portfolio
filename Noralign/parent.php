
<section class="a_hero s_hero" style="background:url('<?php the_field('featured_image'); ?>')no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 intro">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="fr_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<?php 

				$child = get_children( get_the_id() );

				 ?>


		<?php if (!empty($child)): ?>
		<div class="row">
			<div class="services_wrapper">

				<div class="col-md-12 intro">
					<h2>Services</h2>
					<hr>
				</div>
				
				<?php 
	
				 $args = array(
				 'post_type' => array('service'),
				 'post_parent' => get_the_ID(),
				'posts_per_page' => -1,
								                                     
				);

				$loop = new WP_Query( $args );
				 if ( $loop->have_posts() ) :
					while ( $loop->have_posts() ) :
					$loop->the_post();

				 ?>

				 <div class="col-md-4 col-sm-6">
					<div class="desc">
						<a href="<?php the_permalink(); ?>"><img class="ftrd" src="<?php the_field('thumbnail'); ?>" alt=""></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo get_the_excerpt(); ?></p>

						<a href="<?php the_permalink(); ?>" class="bt_find">LEARN MORE</a>
					</div>
				</div>

				<?php endwhile; ?>		
				<?php endif; ?>

				
			</div>
		</div>
		<?php endif ?>
	</div>
</section>





