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
	    'client_id'     => ENV['TWITTER_CONSUMER'],
	    'client_secret' => ENV['TWITTER_SECRET'],
	    // No scope - oauth1 doesn't need scope
	],
	]

];
