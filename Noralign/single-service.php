<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php 

	if ($post->post_parent) {
		
		include 'child.php';
	}else{

		include 'parent.php';
	}


	 ?>

<?php endwhile; endif;  ?>
<?php get_footer();?>