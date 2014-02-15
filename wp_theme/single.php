
	<?php get_header(); ?>
	    
    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
        	<h1>Post</h1>
			<?php while ( have_posts() ) : the_post() ?>
				<! -- this is our post / page content START --> 
				<div class="blog-post">
					<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="blog-post-meta"><?php the_time('Y-m-d') ?> by <a href="#"><?php the_author(); ?></a></p>
					<?php the_content(); ?>
				
				</div>
				<! -- this is our post / page content END --> 
			<?php endwhile; ?>
			
          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>

        </div><!-- /.blog-main -->
		
		<?php get_sidebar(); ?>
		
      </div><!-- /.row -->

    </div><!-- /.container -->
    
    <?php get_footer(); ?>
