<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::showLogin');
$routes->get('/register', 'Auth::showRegister');
$routes->get('/dashboard', 'Action::index');

$routes->post('/', 'Home::reserve');
$routes->post('/login', 'Auth::doLogin');
