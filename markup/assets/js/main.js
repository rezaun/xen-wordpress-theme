$(document).ready(function () {
    //One Page Active
    $('#nav').onePageNav({
        currentClass: 'current'
    });

  // Magnific Popup Active
  $(".project-popup").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
    },
  });



  // Counter Active
  $(".counterup").counterUp();

  // Slick JS
  $('.testimonials').slick({
    arrows: false,
    dots: true,
    autoplay: true,
    loop: true
  });

    //Sticky Header Active
    $(window).on('scroll',function(){
        if($(this).scrollTop() > 50){
            $('.header-area').addClass('sticky');
        } else {
            $('.header-area').removeClass('sticky');
        }
    });
});
