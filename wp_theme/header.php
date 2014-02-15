<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
      <nav class="blog-nav">
      	<?php $menuParameters = array(
      		  'theme_location' => 'main_menu',
			  'container'       => false,
			  'echo'            => false,
			  'items_wrap'      => '%3$s',
			  'depth'           => 0,
			  );

		  echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
      </nav>
        <!--<nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>-->
      </div>
    </div>
	<div class="jumbotron">
      <div class="container">
          <div class="blog-header">
          	<?php if(is_front_page()) { ?>
	        	<h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1>
	        <?php } else { ?>
	        	<h1 class="blog-title"><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	        <? } ?>
	        <p class="lead blog-description"><?php bloginfo( 'description' ); ?></p>
	      </div>
      </div>
    </div>
    