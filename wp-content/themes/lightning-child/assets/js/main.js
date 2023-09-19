jQuery(function($){
  let $slide = $('.mv_slider')
  .slick({
    autoplay: true,
    autoplaySpeed: 8000,
    arrows: false,
    dots: false,
    fade: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    speed: 4000
  })
  .on({
    beforeChange: function(event, slick, currentSlide, nextSlide) {
      $('.slick-slide', this).eq(currentSlide).addClass('remove-animation');
      $('.slick-slide', this).eq(nextSlide).addClass('animation');
    },
    afterChange: function() {
      $('.remove-animation', this).removeClass('remove-animation animation');
    }
  });
  $slide.find('.slick-slide').eq(0).addClass('animation');
});