document.addEventListener("DOMContentLoaded", function(){

	/*************************
		ForEach Polyfill
	**************************/

  // Function to make IE9+ support forEach:
  (function() {
      if (typeof NodeList.prototype.forEach === "function")
          return false;
      else
          NodeList.prototype.forEach = Array.prototype.forEach;
  })();

	/*************************
		 Dropdown Functionality
	**************************/

	var details = document.querySelectorAll('.details__wrapper');

	details.forEach(function(detail){
		detail.addEventListener('click', function() {
			detail.classList.toggle('detail-active');
		});
	});


});