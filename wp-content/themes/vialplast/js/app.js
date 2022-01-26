// jquery.easing
jQuery(function() {
  jQuery('.btn_to').bind('click', function(event) {
    var $anchor = jQuery(this);
    jQuery('html, body').stop().animate({
        scrollTop: jQuery($anchor.attr('href')).offset().top - 100
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });
});