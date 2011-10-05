<?php defined('SYSPATH') or die('No direct script access.');

Route::set('auth', '<action>',
  array(
    'action' => '(login|logout|register)'
  ))
  ->defaults(array(
    'controller' => 'user'
  ));

// Route::set('signin', 'realestate/blog(/<action>)')
	// ->defaults(array(
		// 'directory' => 'realestate',
		// 'controller' => 'blog',
		// 'action'     => 'index',
	// ));
	
// Route::set('realestate/admin', 'realestate/admin(/<action>)')
	// ->defaults(array(
		// 'directory' => 'realestate',
		// 'controller' => 'admin',
		// 'action'     => 'index',
	// ));
	
// Route::set('realestate/home', 'realestate')
	// ->defaults(array(
		// 'controller' => 'home',
		// 'action'     => 'index',
	// ));

// Route::set('realestate/auth/signup', 'realestate/signup(/<action>)')
	// ->defaults(array(
		// 'directory' => 'realestate',
		// 'directory' => 'auth',
		// 'controller' => 'user',
		// 'action'     => 'signup',
	// ));

// Route::set('realestate/auth/signin', 'realestate/signin(/<action>)')
	// ->defaults(array(
		// 'directory' => 'realestate',
		// 'directory' => 'auth',
		// 'controller' => 'user',
		// 'action'     => 'signin',
	// ));
	
/***********New Paths************/
// Route::set('realestate/user/login', 'signin(/<action>)')
	// ->defaults(array(
		// 'directory' => 'realestate',
		// 'controller' => 'user',
		// 'action'     => 'login',
	// ));
	
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));
