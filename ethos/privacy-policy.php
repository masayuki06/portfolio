<?php /* Template Name: Privacy Policy */ ?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section class="cstm_hero m_hero" >
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>


<section class="m_content privacy">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer();?>