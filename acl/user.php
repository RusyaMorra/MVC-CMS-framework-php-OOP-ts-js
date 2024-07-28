<?php
//*************************************************************************
//* Role access config
//*************************************************************************

return [
	'all' => [
		'register',
		'login',
		'init'
	],
	'authorize' => [
		'register',
		'login',
		'profile'
	],
	'guest' => [
		'register',
		'login',
		'init'
	],
	'admin' => [
		//
	],
];