<?php
get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="hero-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <div class="hero-text"><?php the_title(); ?></div>
    </div>
  <?php } ?>
  <div class="content-container">
    <article class="post page">
      <?php if ( !has_post_thumbnail() ) { ?>  
        <h2><?php the_title(); ?></h2>
      <?php } ?>
      <?php the_content(); ?>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Area") ) : ?>
      <?php endif;?>
    </article>
  </div>

  <?php endwhile;

  else : 
    echo '<p>No content found :(</p>';
  
  endif;

  get_footer();

?>