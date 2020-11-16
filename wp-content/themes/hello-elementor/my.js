jQuery(document).ready(function(){
  jQuery('.cta-slider__responsive').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // jQuery('.map-point-marker').hover(function(){     
  //   jQuery('.map-point-marker-content').addClass('hover-visible');    
  // },     
  // function(){    
  //   jQuery('.map-point-marker-content').removeClass('hover-visible');     
  // });

  jQuery('.map-point-marker').hover(function(){     
    jQuery(this).addClass('hover-visible');    
  },     
  function(){    
    jQuery(this).removeClass('hover-visible');     
  });
  
});