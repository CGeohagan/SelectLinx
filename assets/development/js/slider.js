document.addEventListener("DOMContentLoaded", function(){

	var mySwiper = new Swiper ('.swiper-container', {
	  // Optional parameters
	  speed: 500,
	  autoplay: {
	    delay: 15000,
	    disableOnInteraction: false,
	  },
	  loop: true,

	  // If we need pagination
	  pagination: {
	    el: '.swiper-pagination',
	    clickable: true, 
	    type: 'bullets',
	   //  renderBullet: function (index, className) {
    // 		return '<span class="' + className + '">' + (index + 1) + '</span>';
  		// }
	  }

	  // // Navigation arrows
	  // navigation: {
	  //   nextEl: '.swiper-button-next',
	  //   prevEl: '.swiper-button-prev',
	  // },

	});

});


