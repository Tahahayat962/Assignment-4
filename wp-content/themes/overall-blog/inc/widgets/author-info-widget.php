<?php
if ( ! class_exists( 'Overall_Blog_Author_Information_Widget' ) ) {
	/**
	 * Adds Overall Blog Author Info Widget.
	 */
	class Overall_Blog_Author_Information_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			$overall_blog_author_info_widget = array(
				'classname'   => 'overall-blog-widget author-widget',
				'description' => __( 'Author Information Widget', 'overall-blog' ),
			);
			parent::__construct(
				'overall_blog_author_info_widget',
				__( 'ST: Author Information Widget', 'overall-blog' ),
				$overall_blog_author_info_widget
			);
		}

		/**
		 * Front-end display of widget.

		 * @see WP_Widget::widget()

		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( $args, $instance ) {
			if ( ! isset( $args['widget_id'] ) ) {
				$args['widget_id'] = $this->id;
			}
			$section_title      = ! empty( $instance['title'] ) ? $instance['title'] : '';
			$author_name        = ! empty( $instance['name'] ) ? $instance['name'] : '';
			$author_position = ! empty( $instance['position'] ) ? $instance['position'] : '';
			$author_description = ! empty( $instance['description'] ) ? $instance['description'] : '';
			$author_image_url   = ! empty( $instance['author_image_url'] ) ? $instance['author_image_url'] : '';

			echo $args['before_widget']; ?>
			<div class="shadow-section-header">
            	<?php if ( !empty( $section_title ) ): ?>
		           <?php echo $args['before_title'] . esc_html($section_title) . $args['after_title']; ?>
		        <?php endif; ?>
		    </div>

			<div class="author-info-details">
				<div class="author-thumbnails">
					<div class="author-img post-featured-image">
						<?php
						if ( ! empty( $author_image_url ) ) {
							$sizes = array();
							echo '<img class="featured-image" src="' . esc_url( $author_image_url ) . '" alt="' . esc_attr( $author_name ) . '"  />';
						}
						?>
					</div>
					<div class="author-name">
						<h3 class="shadow-entry-title">
							<?php echo esc_html( $author_name ); ?>
						</h3>
						<span class="author-position"><?php echo esc_html( $author_position ); ?></span>
					</div>
				</div>
				<div class="author-details">
					<p class="author-description"><?php echo wp_kses_post( $author_description ); ?></p>
				</div>
			</div>

			<?php
			echo $args['after_widget'];
		}

		/**
		 * Back-end widget form.

		 * @see WP_Widget::form()

		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance ) {
			$section_title      = isset( $instance['title'] ) ? $instance['title'] : '';
			$author_name        = isset( $instance['name'] ) ? $instance['name'] : '';
			$author_position = isset( $instance['position'] ) ? $instance['position'] : '';
			$author_description = isset( $instance['description'] ) ? $instance['description'] : '';
			$author_image_url   = isset( $instance['author_image_url'] ) ? $instance['author_image_url'] : '';
			?>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Section Title:', 'overall-blog' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $section_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"><?php esc_html_e( 'Author Name:', 'overall-blog' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'name' ) ); ?>" type="text" value="<?php echo esc_attr( $author_name ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'position' ) ); ?>"><?php esc_html_e( 'Author Position:', 'overall-blog' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'position' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'position' ) ); ?>" type="text" value="<?php echo esc_attr( $author_position ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_html_e( 'Description :', 'overall-blog' ); ?></label>
				<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" value="<?php echo esc_attr( $author_description ); ?>"><?php echo wp_kses_post( $author_description ); ?></textarea>
			</p>
			<div>
				<label for="<?php echo esc_attr( $this->get_field_id( 'author_image_url' ) ); ?>"><?php esc_html_e( 'Author Image URL', 'overall-blog' ); ?></label>:<br />
				<input type="url" class="img widefat" name="<?php echo esc_attr( $this->get_field_name( 'author_image_url' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'author_image_url' ) ); ?>" value="<?php echo esc_url( $author_image_url ); ?>" /><br />
				<?php
				$image_url = '';
				if ( ! empty( $author_image_url ) ) {
					$image_url = $author_image_url;
				}
				$style_attr = '';
				if ( empty( $image_url ) ) {
					$style_attr = 'display:none;';
				}
				?>
				<div class="image-preview" style="<?php echo esc_attr( $style_attr ); ?>">
					<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_attr_e( 'Preview', 'overall-blog' ); ?>" style="width: 200px;"/>
				</div><!-- .image-preview -->
				<input type="button" class="select-img button" value="<?php esc_attr_e( 'Upload Image', 'overall-blog' ); ?>" data-uploader_title="<?php esc_attr_e( 'Select Image', 'overall-blog' ); ?>" data-uploader_button_text="<?php esc_attr_e( 'Choose Image', 'overall-blog' ); ?>" style="margin-top:5px;" /><br/>
			</div>

			<?php
		}

		/**
		 * Sanitize widget form values as they are saved.

		 * @see WP_Widget::update()

		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.

		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) {

			$instance                       = $old_instance;
			$instance['title']              = sanitize_text_field( $new_instance['title'] );
			$instance['name']               = sanitize_text_field( $new_instance['name'] );
			$instance['position']               = sanitize_text_field( $new_instance['position'] );
			$instance['description']        = wp_kses_post( $new_instance['description'] );
			$instance['author_image_url']   = esc_url_raw( $new_instance['author_image_url'] );
			return $instance;
		}

	}
}

/**
 * Enqueue admin scripts for Image Widget
 *
 * @since Overall Blog 1.0
 **/
function overall_blog_author_info_widget_image_upload_enqueue( $hook ) {

	if ( 'widgets.php' !== $hook ) {
		return;
	}

	wp_enqueue_media();
	wp_enqueue_script( 'overall-blog-author-info-widget-image-upload-script', get_template_directory_uri() . '/assets/js/upload.js', array( 'jquery' ), '1.0.0', true );
}

add_action( 'admin_enqueue_scripts', 'overall_blog_author_info_widget_image_upload_enqueue' );
