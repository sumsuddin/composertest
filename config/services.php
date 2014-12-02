<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],
    'github' =>[
        'client_id' => '2fdce7080e184e70696b',
        'client_secret'=>'1a45851a46a1a470373197e416cfe9e43d229ff7',
        'redirect'=> 'http://localhost:8000/login'
    ]

];
