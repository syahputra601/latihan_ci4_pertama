<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('test_user', 'Home::test_user');
$routes->get('menu', 'Home::menus');

$routes->get('user', 'UserController::index');
