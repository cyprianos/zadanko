/*price range*/
(function(){
	var el =  $('#sl2'),
		slider = el.slider;

	if(slider!==undefined) {
		console.log('slider');
		slider.call(el);
	}

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};
	
}());
// if(('#sl2').slider) {
//  $('#sl2').slider();
// }

	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});


// console.log($('.add-todo-cart'));

	$('.add-to-cart').click(function() {
		console.log('addtocart');
		//get data from for example data attribute
		//
		// like this: var data = $('.add-to-cart').attr('data-item');
		// var dummyData = {
		//   'id': '1234',                     // Transaction ID. Required.
		//   'name': 'Fluffy Pink Bunnies',    // Product name. Required.
		//   'sku': 'DD23444',                 // SKU/code.
		//   'category': 'Party Toys',         // Category or variation.
		//   'price': '11.99',                 // Unit price.
		//   'quantity': '1'
		// };

		// ga('ecommerce:addItem', dummyData);
	});
});
