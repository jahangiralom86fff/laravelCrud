
$('.carousel-one').owlCarousel({
  rtl: false,
  loop: true,
  margin: 0,
  nav: true,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsive:{
    0:{
        items: 2,
    },
    800:{
        items: 2,
    },
    992:{
        items: 2, 
    },
    1300:{
        items: 3,
    },
    1400:{
        items: 4,
    },
    1500:{
        items: 4,
    }
  }
});

$('.corusel-details').owlCarousel({
  rtl: false,
  loop: true,
  margin: 0,
  nav: true,
  autoplay: false,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  responsive:{
    0:{
        items: 2,
    },
    800:{
        items: 2,
    },
    992:{
        items: 2, 
    },
    1300:{
        items: 2,
    },
    1400:{
        items: 2,
    },
    1500:{
        items: 2,
    }
  }
});

$('.carousel-project').owlCarousel({
  rtl: false,
  loop: true,
  margin: 0,
  nav: true,
  autoplay: true,
  autoplayTimeout: 2600,
  autoplayHoverPause: true,
  responsive:{
    0:{
        items: 1,
    },
    800:{
        items: 2,
    },
    992:{
        items: 3, 
    },
    1300:{
        items: 3,
    },
    1400:{
        items: 4,
    },
    1500:{
        items: 4,
    }
  }
});
$('.rs-carousel').owlCarousel({
  rtl: false,
  loop: true,
  margin: 0,
  nav: true,
  autoplay: false,
  autoplayTimeout: 2600,
  autoplayHoverPause: true,
  responsive:{
    0:{
        items: 1,
    },
    800:{
        items: 2,
    },
    992:{
        items: 2, 
    },
    1300:{
        items: 3,
    },
    1400:{
        items: 3,
    },
    1500:{
        items: 3,
    }
  }
});
// Project Carousel ========//
$('.project-silder').owlCarousel({
	center: true,
    items: 2,
    loop: true,
    margin: 10,
	nav: true,
    responsive:{
        300:{
            items: 1
        },
        450:{
            items: 1
        },
        600:{
            items: 2
        },
		800:{
            items: 2
        },
		992:{
            items: 2
        },
        1100:{
            items: 4
        },
    }
});
//fancybox//
Fancybox.bind("[data-fancybox]", {  
});
//fancybox//
