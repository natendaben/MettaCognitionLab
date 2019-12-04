<?php get_header(); ?>

<!-- HERO IMAGE -->
<?php $image_attributes = wp_get_attachment_image_src(30, 'full');
if ( $image_attributes ) : ?>
    <div class="hero-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo $image_attributes[0]; ?>);">
        <div class="hero-text"><?php echo get_bloginfo( 'description' ); ?></div>
    </div>
<?php endif; ?>

<div class="front-page-content">

    <!-- INTRO SECTION -->
    <div class="front-page-intro">
        <div class="intro-video">
        <iframe src="https://player.vimeo.com/video/368132706" width="640" height="268" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
        <div class="intro-text">
            <div class="about-short">
                Hi, I'm Annie.
            </div>
            <div class="about-long">
                <p class="intro-para">Rope's end sutler Corsair squiffy grog spanker belay broadside holystone weigh anchor. Jack Tar gaff pressgang chantey no prey, no pay interloper handsomely rope's end grapple barque. Topsail fluke salmagundi Blimey landlubber or just lubber jack flogging lad spanker grog.</p>
                <p class="intro-para">Weigh anchor parrel main sheet Spanish Main barkadeer tack Chain Shot hands walk the plank bilge water. Sutler provost spirits hempen halter brigantine boatswain gibbet chandler mizzenmast barque. Mizzenmast bounty hogshead boom spanker dead men tell no tales aft lass crimp loot.</p>
                <p class="intro-para">Fire in the hole bucko snow gabion take a caulk hands gaff Brethren of the Coast execution dock come about. Spanker hearties American Main clap of thunder man-of-war Sink me dead men tell no tales Jack Ketch swing the lead ho. Pressgang scallywag bucko wench keel furl pink boatswain bilge water knave.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="module-grid">
        <?php if(get_theme_mod('at-module-display') == 'Yes') {?>
        <div class="module">
            <div class="module-icon">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('at-module-image')) ?>" alt="Hero Image">
            </div>
            <div class="module-text">
                <h2><a href="<?php echo get_permalink(get_theme_mod('at-module-link')) ?>"><?php echo get_theme_mod('at-module-headline');?></a></h2>
                <?php echo wpautop(get_theme_mod('at-module-text')); ?>
            </div>
        </div>
        <?php } ?>
        <div class="module">
            <div class="module-icon">
                <img src="images/testIcon.png" alt="hi">
            </div>
            <div class="module-text">
                <h2>Research</h2>
                <p>Lorem ipsum whatever text can go here.</p>
            </div>
        </div>
        <div class="module">
            <div class="module-icon">
                <img src="images/testIcon.png" alt="hi">
            </div>
            <div class="module-text">
                <h2>Workshops</h2>
                <p>Lorem ipsum whatever text can go here.</p>
            </div>
        </div>
    </div>

</div> <!-- end content -->
<?php get_footer(); ?>