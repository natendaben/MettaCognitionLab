<?php

get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>
<div class="content-container">
  <article class="post page">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>
</div>

  <?php endwhile;

  else : ?>
  <div class="content-container">
    <article class="post page">
      <p id="no-content">Page could not be found :(</p>
    </article>
  </div>
  
  <?php endif;

  get_footer();

?>