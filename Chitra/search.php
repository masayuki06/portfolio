<?php /* Template Name: Search Page */ ?>
<?php get_header(); ?>

<section class="cstm_hero search_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbg-search.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>SEARCH</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="search_result k_list" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					
					<?php
						$s=get_search_query();
						$args = array(
						  's' =>$s
						);

						
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) {
						        _e("");
						        while ( $the_query->have_posts() ) {
						           $the_query->the_post();
					?>



		                 <div class="item">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_excerpt(); ?></p>

							<a href="<?php the_permalink(); ?>" class="more">READ MORE</a>
						</div>

		                <?php
						        }
						    }else{

						?>
						    <div class="">
						    	<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
						    </div>

						<?php } ?>

				</div>
				
			</div>	
		</div>
	</div>
</section>

<?php get_footer();?>