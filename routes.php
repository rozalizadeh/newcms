<?php

use App\Controller\PageController;
use Pecee\SimpleRouter\SimpleRouter;
use App\Controller\RegisterController;

require_once 'helper.php';

SimpleRouter::get('/', function () {
    return 'Hello world';
});

SimpleRouter::get('/register', 'RegisterController@formRegister');
SimpleRouter::post('/register', 'RegisterController@createAccount');

SimpleRouter::get('/pages/create', function () {
    return view('pages.create');
});

SimpleRouter::get('/login', 'Logincontroller@formLogin');
SimpleRouter::post('/login', 'LoginController@submit');

SimpleRouter::get('/dashboard', 'DashboardController@show');

SimpleRouter::get('/dashboard/pages', 'PageController@show');

SimpleRouter::get('/dashboard/pages/create', 'PageController@create');
SimpleRouter::post('/dashboard/pages/create', 'PageController@storeCreate');
SimpleRouter::get('/dashboard/pages/{id}/delete', 'PageController@deletePage');

SimpleRouter::get('{slug}', 'PageController@renderPage');

SimpleRouter::get('/pages/about', 'PageController@renderAbout');

SimpleRouter::get('dashboard/pages/edit/{id}', 'PageController@edit');
SimpleRouter::Post('dashboard/pages/edit/{id}', 'PageController@update');

//------ Dashboard Menu -------
SimpleRouter::get('/dashboard/menus', 'MenuController@show');
SimpleRouter::get('/dashboard/menus/create', 'MenuController@create');
SimpleRouter::post('/dashboard/menus/create', 'MenuController@storeCreate');

//------ Dashboard Blog --------
SimpleRouter::get('/dashboard/blogs', 'BlogController@show');
SimpleRouter::get('/dashboard/blogs/create', 'BlogController@create');
SimpleRouter::post('/dashboard/blogs/create', 'BlogController@storeCreate');

SimpleRouter::get('/test', 'MenuController@show');

SimpleRouter::get('/menu', 'PageController@show');


