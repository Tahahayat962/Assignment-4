<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shadow Themes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>>
	<div class="archive-inner">
		<?php 
			$archive_img_enable = get_theme_mod( 'overall_blog_enable_archive_featured_img', true );
			$archive_date_enable = get_theme_mod( 'overall_blog_enable_archive_date', true );
			$archive_layout = get_theme_mod( 'overall_blog_archive_layout', 'archive-four' );
			$featured_image_option= get_theme_mod( 'overall_blog_featured_image_option', 'main-image' );
			$content_align= get_theme_mod( 'overall_blog_content_align', 'content-center' );
			$second_image_id = get_post_meta( get_the_ID(), '_overall_image_id', true );
			$archive_two_second_image = wp_get_attachment_image_src( $second_image_id, "overall-archive-two", "", array( "class"=> "img-responsive" ) );
			$second_image = wp_get_attachment_image_src( $second_image_id, "full", "", array( "class"=> "img-responsive" ) );
			$img_url = '';
			if ( has_post_thumbnail() && $archive_img_enable ) : 
				$img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
			endif;
			$half_class='';
			if ((!empty($second_image) && has_post_thumbnail()) && $archive_layout != 'archive-one') {
			  	$half_class ='double-image';
			} else{
				$half_class ='single-image';
			}  
		?>
		<?php if ( (!empty( $img_url ) || !empty($second_image)) && $archive_img_enable==true) : ?>
			<div class="archive-featured-image <?php echo $half_class; ?>">
			    <?php if ((!empty($second_image) || !empty( $img_url ) ) && ($archive_layout == 'archive-one') ){ ?>
	        		<div class="main-featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');"> 
	        			<a href="<?php echo the_permalink();?>" class="post-thumbnail-link"></a>
	        			<?php if (!empty($second_image)): ?>
		        			<div class="second-featured-image" style="background-image: url('<?php echo esc_url( $second_image[0] ) ?>');" > 
	    						<a href="<?php echo the_permalink();?>" class="post-thumbnail-link"></a>
	    					</div>
						<?php endif ?>
	        		</div>
	        	<?php } elseif ((!empty($second_image) || !empty( $img_url ) ) && ($archive_layout=='archive-two' || $archive_layout=='archive-three') ){ ?>

	    			<?php if (!empty($img_url)): ?>
		        		<div class="main-featured-image"> 
		        			<a href="<?php echo the_permalink();?>"><img src="<?php the_post_thumbnail_url( 'overall-archive-two' ); ?>"></a>
		        		</div>
	        		<?php endif ?>
		    		<?php if (!empty($second_image)): ?>
		    			<div class="second-featured-image" > 
							<a href="<?php echo the_permalink();?>"><img src="<?php echo esc_url( $archive_two_second_image[0] ) ?>"></a>
						</div>
	    			<?php endif ?>
	    		<?php } elseif ((!empty($second_image) || !empty( $img_url ) ) && ($archive_layout=='archive-four' || $archive_layout=='archive-five') ){ ?>

	    			<?php if (!empty($img_url) && $featured_image_option=='main-image'): ?>
		        		<div class="main-featured-image" <?php if ($archive_layout=='archive-five') { ?> style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');" <?php } ?>> 
		        			<?php if ($archive_layout=='archive-five') { ?>
		        				<a href="<?php echo the_permalink();?>" class="post-thumbnail-link"></a>
		        			<?php } else{ ?>
			        			<a href="<?php echo the_permalink();?>"><img src="<?php the_post_thumbnail_url( 'full' ); ?>"></a>
			        		<?php } ?>
		        		</div>
	        		<?php endif ?>
		    		<?php if (!empty($second_image) && $featured_image_option=='second-image'): ?>
		    			<div class="second-featured-image" <?php if ($archive_layout=='archive-five') { ?> style="background-image: url('<?php echo esc_url( $second_image[0] ) ?>');" <?php } ?>> 
		        			<?php if ($archive_layout=='archive-five') { ?>
		        				<a href="<?php echo the_permalink();?>" class="post-thumbnail-link"></a>
		        			<?php } else{ ?>
			        			<a href="<?php echo the_permalink();?>"><img src="<?php echo esc_url($second_image[0]); ?>"></a>
			        		<?php } ?>
		        		</div>
	    			<?php endif ?>
	    		<?php } ?>
	    		
			</div><!-- .featured-image -->
		<?php endif; ?>

		<div class="shadow-entry-container <?php echo esc_attr($content_align); ?>">
			
			<?php 
				$enable_archive_author = get_theme_mod( 'overall_blog_enable_archive_author', true );
				
				$archive_category_enable = get_theme_mod( 'overall_blog_enable_archive_category', true );
				$archive_tags_enable = get_theme_mod( 'overall_blog_enable_archive_tags', true );
			
			if ( $archive_category_enable ) {
			 	overall_blog_cats(); 
			 }?>

			    	
		    <header class="shadow-entry-header">
		        <?php
				if ( is_singular() ) :
					the_title( '<h1 class="shadow-entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="shadow-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
		    </header>

		    <?php if ( $archive_date_enable==true) { ?>
				<div class="post-date">
					<?php overall_blog_posted_on(); ?>
				</div>
			<?php } ?>
			
		    <div class="shadow-entry-content">
		        <?php
		        
					$archive_content_type = get_theme_mod( 'overall_blog_archive_content_type', 'excerpt' );
					if ( 'excerpt' == $archive_content_type ) {
						the_excerpt();
						?>
						
				        <div class="read-more-link">
						    <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod( 'overall_blog_archive_excerpt', esc_html__( 'View the post', 'overall-blog' ) ) ); ?></a>
						</div><!-- .read-more -->
					<?php
					} else {
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'overall-blog' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'overall-blog' ),
							'after'  => '</div>',
						) );
					}
				?>
				
		    	
		    	<?php if ( $archive_tags_enable ) {
		    	 	overall_blog_tags();
		    	 } ?>

		    </div><!-- .shadow-entry-content -->
	    </div><!-- .shadow-entry-container -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
