<?php

/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package minimalistique
 */

use SuperbThemesCustomizer\CustomizerControls;

$minimalistique_theme_is_related_posts = isset($args['is_related_posts']) && !!$args['is_related_posts'];
$minimalistique_theme_hide_author_name = CustomizerControls::GetSelectedOrDefault(CustomizerControls::SINGLE_HIDE_BYLINE_AUTHOR) == "1" || !!$minimalistique_theme_is_related_posts;
$minimalistique_theme_hide_author_image = CustomizerControls::GetSelectedOrDefault(CustomizerControls::SINGLE_HIDE_BYLINE_IMAGE) == "1" || !!$minimalistique_theme_is_related_posts;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-entry fbox'); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>
		<?php
		if ('post' === get_post_type()) : ?>
			<div class="entry-meta">
				<div class="blog-data-wrapper">
					<div class='post-meta-inner-wrapper'>
						<?php if (!$minimalistique_theme_hide_author_image) : ?>
							<span class="post-author-img">
								<?php echo get_avatar(get_the_author_meta('ID'), 24); ?>
							</span>
						<?php endif; ?>
						<?php if (!$minimalistique_theme_hide_author_name) : ?>
							<span class="post-author-data">
								<?php the_author(); ?><?php esc_html_e(', ', 'minimalist-blogify'); ?>
							<?php endif; ?>
							<?php minimalistique_theme_posted_on(); ?>
							<?php if (!$minimalistique_theme_hide_author_name) : ?>
							</span>
						<?php endif; ?>
					</div>
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'minimalist-blogify'),
			'after'  => '</div>',
		));

		if (is_single()) : ?>
			<?php if (get_theme_mod('show_posts_categories_tags') == '') : ?>
				<div class="category-and-tags">
					<?php the_category(' '); ?>
					<?php if (has_tag()) : ?>
						<?php the_tags('', ''); ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>


	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->