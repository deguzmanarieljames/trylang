<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/adreg', 'AdminRegister::eryel');
$routes->get('/adreg/(:any)', 'AdminRegister::adreg/$1');
$routes->post('/save', 'AdminRegister::save');
$routes->get('/delete/(:any)', 'AdminRegister::delete/$1');
$routes->get('/edit/(:any)', 'AdminRegister::edit/$1');
$routes->get('/search/(:any)', 'AdminRegister::search/$1');