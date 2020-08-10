<?php get_header(); ?>


<section class="sub_header sub_header2">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 left">
				<span>Mara Phone Blog</span>
			</div>
		</div>
	</div>
</section>


<section class="single_blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="featured_img">
					<!-- <a class="g_back" href="JavaScript:Void(0)" onclick="window.history.back();"><i class="lnr lnr-chevron-left"></i>Go Back</a> -->
					<a class="g_back" href="<?php bloginfo('url'); ?>/latest-updates" ><i class="lnr lnr-chevron-left"></i>Go Back</a>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</div>

				<div class="wrapper">
					<h3><?php the_title(); ?></h3>
					<p class="date"><?php the_field('author'); ?> | <?php echo get_the_date('F d, Y'); ?></p>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; endif; ?>



				<!-- </div> -->

					<div class="share">
						<span>Share this article:
							<a class="sfb" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 'newwindow', 'width=800,height=500'); return false;"><i class="fab fa-facebook"></i></a>


							<a class="stweet" href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank" onclick="window.open('https://twitter.com/home?status=<?php the_permalink(); ?>', 'newwindow', 'width=800,height=500'); return false;"><i class="fab fa-twitter-square"></i></a>

							<a class="slinked" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>/&title=&summary=&source=" target="_blank" onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>/&title=&summary=&source=', 'newwindow', 'width=800,height=500'); return false;"><i class="fab fa-linkedin"></i></a>


							<a class="spin" href="https://pinterest.com/pin/create/button/?url=&media=<?php the_permalink(); ?>&description=" target="_blank" onclick="window.open('https://pinterest.com/pin/create/button/?url=&media=<?php the_permalink(); ?>&description=', 'newwindow', 'width=800,height=500'); return false;"><i class="fab fa-pinterest-square"></i></a>

							<a class="smail" href="mailto:?&subject=Latest News&body=<?php the_permalink(); ?>" target="_blank" onclick="window.open('mailto:?&subject=Latest News&body=<?php the_permalink(); ?>', 'newwindow', 'width=800,height=500'); return false;"><i class="fas fa-envelope-square"></i></a>
						</span>
					</div>

					<div class="comments_box">
					    <!-- <h4>0 COMMENTS</h4>

					    <div class="comm_ent">
					       <span>LEAVE A REPLY</span>
					       <form action="" method="get" accept-charset="utf-8">
					       	   <textarea name="" placeholder="Enter your comment here..."></textarea>
					       </form>
					    </div>
						<span class="sb_note">This site uses Akismet to reduce spam. <a href="#">Learn how your comment data is processed.</a></span> -->

						<?php comments_template( '', true ); ?>
					</div>
					<?php 
						$prev_post = get_previous_post();
						$next_post = get_next_post();

					 ?>
					<div class="next_prev">
						
						<?php if ($prev_post->ID != ''): ?>
						
						<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="prev"><i class="lnr lnr-chevron-left"></i> PREVIOUS</a>
							
						<?php endif ?>
						

						<?php if ($next_post->ID != ''): ?>
						
						<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next">NEXT <i class="lnr lnr-chevron-right"></i></a>

						<?php endif ?>
						
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="blog_subs">
  <div class="container">
    <div class="row">
      <div class="wrapper">
        <div class="col-md-6 item">
          <div class="wrap">
            <h4>Liked what you’ve just read? <br> Subscribe to our newsletter and be the first to hear about:</h4>
            <ul>
                <li>Latest Product Releases</li>
                <li>Collaborations</li>
                <li>Online Exclusives</li>
                <li>Latest Blog Update</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 item">
          <div class="wrap2">
            <?php echo do_shortcode('[contact-form-7 id="1316" title="Blog Subscribe"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>