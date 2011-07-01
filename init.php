<?php defined('SYSPATH') or die('No direct script access.');

/* 
 * The Module `init.php` file can perform additional environment setup, including adding routes.
 * Think of it like a mini-bootstrap for your Module :)
 */

// Define some Module constant
//define('MOD_CONSTANT', 'I am constanting improving...');

// Enabling the Userguide module from my Module
//Kohana::modules(Kohana::modules() + array('userguide' => MODPATH.'userguide'));

/*
 * Define Module Specific Routes
 */
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