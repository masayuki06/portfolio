<?php /* Template Name: Solutions Megamenu */ ?>

<div class="drop_menu dropdown-menu">

	<?php while( have_rows('solutions_megamenu',294) ): the_row(); ?>
	
	<?php if ( get_row_layout() == 'research_menuitems'): ?> 
	<div class="col-md-3 col-sm-3">
		<div class="item">
			<h4>Research</h4>
			
			<?php  while ( have_rows('research_menuitems_repeater') ) : the_row(); ?>
			<?php
				$link_array = explode('/',get_sub_field('url'));
				$pagecurr = end($link_array);
			?>
			<a class="<?php echo(is_page($pagecurr) && $pagecurr != '' ? 'active' : '') ?>" <?php echo (get_sub_field('is_external_link') == 'Yes' ? 'target="_blank"' : '' ); ?> href="<?php the_sub_field('url'); ?>"><?php the_sub_field('label'); ?></a>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if ( get_row_layout() == 'consultancy_menuitems'): ?> 
	<div class="col-md-3 col-sm-3">
		<div class="item">
			<h4>Consultancy</h4>
			<?php  while ( have_rows('consultancy_menuitems_repeater') ) : the_row(); ?>
			<?php
				$link_array = explode('/',get_sub_field('url'));
				$pagecurr = end($link_array);
			?>
			<a class="<?php echo(is_page($pagecurr) && $pagecurr != '' ? 'active' : '') ?>" <?php echo (get_sub_field('is_external_link') == 'Yes' ? 'target="_blank"' : '' ); ?> href="<?php the_sub_field('url'); ?>" ><?php the_sub_field('label'); ?></a>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>


	<?php if ( get_row_layout() == 'learning_menuitems'): ?> 
	<div class="col-md-3 col-sm-3">
		<div class="item">
			<h4>Learning</h4>
			<?php  while ( have_rows('learning_menuitems_repeater') ) : the_row(); ?>
			<?php
				$link_array = explode('/',get_sub_field('url'));
				$pagecurr = end($link_array);
			?>
			<a class="<?php echo(is_page($pagecurr) && $pagecurr != '' ? 'active' : '') ?>" <?php echo (get_sub_field('is_external_link') == 'Yes' ? 'target="_blank"' : '' ); ?> href="<?php the_sub_field('url'); ?>"><?php the_sub_field('label'); ?></a>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>


	<?php if ( get_row_layout() == 'software_menuitems'): ?> 
	<div class="col-md-3 col-sm-3">
		<div class="item">
			<h4>Software</h4>
			<?php
				$link_array = explode('/',get_sub_field('url'));
				$pagecurr = end($link_array);
			?>
			<?php  while ( have_rows('software_menuitems_repeater') ) : the_row(); ?>
			<a class="<?php echo(is_page($pagecurr) && $pagecurr != '' ? 'active' : '') ?>" <?php echo (get_sub_field('is_external_link') == 'Yes' ? 'target="_blank"' : '' ); ?> href="<?php the_sub_field('url'); ?>"><?php the_sub_field('label'); ?></a>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>

	<?php endwhile; ?>
</div>