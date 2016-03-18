$(document).ready(function() {
  $(".owl-carousel").owlCarousel({
    nav: true,
    navContainer: "#customNav",
    dots: false,
    margin:10,

    responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        },
          loop: true
  });

  // var btnRight = $('#btn-right');
  // var btnLeft = $('#btn-left');
  // var carousel = $('#carousel-content');
  // var carouselItems = carousel.children();
  // var step = carouselItems.width();
  // var road = step * carouselItems.length;
  // var frame = $('#carousel-frame').width();
  // var position = 0;
  //
  // console.log(step, frame, road);
  // btnRight.click(function() {
  //   scrollRight();
  // })
  // btnLeft.click(function() {
  //
  // })
  //
  // btnLeft.click(function() {
  //   console.log(position, (road - frame));
  //     position = position + step;
  //     carousel.animate({'margin-left': (position+'px')});
  // })
  //
  // function scrollRight() {
  //     console.log(position, (road - frame));
  //     position = position - step;
  //     carousel.animate({'margin-left': (position+'px')});
  // }
  //
  // function scrollLeft() {
  //
  // }
})
