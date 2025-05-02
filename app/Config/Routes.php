<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('authenticate', 'Home::authenticate');
$routes->get('view', 'Home::view');