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
	    'client_id'     => 'Your Twitter client ID',
	    'client_secret' => 'Your Twitter Client Secret',
	    // No scope - oauth1 doesn't need scope
	],
	]

];
