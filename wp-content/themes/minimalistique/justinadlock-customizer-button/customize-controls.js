( function( api ) {

	// Extends our custom "minimalistique" section.
	api.sectionConstructor['minimalistique'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
