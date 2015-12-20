<?php
return [
	/*
    |--------------------------------------------------------------------------
    | Default Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default sms connection that gets used while
    | using this sms library. This connection is used when another is
    | not explicitly specified when executing a given sms function.
    |
    */
	'default_driver' => 'melipayamak',
	/*
    |--------------------------------------------------------------------------
    | Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the sms "connections" for your application as
    | well as their endpoints. You may even define multiple connections at the
    | same time and indicate which one to use by your code.
    |
    */
	'connections'    => [
		'melipayamak' => [
			'endpoint' => 'http://api.payamak-panel.com/post/Send.asmx?wsdl',
			'username' => '',
			'password' => '',
			'numbers'  => ['default' => 'your_default_number', 'other_number']
		],
		'smsir'       => [
			'endpoint' => 'http://n.sms.ir/ws/SendReceive.asmx?wsdl',
			'username' => '',
			'password' => '',
			'numbers'  => ['default' => 'your_default_number', 'other_number']
		]
	],


	'profiles'       => [
		'system' => [
			'connection' => 'smsir',
			'number'     => ''
		]
	]
];