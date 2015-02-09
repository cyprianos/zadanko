<?php



//dummy data
$products = array(
	
	array(
		'id' => '1111',
	    // Transaction ID. Required.
		'name'=> 'Fluffy Pink Bunnies',    // Product name. Required.
		'sku'=> 'DD23000',                 // SKU/code.
		'category'=> 'Party Toys',         // Category or variation.
		'price'=> '11.99',                 // Unit price.
		'quantity'=> '1'
	),

	array(
	    // Transaction ID. Required.
    	'id' => '2222',
		'name'=> 'Fluffy Pink Bunnies',    // Product name. Required.
		'sku'=> 'DD23000',                 // SKU/code.
		'category'=> 'Party Toys',         // Category or variation.
		'price'=> '11.99',                 // Unit price.
		'quantity'=> '1'
	),

	array(
		'id' => '3333',
	    // Transaction ID. Required.
		'name'=> 'Fluffy Pink Bunnies',    // Product name. Required.
		'sku'=> 'DD23000',                 // SKU/code.
		'category'=> 'Party Toys',         // Category or variation.
		'price'=> '11.99',                 // Unit price.
		'quantity'=> '1'
	),


	array(
		'id' => '4444',
	    // Transaction ID. Required.
		'name'=> 'Fluffy Pink Bunnies',    // Product name. Required.
		'sku'=> 'DD23000',                 // SKU/code.
		'category'=> 'Party Toys',         // Category or variation.
		'price'=> '11.99',                 // Unit price.
		'quantity'=> '1'
	),


	array(
		'id' => '5555',
	    // Transaction ID. Required.
		'name'=> 'Fluffy Pink Bunnies',    // Product name. Required.
		'sku'=> 'DD23000',                 // SKU/code.
		'category'=> 'Party Toys',         // Category or variation.
		'price'=> '11.99',                 // Unit price.
		'quantity'=> '1'
	)
);

$transaction = array(
	'id' => 123,
	'affiliation' => 'fajny sklepik',
	'revenue'=> '100',
	'shipping' => '10',
	'tax' => '23'
);

// $data = 
// 	'id': '1234',                     // Transaction ID. Required.
// 	'name': 'Fluffy Pink Bunnies',    // Product name. Required.
// 	'sku': 'DD23444',                 // SKU/code.
// 	'category': 'Party Toys',         // Category or variation.
// 	'price': '11.99',                 // Unit price.
// 	'quantity': '1'
// };

$result = array(
	'transaction'=> $transaction,
	'products' => $products
);

echo json_encode($result);