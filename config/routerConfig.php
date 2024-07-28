<?php

//*************************************************************************
//* router config
//*************************************************************************

return [

//*************************************************************************
//* Admin Routes 
//*************************************************************************
	

	'dashboard/register' => [
		'controller' => 'Account',
		'action' => 'register',
	],

	'dashboard/login' => [
		'controller' => 'Account',
		'action' => 'login',
	],
	'dashboard/changepassword' => [
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
		'controller' => 'Home',
		'action' => 'main',
	],

	'blog' => [
		'controller' => 'Blog',
		'action' => 'main',
	],
	'register' => [
		'controller' => 'User',
		'action' => 'register',
	],
	'login' => [
		'controller' => 'User',
		'action' => 'login',
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