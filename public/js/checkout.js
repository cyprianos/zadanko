jQuery(function($) {'use strict';
	 
	var form = $('#checkout').click(function(e){
		e.preventDefault();
		var data = $.get('data.php', function(data){
			
			var data = JSON.parse(data),
				products = data.products;
			
			ga('ecommerce:addTransaction', data.transaction);

			for(var i=0, len = products.length; i<len; i++) {
				ga('ecommerce:addItem', products[i]);
			}
			ga('ecommerce:send');

		});
		

		// <?php foreach ($products as $p) : ?>
		// var data = {
		//   'id': '1234',                     // Transaction ID. Required.
		//   'name': 'Fluffy Pink Bunnies',    // Product name. Required.
		//   'sku': 'DD23444',                 // SKU/code.
		//   'category': 'Party Toys',         // Category or variation.
		//   'price': '11.99',                 // Unit price.
		//   'quantity': '1'
		// };

		// ga('ecommerce:addItem', data);
		// <? endforeach; ?>

		

		// ga('ecommerce:send');

		

	})

});
