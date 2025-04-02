<?php
/**
 * Template part for displaying front page category list.
 *
 * @package Shadow Themes
 */

/// Get default  mods value.
$category_list_enable = get_theme_mod( 'overall_blog_category_list_section_enable', true );

if ( false == $category_list_enable ) {
    return;
}

$header_font_size = get_theme_mod( 'overall_blog_category_list_header_font_size');
$button_font_size = get_theme_mod( 'overall_blog_category_list_button_font_size');
$category_list_speed = get_theme_mod( 'overall_blog_category_list_speed',600);
$category_list_infinite = get_theme_mod('overall_blog_featured_category_list_infinite_enable', true);
$category_list_dot = get_theme_mod('overall_blog_featured_category_list_dot_enable', false);
$category_list_autoplay = get_theme_mod('overall_blog_featured_category_list_autoplay_enable', true);
$category_list_arrow = get_theme_mod('overall_blog_featured_category_list_arrow_enable', false);
$category_list_fade = get_theme_mod('overall_blog_featured_category_list_fade_enable', false);
$category_list_content_opacity = get_theme_mod( 'overall_blog_category_list_content_opacity',0);
$category_list_background_opacity = get_theme_mod( 'overall_blog_category_list_image_opacity',0);
$category_list_decoration_image = get_theme_mod( 'overall_blog_category_list_decoration_image',0);
$cat_list = get_theme_mod( 'category_list_cat' );
$excerpt_length = get_theme_mod( 'overall_blog_category_list_secion_excerpt',20); 


$default = overall_blog_get_default_mods();
$category_list_num = get_theme_mod( 'overall_blog_category_list_num', 9 ); 
$category_list_column = get_theme_mod( 'overall_blog_category_list_column', 7 );

?>
<div id="category-list">
	<div class="wrapper">
		<div class="category-slider" data-slick='{"slidesToShow": <?php echo esc_attr($category_list_column); ?>, 
			"slidesToScroll": 1, 
			"infinite": <?php echo $category_list_infinite ? 'true': 'false'; ?>, 
			"speed": <?php echo esc_attr($category_list_speed); ?>, 
			"dots": <?php echo $category_list_dot ? 'true': 'false'; ?>, 
			"arrows":<?php echo $category_list_arrow ? 'true': 'false'; ?>, 
			"autoplay": <?php echo $category_list_autoplay ? 'true': 'false'; ?>, 
			"draggable": true, "fade": <?php echo $category_list_fade ? 'true': 'false'; ?> }'>
			<?php if (!empty($cat_list)): ?>	 
				<?php foreach ( $cat_list as $cat ) : ?>
					<?php
						
						$cat_url= get_category_link($cat);
						$cat_name= get_cat_name($cat);
						$category = get_term($cat);
						$cat_count = $category->count;
						$post_count = $cat_count < 2 ? $cat_count . ' Post' : $cat_count . ' Posts';
						if (function_exists('z_taxonomy_image_url') && !empty(z_taxonomy_image_url($cat))){ 
							$cat_img_url= z_taxonomy_image_url($cat);
						} else{
							$cat_img_url=get_template_directory_uri() . '/assets/img/no-image.jpg';
						}

					?>
			        <article class="cat-list" >
			        	<div class="cat-list-inner">
			        		<div class="featured-image" style="background-image: url('<?php echo esc_url($cat_img_url) ?>');">
					        	<a href="<?php echo esc_url($cat_url);?>" class="post-thumbnail-link"></a>
				                <div class="shadow-entry-header" style=" background-color: rgba(0, 0, 0, 0.<?php echo absint($category_list_content_opacity); ?> )" >
			                        <h2 class="shadow-entry-title" style="font-size: <?php echo esc_attr($header_font_size); ?>px; ">
			                            <a class="category-name" href="<?php echo esc_url($cat_url); ?>">
			                                <span ><?php echo esc_html($cat_name); ?> </span>  
			                            </a>
			                            <span class="category-count"><?php echo esc_html($post_count) ?></span>
			                        </h2>
				                </div>
			                </div>
		                </div>
			        </article><!-- .section-content -->
			    <?php endforeach; ?> 
		    <?php endif; ?>      	        
		</div><!-- #featured-slider -->
	</div>
</div>