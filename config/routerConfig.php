<?php

//*************************************************************************
//* router config
//*************************************************************************

return [

//*************************************************************************
//* Admin Routes 
//*************************************************************************
	

	'register' => [
		'controller' => 'Account',
		'action' => 'register',
	],

	'login' => [
		'controller' => 'Account',
		'action' => 'login',
	],
	'changepassword' => [
		'controller' => 'Account',
		'action' => 'login',
	],

	'dashboard' => [
		'controller' => 'admin',
		'action' => 'dashboardInit',
	],
	'dashboard/profile' => [
		'controller' => 'admin',
		'action' => 'index',
	],


	'dashboard/logout' => [
		'controller' => 'Account',
		'action' => 'logout',
	],
	'dashboard/add' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
		
//*************************************************************************
//* User Routes 
//*************************************************************************
	
	'' => [
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