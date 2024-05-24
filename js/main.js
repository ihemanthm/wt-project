(function ($) {
    "use strict";
    //Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').css('top', '0px');
        } else {
            $('.sticky-top').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    $(document).ready(function(){
        // Show/hide the button based on scroll position
        $(window).scroll(function(){
          if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
          } else {
            $('.back-to-top').fadeOut();
          }
        });
        
        // Scroll to top animation
        $('.back-to-top').click(function(){
          $('html, body').animate({scrollTop : 0},800);
          return false;
        });
      });
      
})(jQuery);

