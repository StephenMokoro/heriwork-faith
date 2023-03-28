
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
 

  /**
   * Easy event listener function
   */
  

  /**
   * Easy on scroll event listener 
   */

  /**
   * Navbar links active state on scroll
   */
  
  
  
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 120
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
 


  /**
   * Portfolio details slider
   */
  

  /**
   * Animation on scroll
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})();