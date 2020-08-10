<?php 

if (is_page('shop')) {
	
	echo "<script>window.location.replace('https://maraphones.com/sa/choose');</script>";
}

 ?> 
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; endif; ?>


<?php get_footer();?>