<?php
/**
 * Template part for displaying front page trending.
 *
 * @package Shadow Themes
 */

/// Get default  mods value.
$trending_enable = get_theme_mod( 'overall_blog_trending_section_enable', true );

if ( false == $trending_enable ) {
    return;
}
$default = overall_blog_get_default_mods();
$header_font_size = get_theme_mod( 'overall_blog_trending_header_font_size');
$title_font_size = get_theme_mod( 'overall_blog_trending_post_font_size');
$trending_speed = get_theme_mod( 'overall_blog_trending_speed',600);
$trending_infinite = get_theme_mod('overall_blog_trending_infinite_enable', true);
$trending_dot = get_theme_mod('overall_blog_trending_dot_enable', true);
$trending_autoplay = get_theme_mod('overall_blog_trending_autoplay_enable', true);
$trending_arrow = get_theme_mod('overall_blog_trending_arrow_enable', true);
$trending_fade = get_theme_mod('overall_blog_trending_fade_enable', false);
$trending_content_opacity = get_theme_mod( 'overall_blog_trending_content_opacity',60);
$trending_background_opacity = get_theme_mod( 'overall_blog_trending_image_opacity',0);
$trending_decoration_image = get_theme_mod( 'overall_blog_trending_decoration_image',0);
$trending = get_theme_mod( 'overall_blog_trending_content_type', 'cat' );
$excerpt_length = get_theme_mod( 'overall_blog_trending_secion_excerpt',15); 
$trending_num = get_theme_mod( 'overall_blog_trending_num', 4 );
$trending_column = get_theme_mod( 'overall_blog_trending_column', 4 );
$section_title = get_theme_mod( 'overall_blog_trending_section_title'); 
?>
<?php if (!empty($title_font_size)): ?>
<style type="text/css">
    #trending .shadow-entry-title{
        font-size: <?php  echo esc_attr($title_font_size); ?>px;
        line-height: <?php  echo esc_attr($title_font_size) + 2; ?>px;
    }
</style>
<?php endif; ?>
<div id="trending">
	<div class="wrapper">
		<div class="trending-wrapper clear">
			<?php if (!empty($section_title)): ?>
				<div class="shadow-section-header">
					<h2 class="shadow-section-title" style="font-size: <?php echo esc_attr($header_font_size); ?>px;"><?php echo esc_html($section_title) ?></h2>
				</div>
			<?php endif ?>	
			<div class="trending-content column-<?php echo esc_attr($trending_column); ?>">
			    <?php
			    if (  in_array( $trending, array( 'post', 'page', 'cat' ) ) ) {

				    if ( 'cat' === $trending ) {
				        $trending_cat_id = get_theme_mod( 'overall_blog_trending_cat' );
				        $args = array(
				            'cat' => $trending_cat_id,   
				            'posts_per_page' => $trending_num,
				            'ignore_sticky_posts' => true,
				        );
				    } else {
				        $trending_id = array();
				        for ( $i=1; $i <= $trending_num; $i++ ) { 
				            $trending_id[] = get_theme_mod( "overall_blog_trending_{$trending}_" . $i );
				        }
				        $args = array(
				            'post_type' => $trending,
				            'post__in' => (array)$trending_id,   
			                'orderby'   => 'post__in',
				            'posts_per_page' => $trending_num,
				            'ignore_sticky_posts' => true,
				        );
				    }
				    $query = new WP_Query( $args );

				    $i = 1;
				    if ( $query->have_posts() ) :
				        while ( $query->have_posts() ) :
				            $query->the_post();
				            ?>
				            <article class=" <?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail' ; ?>" >
				            	<div class="trending-inner">
					            	<div class="featured-image-wrapper">
						            	<div class="featured-image">
						                    <img src="<?php the_post_thumbnail_url( 'overall-blog-trending-thumbnail' ); ?>">
						                </div>
					                </div>
					                <div class="trending-container">
						                <header class="shadow-entry-header">
					                        <h2 class="shadow-entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
					                    </header>
					                    <div class="shadow-entry-content">
	                                       
	                                        <div class="shadow-entry-meta">
	                                        	<span class="entry-post-date"> <?php overall_blog_posted_on(); ?> </span>
	                                        </div>
	                                    </div><!-- .shadow-entry-content -->
					                </div>
				                </div>
			    	        </article>
				        <?php 
				        $i++;
				    	endwhile;
				        wp_reset_postdata();
				    endif;
				    }  
				?>
			</div><!-- #trending slider -->
		</div><!-- .wrapper-->
	</div>
</div><!-- #trending -->