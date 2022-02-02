<?php
//*************************************************************************
//* router config
//*************************************************************************

return [
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],

	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],

	'admin' => [
		'controller' => 'admin',
		'action' => 'adminmain',
	],

	'home' => [
		'controller' => 'home',
		'action' => 'home',
	],

	'blog' => [
		'controller' => 'blog',
		'action' => 'blog',
	],
	'shop' => [
		'controller' => 'shop',
		'action' => 'shop',
	],
	
];