<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session',

	/**
	 * Consumers
	 */
	'consumers' => [

		'Twitter' => [
	    'client_id'     => env('TWITTER_CONSUMER'),
	    'client_secret' => env('TWITTER_SECRET')
	    // No scope - oauth1 doesn't need scope
	],
	]

];
