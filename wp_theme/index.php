
	<?php get_header(); ?>
	    
    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
        
			<?php while ( have_posts() ) : the_post() ?>
				<! -- this is our post / page content START --> 
				<div class="blog-post">
					<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="blog-post-meta"><?php the_time('Y-m-d') ?> by <a href="#"><?php the_author(); ?></a></p>
					<?php the_excerpt(); ?>
				
				</div>
				<! -- this is our post / page content END --> 
			<?php endwhile; ?>
			
			<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

	          <ul class="pager">
	            <li><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Previous', 'your-theme' )) ?></li>
	            <li><?php previous_posts_link(__( 'Next <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></li>
	          </ul>
			 <?php } ?>

        </div><!-- /.blog-main -->
		
		<?php get_sidebar(); ?>
		
      </div><!-- /.row -->

    </div><!-- /.container -->
    
    <?php get_footer(); ?>
