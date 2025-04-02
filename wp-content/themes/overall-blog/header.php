<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shadow Themes
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php do_action( 'wp_body_open' ); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'overall-blog' ); ?></a>
    <header id="masthead" class="site-header" role="banner">
        <div class="wrapper">
            <?php 
                $enable_menu_background_image = get_theme_mod( 'overall_blog_enable_menu_background_image', false);
                $header_top_padding = get_theme_mod( 'overall_blog_header_top_padding', 10);
                $header_bottom_padding = get_theme_mod( 'overall_blog_header_bottom_padding', 10); 
                $menu_background_image = get_theme_mod( 'overall_blog_menu_background_image'); 
                $menu_header_image = ! empty( $menu_background_image ) ?  $menu_background_image : get_template_directory_uri() . '/assets/img/header-image.jpg';
            ?>
            <style type="text/css">
                .site-branding{
                    padding-top: <?php echo esc_attr($header_top_padding); ?>px;
                    padding-bottom: <?php echo esc_attr($header_bottom_padding); ?>px;
                }
            </style>
            <div class="site-branding" <?php if ( $enable_menu_background_image==true ) { ?> style="background-image:url(<?php echo esc_url($menu_header_image) ?>);" <?php } ?>>
                <?php if ( $enable_menu_background_image==true ) { ?>
                    <div class="overlay"></div>
                <?php   } ?>
                    <div class="header-logo">
                        <?php if ( has_custom_logo() ) : ?>
                            <div class="site-logo">
                                <?php the_custom_logo(); ?>
                            </div><!-- .site-logo -->
                        <?php endif; ?>

                        <div id="site-identity">
                            <?php
                            if ( is_front_page() ) : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php else : ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php
                            endif;

                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                            <?php
                            endif; ?>
                        </div><!-- .site-branding-text -->
                    </div>
            </div><!-- .site-branding -->

            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'overall-blog' );?>">

                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <span class="menu-label"><?php esc_html_e( 'Menu', 'overall-blog' );?></span>
                            <svg viewBox="0 0 40 40" class="icon-menu">
                                <g>
                                    <rect y="7" width="40" height="2"/>
                                    <rect y="19" width="40" height="2"/>
                                    <rect y="31" width="40" height="2"/>
                                </g>
                            </svg>
                            <svg viewBox="0 0 612 612" class="icon-close">
                                <polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 
                                306,341.411 576.521,611.397 612,575.997 341.459,306.011"/>
                            </svg>
                        </button>
                        <?php

                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'menu nav-menu menu-header-container',
                        ) ); ?>

                </nav><!-- #site-navigation -->
            <?php elseif( current_user_can( 'edit_theme_options' ) ): ?>
                <nav class="main-navigation" id="site-navigation">
                    <div class="wrapper">
                        <ul id="primary-menu" class="menu nav-menu menu-header-container">
                            <li><a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php echo esc_html__( 'Add a menu', 'overall-blog' );?></a></li>
                        </ul>
                    </div><!-- .wrapper -->
                </nav>
            <?php endif; ?> 
            <?php 
                $top_menu_enable = get_theme_mod('overall_blog_enable_top_menu', true );
                $top_social_menu_enable = get_theme_mod('overall_blog_enable_top_social_menu', true );  
                if ( true == $top_social_menu_enable) {
                    wp_nav_menu( array(
                        'theme_location' => 'social',
                        'container'     => 'div',
                        'container_class' => 'header-social-menu',
                        'menu_class'     => 'social-icons',
                        'fallback_cb'   => false,
                        'link_before'    => '<span class="screen-reader-text">',
                        'link_after'     => '</span>' . overall_blog_get_icon_svg( 'link' ),
                        'depth'          => 1,
                    ) );
                }
            ?>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
