

  ( function( $ ) {

    // $(".story").fadeOut()
    // $("#studio").fadeOut()
    // $("#place").fadeOut()
    // $("#characters").fadeOut()
    // $("#oscarsSection").fadeOut()
    let nuage=false;


    $(window).scroll(function(){

        if ($(document).scrollTop() >= 50) {
            // $(".story").fadeIn(3000);
            // console.log("story");
            $(".storySection").addClass('visibleFade');
        }

        if ($(document).scrollTop() >= 400) {
          // $(".story").fadeIn(3000);
          // console.log("story");
          $(".divChars").addClass('visibleFade');
      }

      if ($(document).scrollTop() >= 1200) {
        // $(".story").fadeIn(3000);
        // console.log("story");
        $(".placeSection").addClass('visibleFade');
    }
        
        if ($(document).scrollTop() >= 1300) {
            // $("#studio").fadeIn(3000);
            $(".studioSection").addClass('visibleFade');
            // $(".parallax-up2").addClass('active2');

             // Parallax Studio Koukaki en bas de page
              setTimeout(function () {
                $('.wordPara1').addClass('active2');
              }, 500);
            
              setTimeout(function () {
                $('.wordPara2').addClass('active2');
              }, 1000);
        }

        if ($(document).scrollTop() >= 1550) {;
            // $("#oscarsSection").fadeIn(3000);
            $(".oscarsClassSection").addClass('visibleFade');
        }

        // if (nuage == false && $(document).scrollTop() > 700) {
        //     $(".bigCloudAnim").animate({right: "+=300"} , 3000);
        //     $(".littleCloudAnim").animate({right: "+=800"} , 3000);
        //     nuage = true;
        // }

          function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top < window.innerHeight &&
                rect.bottom > 0
            );
        }
        
          function isElementFullyOutOfViewport(el) {
              const rect = el.getBoundingClientRect();
              return (
                  rect.bottom < 0 || rect.top > window.innerHeight
              );
          }

          $(window).on('scroll', function() {
              const $bigCloud = $('.bigCloudAnim');
              const $littleCloud = $('.littleCloudAnim');
              const bigCloud = $bigCloud[0];

              // Si les nuages sortent du viewport reset les nuages
              if (isElementFullyOutOfViewport(bigCloud)) {
                  if (nuage) {
                      // Reset les nuages
                      $bigCloud.stop(true).css({right: "0px"});
                      $littleCloud.stop(true).css({right: "0px"});
                      nuage = false;
                  }
              }

              // L'animation commence si les nuages sont dans l'écran et seulement si l'animation est déjà pas en cours
              if (!nuage && !isElementFullyOutOfViewport(bigCloud)) {
                  $bigCloud.animate({right: "+=300"} , 3000);
                  $littleCloud.animate({right: "+=800"} , 3000);
                  nuage = true;
              }
          });
          console.log($(document).scrollTop())

          $(window).on('scroll', function () {
            var scrollTop = $(this).scrollTop();
          
            $('#logoParallax').css('transform', 'translate(-50%, calc(-50% + ' + scrollTop * 1.8 + 'px))');
        
            $('.videoHeader').css('transform', 'translateY(' + scrollTop * 0.1 + 'px)');
          });
      })

}( jQuery ) );

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "3",
    loop: true,
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


   // Parallax logo header qui marche

   window.addEventListener('load', () => {
    document.getElementById('logoParallax').classList.add('active');
  });

