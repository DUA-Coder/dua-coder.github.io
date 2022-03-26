$('.your-class').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
});
      
$('.first').slick({
  dots: false,
  infinite: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
  speed: 1000,
  slidesToShow: 1,
  adaptiveHeight: true
});
	

$('.home__events-slider').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows: false,
  dots:true,
  autoplay: false,
  autoplaySpeed: 2000,
  responsive: [
      {
        breakpoint: 992,
        settings: {
          
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
});
          