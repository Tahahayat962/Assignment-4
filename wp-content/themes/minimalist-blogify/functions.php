<?php
require_once get_template_directory() . '/vendor/autoload.php';
// Get customizer options
use SuperbThemesCustomizer\CustomizerControls;



function minimalist_blogify_custom_header_setup()
{
    add_theme_support('custom-header', apply_filters('minimalist_blogify_custom_header_args', array(
        'default-image'          => '',
        'default-text-color'     => '000000',
        'flex-width'         => true,
        'flex-height'        => true,
        'width'              => 1200,
        'height'             => 500,
        'default-image'         => '',
        'wp-head-callback'       => 'minimalist_blogify_header_style',
    ) ) );
    register_default_headers( array(
        'header-bg' => array(
            'url'           => get_theme_file_uri( '/img/bg.jpg' ),
            'thumbnail_url' => get_theme_file_uri( '/img/bg.jpg' ),
            'description'   => _x( 'Default', 'Default header image', 'minimalist-blogify' )
        ),  
    ) );
}
add_action('after_setup_theme', 'minimalist_blogify_custom_header_setup', 999);


// New color variables
if (method_exists(CustomizerControls::class, "OverwriteDefault")) {
    CustomizerControls::OverwriteDefault(CustomizerControls::NAVIGATION_LAYOUT_STYLE, "navigation_layout_style_choice_large");
    CustomizerControls::OverwriteDefault(CustomizerControls::BLOGFEED_SHOW_READMORE_BUTTON, "1");
    CustomizerControls::OverwriteDefault(CustomizerControls::SITE_IDENTITY_HIDE_TAGLINE, "0");
    CustomizerControls::OverwriteDefault(CustomizerControls::SINGLE_HIDE_BYLINE_AUTHOR, "1");
    CustomizerControls::OverwriteDefault(CustomizerControls::PAGE_404_HIDE_POSTS, "0");
    CustomizerControls::OverwriteDefault(CustomizerControls::SINGLE_HIDE_BYLINE_IMAGE, "1");
    CustomizerControls::OverwriteDefault(CustomizerControls::SINGLE_HIDE_RELATED_POSTS, "1");
    CustomizerControls::OverwriteDefault(CustomizerControls::GENERAL_BORDER_RADIUS_BUTTONS, 3);
    CustomizerControls::OverwriteDefault(CustomizerControls::FOOTER_GOTOTOP_HIDE, "0");
    CustomizerControls::OverwriteDefault('--minimalistique-primary', "#f96300");
    CustomizerControls::OverwriteDefault('--minimalistique-primary-dark', "#e15a01");
    CustomizerControls::OverwriteDefault('--minimalistique-secondary', "#000");
    CustomizerControls::OverwriteDefault('--minimalistique-secondary-dark', "#000");

}


// Get stylesheet
add_action('wp_enqueue_scripts', 'minimalist_blogify_enqueue_styles');
function minimalist_blogify_enqueue_styles()
{
    wp_enqueue_style('minimalist-blogify-parent-style', get_template_directory_uri() . '/style.css');
}



// New fonts
function minimalist_blogify_enqueue_assets()
{
    // Include the file.
    require_once get_theme_file_path('webfont-loader/wptt-webfont-loader.php');
    // Load the webfont.
    wp_enqueue_style(
        'minimalist-blogify-fonts',
        wptt_get_webfont_url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap'),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'minimalist_blogify_enqueue_assets');
