// jQuery Document
// Chris Slagle


jQuery(document).ready(function() {

$( "pre" ).addClass( "prettyprint" );

  $("#search-form").hide();

    // Full layout
    $("#close-button").click(function() {
        $("#search-form").slideToggle("slow");
    });

    $("#az-search").click(function() {
        $("#search-form").slideToggle("slow");
    });

    // Responsive layout
    $("#responsive-menu").hide();

    $("#responsive-btn").click(function() {
        $("#responsive-menu").fadeToggle("fast");
        $("#responsive-btn").toggleClass("responsive-menu-btn-close");
    });

    var $window = $(window);

  	// The function
  	function checkWidth() {

  		var windowsize = $window.width();

      // Responsive break point
  		if (windowsize < 1100) {
        $("#responsive-menu").hide();
  		}
  	}

  	// Call function
  	checkWidth();

  	// Check for resizing continously
  	$(window).resize(checkWidth);

});
