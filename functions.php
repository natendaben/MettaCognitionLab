<?php
function startwordpress_scripts() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

function startwordpress_google_fonts() {
    wp_enqueue_style('Cabin', 'https://fonts.googleapis.com/css?family=Raleway:400,700,800,900&display=swap');
    wp_enqueue_style('Roboto Mono', 'https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap');
    wp_enqueue_style('Bitter', 'https://fonts.googleapis.com/css?family=Bitter:400,400i,700&display=swap');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// Navigation menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Add post format support
add_theme_support('post-formats', array('aside', 'gallery', 'link'));

// WordPress Titles
add_theme_support( 'title-tag' );
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_image_size('full', 1000, 500);

// Footer Customization
function at_footer($wp_customize){
    $wp_customize->add_section('at-footer-section', array(
        'title' => 'Footer'
    ));

    $wp_customize->add_setting('at-footer-display', array(
        'default' => 'Yes'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'at-footer-display-control', array(
        'label' => 'Display footer?',
        'section' => 'at-footer-section',
        'settings' => 'at-footer-display',
        'type' => 'select',
        'choices' => array(
            'No' => 'No',
            'Yes' => 'Yes'
        )
    )));

    $wp_customize->add_setting('at-copyright-display', array(
        'default' => 'Yes'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'at-copyright-display-control', array(
        'label' => 'Display copyright?',
        'section' => 'at-footer-section',
        'settings' => 'at-copyright-display',
        'type' => 'select',
        'choices' => array(
            'No' => 'No',
            'Yes' => 'Yes'
        )
    )));

    $wp_customize->add_setting('at-copyright-text', array(
        'default' => '© 2019 Annie Bruns'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'at-copyright-text-control', array(
        'label' => 'Copyright Text',
        'section' => 'at-footer-section',
        'settings' => 'at-copyright-text',
    )));
}
add_action( 'customize_register', 'at_footer');

//add module section to admin appearance customize screen
function at_module($wp_customize){
    $wp_customize->add_section('at-module-section', array(
        'title' => 'Module'
    ));

    $wp_customize->add_setting('at-module-display', array(
        'default' => 'No'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'at-module-display-control', array(
        'label' => 'Display this section?',
        'section' => 'at-module-section',
        'settings' => 'at-module-display',
        'type' => 'select',
        'choices' => array(
            'No' => 'No',
            'Yes' => 'Yes'
        )
    )));

    $wp_customize->add_setting('at-module-headline', array(
        'default' => 'Headline goes here!'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'at-module-headline-control', array(
        'label' => 'Headline',
        'section' => 'at-module-section',
        'settings' => 'at-module-headline',
    )));

    $wp_customize->add_setting('at-module-text', array(
        'default' => 'Text goes here!'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'at-module-text-control', array(
        'label' => 'Text',
        'section' => 'at-module-section',
        'settings' => 'at-module-text',
        'type' => 'textarea'
    )));

    $wp_customize->add_setting('at-module-link');

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'at-module-link-control', array(
        'label' => 'Link',
        'section' => 'at-module-section',
        'settings' => 'at-module-link',
        'type' => 'dropdown-pages'
    )));

    $wp_customize->add_setting('at-module-image');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'at-module-image-control', array(
        'label' => 'Image',
        'section' => 'at-module-section',
        'settings' => 'at-module-image',
        'height' => 500,
        'width' => 500,
    )));
}
add_action( 'customize_register', 'at_module');

// Customize Appearance Options
function at_customize_register( $wp_customize ){
    // COLOR SECTION
    $wp_customize->add_section('at_colors', array(
        'title' => __('Colors', 'MettaCognition Lab'),
        'priority' => 30,
    ));

    // Primary text
    $wp_customize->add_setting('at_text_color', array(
        'default' => '#104547',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'at_text_color_control', array(
        'label' => __('Primary Text Color', 'MettaCognition Lab'),
        'section' => 'at_colors',
        'settings' => 'at_text_color'
    )));

    // Secondary text
    $wp_customize->add_setting('at_secondary_text_color', array(
        'default' => '#81B29A',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'at_secondary_text_color_control', array(
        'label' => __('Secondary Text Color', 'MettaCognition Lab'),
        'section' => 'at_colors',
        'settings' => 'at_secondary_text_color'
    )));

    // Main Background
    $wp_customize->add_setting('at_bg_color', array(
        'default' => '#E0FBFC',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'at_bg_color_control', array(
        'label' => __('Primary Background Color', 'MettaCognition Lab'),
        'section' => 'at_colors',
        'settings' => 'at_bg_color'
    )));

    // Footer Background
    $wp_customize->add_setting('at_footer_bg_color', array(
        'default' => '#ACDCE2',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'at_footer_bg_color_control', array(
        'label' => __('Footer Background Color', 'MettaCognition Lab'),
        'section' => 'at_colors',
        'settings' => 'at_footer_bg_color'
    )));
}
add_action('customize_register', 'at_customize_register');

function at_customize_css(){ ?>
    <style type="text/css">
        a:visited, a:link, a:active{
            color: <?php echo get_theme_mod('at_text_color'); ?>;
        }
        body{
            color: <?php echo get_theme_mod('at_text_color'); ?>;
        }
        a:hover{
            color: <?php echo get_theme_mod('at_secondary_text_color'); ?>;
        }
        .copyright{
            color: <?php echo get_theme_mod('at_secondary_text_color'); ?>;
        }
        body{
            background-color: <?php echo get_theme_mod('at_bg_color'); ?>;
        }
        footer{
            background-color: <?php echo get_theme_mod('at_footer_bg_color'); ?>;
            border-top: 4px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        hr{
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), <?php echo get_theme_mod('at_text_color'); ?>, rgba(0, 0, 0, 0));
        }
        .hero-image, .hero-post-image{
            border-bottom: 4px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        header{
            border-bottom: 4px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        .wp-block-code{
            border: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        .wp-block-pullquote{
            border-top: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
            border-bottom: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        .wp-block-quote{
            border-left: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        td{
            border: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        #rpwwt-recent-posts-widget-with-thumbnails-2{
            border-top: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        .archive-head{
            border-bottom: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        .wp-block-search input{
            border: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
        }
        .wp-block-search button{
            border: 2px solid <?php echo get_theme_mod('at_text_color'); ?>;
            background: <?php echo get_theme_mod('at_text_color'); ?>;
        }
        .wp-block-search button:hover{
            color: <?php echo get_theme_mod('at_secondary_text_color'); ?>;
        }
        .wp-block-button a:hover{
            color: <?php echo get_theme_mod('at_secondary_text_color'); ?>;
        }
    </style>
<?php }
add_action('wp_head', 'at_customize_css');

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer Widget Area',
    'before_widget' => '<div class = "widgetArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);
