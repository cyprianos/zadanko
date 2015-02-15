<?php
//products from category Party Toys
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
	)
);

$prodids = array_map(function($item){
	return intval($item['id']);
}, $products);

$totals = array_map(function($item){
	return intval($item['quantity']) * floatval($item['price']);
}, $products);

?>

<script type="text/javascript">
var google_tag_params = {
	ecomm_prodid: <?= json_encode($prodids); ?>,
	ecomm_pagetype: 'cart',
	ecomm_totalvalue: <?= json_encode($totals); ?>
};

</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 960369597;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""
src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/960369597/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>