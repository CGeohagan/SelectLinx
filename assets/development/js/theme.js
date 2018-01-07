jQuery(document).ready(function($){


	
	/********************
		 Logo Animations
	********************/

	// When you scroll past the large logo, add the small logo class to make it appear

	function logoAnimations() {

		// For Chrome, use document.body.scrollTop to find the distance scrolled in pixels
		var bodyScrollTop = document.scrollingElement.scrollTop;

		// For Firefox and IE, use document.documentElement.scrollTop to find the distance scrolled in pixels
		var docScrollTop = document.documentElement.scrollTop;

		// The approximate number of pixels scrolled to the large logo is hidden
		var logoTop = 40;

		// Variables for the small logo, large logo, and menu container
		var logoSmall = document.querySelector('.logo-small');
		var logo = document.querySelector('.logo');
		var menuContainer = document.querySelector('.menu-container');

		if ( bodyScrollTop > logoTop ) {
			logoSmall.classList.add('is-small-logo-active');
			logo.classList.add('is-logo-hidden');
			menuContainer.classList.add('is-menu-not-centered');
		} else {
			logoSmall.classList.remove('is-small-logo-active');
			logo.classList.remove('is-logo-hidden');
			menuContainer.classList.remove('is-menu-not-centered');
		}

	}



	/**************************************************
		Running functions as the user is scrolling
	**************************************************/

		// Using variable didScroll to check whether the user scrolled
		var didScroll = false;

		// When the user scrolls, didScroll variable becomes true
		window.onscroll = scrollFunction;
		function scrollFunction() {
			didScroll = true;
		}

		// Setting a time interval
		setInterval(function() {
			// To check if the user scrolled
			if(didScroll) {
				logoAnimations();
			}
		}, 100);



	/**************************************************
			Mobile Menu Button Functionality
	**************************************************/

	var accessToggle = document.querySelector('.access__toggle');
	var menuContainer = document.querySelector('.menu-container');

	accessToggle.addEventListener('click', function() {
		menuContainer.classList.toggle('is-menu-active');
	});

});
