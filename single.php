<?php
get_header();

if(have_posts()) :
  while(have_posts()) : the_post(); ?>
  <?php if ( has_post_thumbnail() ) { ?>
    <!-- <div class="f-img">
        <img class="featured-image" src="<?php echo get_the_post_thumbnail_url(); ?>">
    </div> -->
    <div class="hero-post-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <div class="hero-text"></div>
    </div>
  <?php } ?>
  <div class="content-container">
    <article class="post page">
        <h2><?php the_title(); ?></h2>
        <div class="date"><?php echo the_date(); ?></div>
      <?php the_content(); ?>
    </article>
  </div>

  <?php endwhile;

  else : 
    echo '<p>No content found :(</p>';
  
  endif;

  get_footer();

?>