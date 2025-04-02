jQuery(document).ready(function($) {

	// Uploading files
	var file_frame;

	jQuery.fn.upload_overall_image = function( button ) {
		var button_id = button.attr('id');
		var field_id = button_id.replace( '_button', '' );

		// If the media frame already exists, reopen it.
		if ( file_frame ) {
		  file_frame.open();
		  return;
		}

		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
		  title: jQuery( this ).data( 'uploader_title' ),
		  button: {
		    text: jQuery( this ).data( 'uploader_button_text' ),
		  },
		  multiple: false
		});

		// When an image is selected, run a callback.
		file_frame.on( 'select', function() {
		  var attachment = file_frame.state().get('selection').first().toJSON();
		  jQuery("#"+field_id).val(attachment.id);
		  jQuery("#overallimagediv img").attr('src',attachment.url);
		  jQuery( '#overallimagediv img' ).show();
		  jQuery( '#' + button_id ).attr( 'id', 'remove_overall_image_button' );
		  jQuery( '#remove_overall_image_button' ).text( 'Remove overall image' );
		});

		// Finally, open the modal
		file_frame.open();
	};

	jQuery('#overallimagediv').on( 'click', '#upload_overall_image_button', function( event ) {
		event.preventDefault();
		jQuery.fn.upload_overall_image( jQuery(this) );
	});

	jQuery('#overallimagediv').on( 'click', '#remove_overall_image_button', function( event ) {
		event.preventDefault();
		jQuery( '#upload_overall_image' ).val( '' );
		jQuery( '#overallimagediv img' ).attr( 'src', '' );
		jQuery( '#overallimagediv img' ).hide();
		jQuery( this ).attr( 'id', 'upload_overall_image_button' );
		jQuery( '#upload_overall_image_button' ).text( 'Set overall image' );
	});

});