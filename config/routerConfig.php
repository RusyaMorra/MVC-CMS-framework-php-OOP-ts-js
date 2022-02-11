<?php

//*************************************************************************
//* router config
//*************************************************************************

return [

//*************************************************************************
//* Admin Routes 
//*************************************************************************
	'' => [
		'controller' => 'admin',
		'action' => 'init',
	],

	'register' => [
		'controller' => 'admin',
		'action' => 'register',
	],

	'login' => [
		'controller' => 'admin',
		'action' => 'login',
	],

	'admin' => [
		'controller' => 'admin',
		'action' => 'index',
	],


	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
		
//*************************************************************************
//* User Routes 
//*************************************************************************
	
	'home' => [
		'controller' => 'main',
		'action' => 'home',
	],

	'blog' => [
		'controller' => 'main',
		'action' => 'blog',
	],
	'shop' => [
		'controller' => 'main',
		'action' => 'shop',
	],
	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	]

];