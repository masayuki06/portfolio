<?php /* Template Name: Checkout Page */ ?>
<?php get_header(); global $wp; ?>
<?php 
$var = explode('/', $wp->request);

 ?>
<?php if ($var[1] == 'order-received'): ?>

<section class="mara_order_head">
   <h4>Transaction Completed</h4>
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mara_order.jpg
" alt="">
</section>

<?php endif ?>


<section class="<?php echo ($var[1] == 'order-received' ? 'mara_order_received' : 'mara_checkout') ?> ">
       <div class="container">
           <!-- <h1 class="mara_ch_out">Checkout</h1> -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; endif; ?>

</div>
</section>
<?php get_footer();?>