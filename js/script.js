
$(document).ready(function(){
  // Init wow aniamtion
  var wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       false,       // default true
      live:         true        // default
    }
  );
  wow.init();

  // Init owl-carousel
  $('.owl-carousel').owlCarousel();
  
  // Current day
  let today = new Date().getDay();
  $( ".contact-openhours p:nth-child(" +today +")" ).addClass('dayActive');  
});

$('.owl-carousel').owlCarousel({
  items:1,
  margin:10,
  loop:true,
  autoplay:true,
  autoHeight: false,
  autoHeightClass: 'owl-height'
});

