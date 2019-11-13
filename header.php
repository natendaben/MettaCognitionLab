<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom styles for this template -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>
  <header id="cabin">
        <div class="title">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" alt="MettaCognition Lab"></a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
        </div>
        <nav>
            <a href="">Research</a>
            <a href="">Teaching</a>
            <a href="">Workshops</a>
            <a href="">Resources</a>
            <a href="" class="lastlink">About</a>
        </nav>
    </header>

    <div class="container">

      <div class="blog-header">
      <a href="<?php echo get_bloginfo( 'wpurl' );?>"><h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>