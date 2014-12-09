/* TODO ... This */

$.fn.responsiveHeight = function (options) {

	var defaults = {
		'mobileWidth': 600,
		//'responsiveRow' : false, //If true fixed heights every responsiveRowCount elements
		//'responsiveRowCount' : 3,
		//'rowPrevix' : 'responsiveRow_', //The prefix of the class added to row'd items
		'verbose': false
	}
	var options = $.extend({}, defaults, options); //Add missing variables to the options object from the defaults
	var self = this;

	if (options.verbose) {
		console.log(options);
	}

	function resize() {
		if ($(window).width() < options.mobileWidth) {
			reset_height_block();
		} else {
			even_height_element();
		}
	}

	// Setup resize on window resize
	$(window).resize(function () {
		resize();
	});

	//run the resize once upon creation
	resize();

	/*
	 *  FUNCTIONS
	 */
	function even_height_element() {
		var max_height = 0;

		self.each(function () {
			$(this).css('height', 'auto');
			if ($(this).outerHeight() > max_height) {
				max_height = $(this).outerHeight();
			}
		});

		self.css('height', max_height + 'px');
	}

	function reset_height_block() {
		self.css('height', 'auto');
	}

};