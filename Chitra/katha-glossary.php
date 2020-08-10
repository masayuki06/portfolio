<?php /* Template Name: Kathas - Glossary */ ?>
<?php get_header(); ?>
<section class="cstm_hero" style="background: url('<?php echo bloginfo('template_directory');?>/assets/img/sectionbgs-katha-glossary.jpg')no-repeat;">
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12">
					<h1>Glossary</h1>

					<div class="crumbs">
						<ol class="breadcrumb">
							<li><a href="">Home</a></li>
							<li class="active">Glossary</li>
				        </ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="k_translations k_glossary">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                        <?php 
                            $to_be = get_field('glossary_repeater');
                            // $to_be = arrange_glossary($to_be);
                            ?>
                            <?php $count = 1; ?> 
                            <?php foreach($to_be as $var): ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="k_<?php echo $count; ?>">
	                            <h4 class="panel-title">
	                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#kCollapsed<?php echo $count; ?>" aria-expanded="false" aria-controls="kCollapsedSix">
	                                 <span class="k_num"><span class="num"><?php echo $var['origin']; ?></span></span>
	                                </a>
	                            </h4>
                            </div>
                            
	                        <div id="kCollapsed<?php echo $count; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="k_<?php echo $count; ?>">
	                            <div class="panel-body">
	                            	<div class="intro_desc">
                                    <?php echo $var['translation']; ?>
	                            	</div>
	                            </div>
                            </div>
	                    </div>
                            <?php $count++; endforeach; ?>


	                   
                        

	                </div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="h_upcoming">
	<div class="container">
		<div class="row">
			<div class="wrapper">
				<div class="col-md-12 intro">
					<h2>UPCOMING</h2>
					<hr>
				</div>

				<div class="col-md-4">
					<div class="up_box">
						<h4><?php the_field('upcoming_title',994); ?></h4>
						<p><?php the_field('upcoming_description',994); ?></p>
					</div>
				</div>

				<div class="col-md-8">
				<?php 
					$args = array(
					'post_type' => array('katha'),
					'posts_per_page' => 4,
					'meta_key'  => 'upcoming',
					'meta_value' => true,
    				'order'   => 'DESC',
																		
				);
				$x = 0;
				$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) :
					while ( $loop->have_posts() ) :
					$loop->the_post();

				$x++;
				while ( have_rows('kathas_list') ) : the_row();
					if( get_row_layout() == 'katha_details' ):
					?>
					
					<div class="item" style="background:url('<?php echo bloginfo('template_directory');?>/assets/img/element-upcoming-more.png')no-repeat;">
						<div class="date_box">

							<?php 
								$strt_date = get_sub_field('start_date');
								$strt_arr = explode(' ',$strt_date);
							?>
							<span class="date"><?php echo $strt_arr[0]; ?></span>
							<span class="month"><?php echo $strt_arr[1]; ?></span>
						</div>

						<div class="up_desc">
							<h5><a href="<?php the_permalink(); ?>" ><?php echo get_sub_field('town-city'); ?></a></h5>
							<span><?php echo get_sub_field('start_date'); ?> - <?php echo get_sub_field('end_date'); ?></span>
						</div>

						<div class="num">
							<?php if(get_field('katha_number') != ''): ?>
							<span><?php echo get_field('katha_number'); ?></span>
							<?php endif; ?>
						</div>
					</div>
					<?php endif; ?>
					<?php endwhile; endwhile; ?>		
					<?php endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>