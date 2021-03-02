<?php

function get_data($request) {
	$parameters = $request->get_params();

	return [
		'hello-world' => 1,
	];
}

add_action( 'rest_api_init', function () {

	// /wp-json/counterflows/v1/data
	register_rest_route( 'counterflows/v1', '/data', array(
		'methods' => 'GET',
		'callback' => 'get_data',
	) );
} );

