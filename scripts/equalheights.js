/**
 * Equal Heights Plugin
 * Equalize the heights of elements. Great for columns or any elements
 * that need to be the same size (floats, etc).
 * 
 * Version 1.0
 * Updated 12/10/2008
 *
 * Copyright (c) 2008 Rob Glazebrook (cssnewbie.com) 
 *
 * Usage: $(object).equalHeights([minHeight], [maxHeight]);
 * 
 * Example 1: $(".cols").equalHeights(); Sets all columns to the same height.
 * Example 2: $(".cols").equalHeights(400); Sets all cols to at least 400px tall.
 * Example 3: $(".cols").equalHeights(100,300); Cols are at least 100 but no more
 * than 300 pixels tall. Elements with too much content will gain a scrollbar.
 * 
 */

// (function($) {
// 	$.fn.equalHeights = function(minHeight, maxHeight) {
// 		tallest = (minHeight) ? minHeight : 0;
// 		this.each(function() {
// 			if($(this).height() > tallest) {
// 				tallest = $(this).height();
// 			}
// 		});
// 		if((maxHeight) && tallest > maxHeight) tallest = maxHeight;
// 		return this.each(function() {
// 			$(this).height(tallest).css("overflow","auto");
// 		});
// 	}

// })(jQuery);





/**
* This will set sidebars and the main content column all to equal height:
*  if (Drupal.jsEnabled) {
*    $(document).ready(function() {
*    $('#content-column, .sidebar').equalHeights();
*   });
*  }
* 
* This will set all blocks in regions (not sidebars) to equal height:
*  if (Drupal.jsEnabled) {
*    $(document).ready(function() {
*    $('#region-name .block-inner').equalHeights();
*   });
*  }
*/
jQuery.fn.equalHeights = function () {
  var height = 0;
  var maxHeight = 0;

  // Store the tallest element's height
  this.each(function () {
    height = jQuery(this).outerHeight();
    maxHeight = (height > maxHeight) ? height : maxHeight;
  });

  // Set element's min-height to tallest element's height
  return this.each(function () {
    var t = jQuery(this);
    var minHeight = maxHeight - (t.outerHeight() - t.height());
    var property = jQuery.browser.msie && jQuery.browser.version < 7 ? 'height' : 'min-height';
   
    t.css(property, minHeight + 'px');
});
};