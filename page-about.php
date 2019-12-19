<?php
get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>

  <div class="content-container">
    <article class="about page">
      <div class="about-page-content">
        <?php the_content(); ?>
      </div>
      <div class="about-sidebar">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("About Sidebar") ) : ?>
      <?php endif;?>
      </div>

    </article>
  </div>

  <?php endwhile;

  else : 
    echo '<p>No content found :(</p>';
  
  endif;

  get_footer();

?>