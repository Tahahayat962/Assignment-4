<?php
    /**
 * Template part for displaying front page popular.
 *
 * @package Shadow Themes
 */

/// Get default  mods value.
$popular_enable = get_theme_mod( 'overall_blog_popular_section_enable', true );

if ( false == $popular_enable ) {
    return;
}
$default = overall_blog_get_default_mods();
$header_font_size = get_theme_mod( 'overall_blog_popular_header_font_size');
$title_font_size = get_theme_mod( 'overall_blog_popular_post_font_size');
$popular = get_theme_mod( 'overall_blog_popular_content_type', 'cat' );
$popular_section_title = get_theme_mod( 'overall_blog_popular_title');
$popular_section_subtitle = get_theme_mod( 'overall_blog_popular_subtitle');
$popular_column = get_theme_mod( 'overall_blog_popular_column', 3 );
$popular_num = get_theme_mod( 'overall_blog_popular_num', 3);
$excerpt_length = get_theme_mod( 'overall_blog_popular_secion_excerpt',20); ?>
<?php if (!empty($title_font_size)): ?>
<style type="text/css">
    #popular .shadow-entry-title{
        font-size: <?php  echo esc_attr($title_font_size); ?>px;
        line-height: <?php  echo esc_attr($title_font_size) + 2; ?>px;
    }
</style>
<?php endif; ?>
<div id="popular" class="page-section">
    <div class="wrapper">
        <?php if(!empty($popular_section_title)):?>
            <div class="shadow-section-header">
                <h2 class="shadow-section-title" style="font-size: <?php echo esc_attr($header_font_size); ?>px; " ><?php echo esc_html($popular_section_title);?></h2>
                <div class="seperator"></div>
                <?php if(!empty($popular_section_subtitle)):?>
                    <p class="shadow-section-subtitle"><?php echo esc_html($popular_section_subtitle);?></p>
                <?php endif;?>
            </div><!-- .shadow-section-header -->
        <?php endif; ?>
        <div class="shadow-section-content column-<?php echo esc_attr($popular_column);?> ">
            <?php if (  in_array( $popular, array( 'post', 'page', 'cat' ) ) ) {
                if ( 'cat' === $popular ) {
                    $popular_cat_id = get_theme_mod( 'overall_blog_popular_cat' );
                    $args = array(
                        'cat' => $popular_cat_id,   
                        'posts_per_page' => $popular_num,
                        'ignore_sticky_posts' => true,
                    );
                } else {
                    $popular_id = array();
                    for ( $i=1; $i <= $popular_num; $i++ ) { 
                        $popular_id[] = get_theme_mod( "overall_blog_popular_{$popular}_" . $i );
                    }
                    $args = array(
                        'post_type' => $popular,
                        'post__in' => (array)$popular_id,   
                        'orderby'   => 'post__in',
                        'posts_per_page' => $popular_num,
                        'ignore_sticky_posts' => true,
                    );
                }
                $query = new WP_Query( $args );
                $i = 1;
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) :
                        $query->the_post(); ?>
                        <article>
                            <div class="popular-inner-content">
                                <div class="featured-image-wrapper">
                                    <div class="featured-image bg-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                        <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                                    </div><!-- .featured-image -->
                                </div>
                                <div class="shadow-entry-container">
                                    <div class="shadow-entry-meta">
                                        <div class="entry-post-cat"><?php overall_blog_cats(); ?></div>
                                        <div class="reading-time"><?php echo overall_blog_time_interval(); ?><span class="reading-text"><?php esc_html_e( 'Min to read', 'overall-blog' ); ?></span></div>
                                    </div>
                                    <header class="shadow-entry-header">
                                        <h2 class="shadow-entry-title"><a href="<?php the_permalink();?> "><?php the_title();?></a></h2>
                                    </header>

                                    <div class="shadow-entry-content">
                                        <?php
                                            $excerpt = overall_the_excerpt( $excerpt_length );
                                            echo wp_kses_post( wpautop( $excerpt ) );
                                        ?>
                                        <div class="shadow-entry-meta post-date-cmt">
                                            <span class="entry-post-date"> <?php overall_blog_posted_on(); ?> </span>
                                            <span class="entry-post-comment"> <?php overall_blog_comment(); ?> </span>
                                        </div>
                                    </div><!-- .shadow-entry-content -->
                                </div><!-- .shadow-entry-container -->
                            </div>
                        </article>
                        <?php $i++; ?>
                    <?php endwhile; ?> 
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            <?php } ?>
        </div>
    </div>
</div>