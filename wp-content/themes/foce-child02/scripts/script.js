

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
    let nuage=false;

    $(window).scroll(function(){

        if ($(document).scrollTop() >= 50) {
            $(".story").fadeIn(3000);
            console.log("story");
        }

        if ($(document).scrollTop() >= 1300) {
            $("#studio").fadeIn(3000);
        }

        if ($(document).scrollTop() >= 1550) {;
            $("#oscarsSection").fadeIn(3000);
        }

        if (nuage == false && $(document).scrollTop() > 700) {
            $(".bigCloudAnim").animate({right: "+=300"} , 3000);
            $(".littleCloudAnim").animate({right: "+=800"} , 3000);
            nuage = true;
        }
        console.log($(document).scrollTop())
    })

    // $(".bigCloudAnim").animate({Left: "50px"} ,2000);

}( jQuery ) );

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

  
  $('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
   });