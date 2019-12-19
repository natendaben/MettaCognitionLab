<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="logo" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );echo $image[0];?>" alt="MettaCognitionLab"></a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><h1 class="blog-title"><?php echo get_bloginfo( 'name' ); ?></h1></a>
        </div>
        <a href="javascript:void(0);" class="mobileIcon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        <nav>
          <?php $args = array(
            'theme_location' => 'primary'
          ); ?>
          <?php wp_nav_menu(  $args  ); ?>
        </nav>
    </header>

    <script>
      function myFunction() {
        var x = document.getElementById("menu-primary-menu-links");
        if (x.style.display === "flex") {
          x.style.display = "none";
        } else {
          x.style.display = "flex";
        }
      }
    </script>