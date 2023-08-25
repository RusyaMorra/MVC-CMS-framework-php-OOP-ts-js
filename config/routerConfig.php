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
		'controller' => 'Dashboard',
		'action' => 'dashboardMainPanel',
	],
	'dashboard/profile' => [
		'controller' => 'Account',
		'action' => 'profile',
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
		'controller' => 'Main',
		'action' => 'home',
	],

	'blog' => [
		'controller' => 'Main',
		'action' => 'blog',
	],
	'chat' => [
		'controller' => 'Chat',
		'action' => 'ChatInit',
	],
	'about' => [
		'controller' => 'Main',
		'action' => 'about',
	],
	'contact' => [
		'controller' => 'Main',
		'action' => 'contact',
	]

];