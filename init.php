<?php defined('SYSPATH') or die('No direct script access.');

Route::set('realestate/blog', 'realestate/blog(/<action>)')
	->defaults(array(
		'directory' => 'realestate',
		'controller' => 'blog',
		'action'     => 'index',
	));
	
Route::set('realestate/admin', 'realestate/admin(/<action>)')
	->defaults(array(
		'directory' => 'realestate',
		'controller' => 'admin',
		'action'     => 'index',
	));