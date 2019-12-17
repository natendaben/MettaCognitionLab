<?php
get_header();
?>

	<div id="primary" class="content-container">
		<article id="archive" class="page">

		<?php if ( have_posts() ) : ?>

			<div class="archive-head">
                <h2>Archive</h2>
				<?php
					the_archive_title( '<div class="page-title">', '</div>' );
				?>
			</div>

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post(); ?>
				<article>
                <div class="entry-header">
                    <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                </div><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-content -->
            </article>
            
            <?php
				// End the loop.
            endwhile;
            
			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</article><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();