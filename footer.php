<?php if(get_theme_mod('at-footer-display') == 'Yes') {?>
<footer>
  <div class="footer-branding">
  <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="footer-logo" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );echo $image[0];?>" alt=""></a>
    <div class="footer-identity">
      <a href="<?php echo get_bloginfo( 'wpurl' );?>"><div class="footer-title"><?php echo get_bloginfo( 'name' ); ?></div></a>
      <div class="footer-tagline"><?php echo get_bloginfo( 'description'); ?></div>
    </div>
  </div>
  <!-- <?php $args = array(
            'theme_location' => 'footer'
          ); ?>
  <?php wp_nav_menu(  $args  ); ?> -->
  <?php if(get_theme_mod('at-copyright-display') == 'Yes') {?>
  <div class="copyright"><?php echo get_theme_mod('at-copyright-text');?></div>
  <?php } ?>
</footer>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>