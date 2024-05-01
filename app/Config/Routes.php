<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::reserve');

$routes->get('/login', 'Auth::showLogin');
$routes->post('/login', 'Auth::login');

$routes->get('/register', 'Auth::showRegister');
$routes->post('/register', 'Auth::register');

$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Action::index');
$routes->post('/dashboard', 'Action::update');