

  ( function( $ ) {

    // function checkElementLocation() {
    //     var $window = $(window);
    //     var bottom_of_window = $window.scrollTop() + $window.height();
      
    //     $('.elem').each(function(i) {
    //       var $that = $(this);
    //       var bottom_of_object = $that.position().top + $that.outerHeight();
      
    //       //if element is in viewport, add the animate class
    //       if (bottom_of_window > bottom_of_object) {
    //         $(this).addClass('fade-in');
    //       }
    //     });
    //   }
    //   // if in viewport, show the animation
    //   checkElementLocation();
      
    //   $(window).on('scroll', function() {
    //     checkElementLocation();
    //   });


    $(".story").fadeOut()
    $("#studio").fadeOut()
    // $("#place").fadeOut()
    // $("#characters").fadeOut()
    $("#oscarsSection").fadeOut()

    $(window).scroll(function(){

        if ($(document).scrollTop() > 100) {
            $(".story").fadeIn(3000);
        }

        if ($(document).scrollTop() > 1800) {
            $("#studio").fadeIn(3000);
        }

        if ($(document).scrollTop() > 2400) {
            $("#oscarsSection").fadeIn(3000);
        }

        console.log($(document).scrollTop())
    })

}( jQuery ) );