        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
			<?php if ( is_sidebar_active('main_sidebar') ) : ?>
		        <div id="primary" class="widget-area">
		                <?php dynamic_sidebar('main_sidebar'); ?>
		        </div><!-- #primary .widget-area -->
		    <?php endif; ?>   
        </div><!-- /.blog-sidebar -->
