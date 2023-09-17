<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/adreg', 'AdminRegister::eryel');
$routes->get('/adreg/(:any)', 'AdminRegister::adreg/$1');